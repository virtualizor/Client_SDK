<?php
/**
 * @date_of_create: 11/24/2021 AD 11:05
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class Resource
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property     $licnumvs
 * @property     $ram
 * @property     $space
 * @property     $total_ram
 * @property     $total_space
 * @property     $check_kernel
 * @property     $overcommit
 * @property     $lv
 * @property     $thin_lv
 * @property     $disk_path
 * @property     $cpucores
 * @property     $to_master_data
 * @property     $storages
 * @property     $os_name
 * @property     $licexpires_txt
 * @property     $version
 * @property     $patch
 * @property     $vs_bandwidth
 * @property     $virt
 * @property  Os $os
 * @property     $server_time
 * @property     $ips
 * @property     $ipv6
 * @property     $ipv6_subnet
 * @property     $ips_int
 * @property     $vcores
 */
class Resource extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $licnumvs = "int";
    public $ram = 'int';
    public $space = 'gloat';
    public $total_ram = 'int';
    public $total_space = 'float';
    public $check_kernel = "";
    public $overcommit = 'int';
    public $lv = "";
    public $thin_lv = "";
    public $disk_path = "";
    public $cpucores = 'int';
    public $to_master_data = 'array';
    public $storages = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\Storage';
    public $os_name = "";
    public $licexpires_txt = "";
    public $version = "";
    public $patch = "";
    public $vs_bandwidth = 'array';
    public $virt = "";
    public $os = 'class:YiiMan\VirtualizorSdk\Responses\Admin\Os2';
    public $server_time = 'int';
    public $ips = "int";
    public $ipv6 = "int";
    public $ipv6_subnet = "int";
    public $ips_int = "int";
    public $vcores = '';
}