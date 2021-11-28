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

$visualizor = new VirtualizorAdmin();
echo '<pre>';
$u = $visualizor->users()->users[0];
$userID = $u->uid;
$userEmail = $u->email;
//create
$servers = $visualizor->servers();//classified

$sv = new CreateVS();
$sv->virt0 = $sv::VIRTUALIZOR_TYPE_kvm;
$sv->user_email0 = $userEmail;
$sv->rootpass0 = 'YiiMan@@@22';
$sv->hostname0 = 'yiiman';
$sv->osid0 = 870;
$plans = $visualizor->plans();//classified
$sv->plid0 = (int) $plans->plans[0]->plid;
$sv->node_select0 = $servers->servers[0]->serid;
$created = $visualizor->addvs($sv, []);//classified

$vpsList = $visualizor->vps_list();//classified
$vpsID = $vpsList->vs[0]->vpsid;
//edit
$editPost = new EditUser();
$editPost->fname = "YiiMan".uniqid();
$editPost->newemail0 = 'test@gmail.com';

$edit = $visualizor->edituser($editPost, $userID);//classified

if (!empty($servers)) {
    //suspend
    $suspend = $visualizor->userSuspend($userID);//classified

    //unsuspend
    $unsuspend = $visualizor->userUnsuspend($userID);//classified

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


    //checkStatus
    $checkStatus = $visualizor->status([$vpsID]);//classified

    //checkUsage
    $checkUsage = $visualizor->stat($vpsID);

    //hasSpace


    //reset_password
    $manage = new ManageVPS();
    $manage->rootpass = 'amidikukuhkuh';
    $resetPassword = $visualizor->managevps($manage, $vpsID);

    //get_service_details


    //terminate
    $deleted = $visualizor->delete_vs($vpsID);


}


echo 'finish';
