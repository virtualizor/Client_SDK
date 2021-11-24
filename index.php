<?php
/**
 * @date_of_create: 11/21/2021 AD 12:21
 */

use YiiMan\VirtualizorSdk\PostData\CreateVS;
use YiiMan\VirtualizorSdk\Responses\Admin\VS;
use YiiMan\VirtualizorSdk\VirtualizorAdmin;

include 'vendor/autoload.php';

$visualizor = new VirtualizorAdmin();
echo '<pre>';
$sv = new CreateVS();
$sv->cores = 1;

$sv->rootpass0='yiiman';
$sv->virt=$sv::VIRTUALIZOR_TYPE_kvm;
$sv->user_email0='info@yiiman.ir';
$sv->user_pass='YiiMan@@@22';
$sv->hostname0='yiiman';
$sv->osid0=870;
$sv->plid0=1;


//$res=$visualizor->listvs();
$res=$visualizor->ips();
$sv->ips[]=$res->ips[0]->gateway;
$servers=$visualizor->servers();
$sv->node_select0=$servers->servers[0]->serid;
$created=$visualizor->addvs($sv, []);

echo 'finish';
