<?php
/**
 * @date_of_create: 11/21/2021 AD 12:21
 */

use YiiMan\VirtualizorSdk\PostData\CreateVS;
use YiiMan\VirtualizorSdk\PostData\EditUser;
use YiiMan\VirtualizorSdk\PostData\ManageVPS;
use YiiMan\VirtualizorSdk\PostData\Rebuild;
use YiiMan\VirtualizorSdk\VirtualizorAdmin;


include 'vendor/autoload.php';

// < Load .env data >
{
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
}
// </ Load .env data >


// < Initialize SDK >
{
    $virtualizor = new VirtualizorAdmin();
    $virtualizor->Virtualizor_Admin_API
    (
        $_ENV['SERVER_IP'],
        $_ENV['SERVER_KEY'],
        $_ENV['SERVER_PASS'],
        $_ENV['SERVER_PORT'],
        $_ENV['SERVER_PROTOCOL']
    );
    define('NEW_LINE',"\n\n\n\n\n") ;
}
// </ Initialize SDK >


echo 'Started API test';
$u = $virtualizor->users();
if ($u->isSuccess()) {
    $u = $u->users[0];
    $userID = $u->uid;
    $userEmail = $u->email;

    //create
    $servers = $virtualizor->servers();//classified
    if ($servers->isSuccess()) {
        $plans = $virtualizor->plans();//classified
        if ($plans->isSuccess()) {
            $osTemplates=$virtualizor->ostemplates()->oslist[0];
            $sv = new CreateVS();
            $sv->virt0 = $sv::VIRTUALIZOR_TYPE_kvm;
            $sv->user_email0 = $userEmail;
            $sv->rootpass0 = 'YiiMan@@@22';
            $sv->hostname0 = 'yiiman';
            $sv->osid0 = 870;

            $sv->plid0 = (int) $plans->plans[0]->plid;
            $sv->node_select0 = $servers->servers[0]->serid;


            // < Create New VPS after validate data >
            {
                if ($sv->validate()) {
                    $created = $virtualizor->addvs($sv, []);//classified
                    echo 'Create new VPS was '.($created->isSuccess() ? 'Success' : 'not success because:'.$created->getError()->status_title).NEW_LINE;
                }
            }
            // </ Create New VPS after validate data  >


        }

        $vpsList = $virtualizor->vps_list();//classified
        if ($vpsList->isSuccess()) {
            $vpsID = $vpsList->vs[0]->vpsid;
            // < Edit User >
            {
                $editPost = new EditUser();
                $editPost->fname = "YiiMan".uniqid();
                $editPost->newemail0 = 'test@gmail.com';
                if ($editPost->validate()) {
                    $edit = $virtualizor->edituser($editPost, $userID);//classified
                    echo 'Edit user was '.($edit->isSuccess() ? 'Success' : 'not success because:'.$edit->getError()->status_title).NEW_LINE;

                } else {
                    echo 'Edit User: your data has some errors <'.implode(',', $editPost->errors()).'>'.NEW_LINE;
                }
            }
            // </ Edit User >

            if (!empty($servers)) {
                //suspend
                $suspend = $virtualizor->userSuspend($userID);//classified
                echo 'user Suspend was '.($suspend->isSuccess() ? 'Success' : 'not success because:'.$suspend->getError()->status_title).NEW_LINE;


                //unsuspend
                $unsuspend = $virtualizor->userUnsuspend($userID);//classified
                echo 'user UnSuspend was '.($unsuspend->isSuccess() ? 'Success' : 'not success because:'.$unsuspend->getError()->status_title).NEW_LINE;

                //stop
                $stopped = $virtualizor->stop($vpsID);

                //start
                $start = $virtualizor->start($vpsID);

                //restart

                $sid = $servers->servers[0]->serid;
                $restart = $virtualizor->restart($vpsID);


                //reinstall|rebuild
                $sid = $servers->servers[0]->serid;

                $rebuild = new Rebuild();
                $rebuild->osid = 870;
                $rebuild = $virtualizor->rebuild($rebuild, $vpsID);//classified
                echo 'VPS rebuild was '.($rebuild->isSuccess() ? 'Success' : 'not success because:'.$rebuild->getError()->status_title).NEW_LINE;


                //checkStatus
                $checkStatus = $virtualizor->status([$vpsID]);//classified
                if (!$checkStatus->isSuccess()) {
                    echo 'VPS stats has error:<'.$checkStatus->getError()->status_title.'>('.$checkStatus->getError()->status_description.')'.NEW_LINE;
                } else {
                    echo "VPS Stat: ".NEW_LINE;
                    var_export($checkStatus);
                }


                //checkUsage
                $checkUsage = $virtualizor->stat($vpsID);
                if (!$checkUsage->isSuccess()) {
                    echo 'VPS Usage has error:<'.$checkUsage->getError()->status_title.'>('.$checkUsage->getError()->status_description.')'.NEW_LINE;
                } else {
                    echo "VPS Usage: ".NEW_LINE;
                    var_export($checkUsage);
                }


                //hasSpace


                //reset_password
                $manage = new ManageVPS();
                $manage->rootpass = 'amidikukuhkuh';
                $resetPassword = $virtualizor->managevps($manage, $vpsID);

                //get_service_details


                //terminate
                $deleted = $virtualizor->delete_vs($vpsID);


            }
        }

    }
}


echo NEW_LINE.'finish'.NEW_LINE;
