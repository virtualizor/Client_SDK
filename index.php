<?php
/**
 * @date_of_create: 11/21/2021 AD 12:21
 */

use YiiMan\VirtualizorSdk\PostData\CreateVS;
use YiiMan\VirtualizorSdk\PostData\EditUser;
use YiiMan\VirtualizorSdk\VirtualizorAdmin;

include 'vendor/autoload.php';

$visualizor = new VirtualizorAdmin();
echo '<pre>';





//create
//$servers = $visualizor->servers();
//$sv = new CreateVS();
//$sv->cores0 = 1;
//
//$sv->rootpass0 = 'yiiman';
//$sv->virt0 = $sv::VIRTUALIZOR_TYPE_kvm;
//$sv->user_email0 = 'amintado@gmail.com';
//$sv->user_pass0 = 'YiiMan@@@22';
//$sv->hostname0 = 'yiiman';
//$sv->osid0 = 870;
//
//$sv->bandwidth0 = 500;
//$sv->space0 = 15;
//$sv->ram0 = 512;


//$res=$visualizor->listvs();
//$ips = $visualizor->ips();
//$sv->ips0[] = $ips->ips[0]->gateway;

//$plans = $visualizor->plans();
//$sv->plid0 = (int)$plans->plans[0]->plid;
//
//$sv->node_select0 = $servers->servers[0]->serid;
//$created = $visualizor->addvs($sv, []);


//server list
//$vsList=$visualizor->vs();


//suspend
//$suspend=$visualizor->userSuspend(2);

//unsuspend
//$unsuspend=$visualizor->userUnsuspend(2);

//edit
$editPost=new EditUser();
$editPost->fname="amin".uniqid();
$edit=$visualizor->edituser($editPost,2);

//terminate


//stop


//restart


//reinstall


//start



//checkStatus



//checkUsage


//hasSpace



//reset_password


//get_service_details




echo 'finish';
