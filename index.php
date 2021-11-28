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



// < Parameters >
{
    $serverIP='127.0.0.1';
    $serverPort=4085;
    $serverProtocol='https';

    $serverKey='Get from side menu >Configuration>server info';
    $serverKeyPass='Get from side menu >Configuration>server info';
    $visualizor = new VirtualizorAdmin();
    $visualizor->Virtualizor_Admin_API($serverIP,$serverKey,$serverKeyPass,$serverPort,$serverProtocol);
    const NEW_LINE = "\n\n\n\n\n";
}
// </ Parameters >


echo 'Started API test';
$u = $visualizor->users();
if ($u->isSuccess()) {
    $u = $u->users[0];
    $userID = $u->uid;
    $userEmail = $u->email;

    //create
    $servers = $visualizor->servers();//classified
    if ($servers->isSuccess()) {
        $plans = $visualizor->plans();//classified
        if ($plans->isSuccess()) {
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
                    $created = $visualizor->addvs($sv, []);//classified
                    echo 'Create new VPS was '.($created->isSuccess() ? 'Success' : 'not success because:'.$created->getError()->status_title).NEW_LINE;
                }
            }
            // </ Create New VPS after validate data  >


        }

        $vpsList = $visualizor->vps_list();//classified
        if ($vpsList->isSuccess()) {
            $vpsID = $vpsList->vs[0]->vpsid;
            // < Edit User >
            {
                $editPost = new EditUser();
                $editPost->fname = "YiiMan".uniqid();
                $editPost->newemail0 = 'test@gmail.com';
                if ($editPost->validate()) {
                    $edit = $visualizor->edituser($editPost, $userID);//classified
                    echo 'Edit user was '.($edit->isSuccess() ? 'Success' : 'not success because:'.$edit->getError()->status_title).NEW_LINE;

                } else {
                    echo 'Edit User: your data has some errors <'.implode(',', $editPost->errors()).'>'.NEW_LINE;
                }
            }
            // </ Edit User >

            if (!empty($servers)) {
                //suspend
                $suspend = $visualizor->userSuspend($userID);//classified
                echo 'user Suspend was '.($suspend->isSuccess() ? 'Success' : 'not success because:'.$suspend->getError()->status_title).NEW_LINE;


                //unsuspend
                $unsuspend = $visualizor->userUnsuspend($userID);//classified
                echo 'user UnSuspend was '.($unsuspend->isSuccess() ? 'Success' : 'not success because:'.$unsuspend->getError()->status_title).NEW_LINE;

                //stop
                $stopped = $visualizor->stop($vpsID);

                //start
                $start = $visualizor->start($vpsID);

                //restart

                $sid = $servers->servers[0]->serid;
                $restart = $visualizor->restart($vpsID);


                //reinstall|rebuild
                $sid = $servers->servers[0]->serid;

                $rebuild = new Rebuild();
                $rebuild->osid = 870;
                $rebuild = $visualizor->rebuild($rebuild, $vpsID);//classified
                echo 'VPS rebuild was '.($rebuild->isSuccess() ? 'Success' : 'not success because:'.$rebuild->getError()->status_title).NEW_LINE;


                //checkStatus
                $checkStatus = $visualizor->status([$vpsID]);//classified
                if (!$checkStatus->isSuccess()) {
                    echo 'VPS stats has error:<'.$checkStatus->getError()->status_title.'>('.$checkStatus->getError()->status_description.')'.NEW_LINE;
                } else {
                    echo "VPS Stat: ".NEW_LINE;
                    var_export($checkStatus);
                }


                //checkUsage
                $checkUsage = $visualizor->stat($vpsID);
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
                $resetPassword = $visualizor->managevps($manage, $vpsID);

                //get_service_details


                //terminate
                $deleted = $visualizor->delete_vs($vpsID);


            }
        }

    }
}


echo NEW_LINE.'finish'.NEW_LINE;
