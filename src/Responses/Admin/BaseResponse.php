<?php
/**
 * @date_of_create: 11/24/2021 AD 10:44
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class BaseResponse
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property string         $title
 * @property GlobalResponse $global
 * @property Server[]       $servers
 * @property Plan[]         $plans
 * @property Ip[]           $ips
 * @property array          $ips6
 * @property array          $ips6_subnet
 * @property array          $ips_int
 * @property User[]         $users
 * @property array          $isos
 * @property string         $_virt
 * @property string         $virt
 * @property string         $kvm
 * @property string         $node_selected
 * @property Os[]           $oses
 * @property array          $oslist
 * @property OsTemplate[]   $ostemplates
 * @property Resource       $resourses
 * @property ServerGroup[]  $servergroup
 * @property array          $scripts
 * @property float          $time_taken
 * @property integer        $timenow
 */
class BaseResponse extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public
        $title = 'string',
        $globals = 'class:YiiMan\VirtualizorSdk\Responses\Admin\GlobalResponse',
        $servers = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\Server',
        $plans = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\Plan',
        $ips = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\Ip',
        $ips6 = 'array',
        $ips6_subnet = 'array',
        $ips_int = 'array',
        $users = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\User',
        $isos = 'array',
        $_virt = 'string',
        $virt = 'string',
        $kvm = '',
        $node_selected = '',
        $oses = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\Os',
        $oslist = 'array',
        $ostemplates = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\OsTemplate',
        $resourses = 'class:YiiMan\VirtualizorSdk\Responses\Admin\Resource',
        $servergroup = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\ServerGroup',
        $scripts = 'array',
        $time_taken = 'float',
        $timenow = 'int';
}