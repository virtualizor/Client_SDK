<?php
/**
 * @date_of_create: 11/22/2021 AD 09:44
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;


/**
 * Class Server
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property    integer $serid server ID
 * @property    integer $sgid
 * @property            $server_name
 * @property            $virt
 * @property            $ip
 * @property            $internal_ip
 * @property            $vnc_ip
 * @property            $settings
 * @property            $unique_txt
 * @property            $lv
 * @property            $hvm
 * @property            $licnumvs
 * @property            $total_ram
 * @property            $overcommit
 * @property            $ram
 * @property            $total_space
 * @property            $space
 * @property            $os
 * @property            $os_arch
 * @property            $uname
 * @property            $version
 * @property            $patch
 * @property            $lic_expires
 * @property            $checked
 * @property            $locked
 * @property            $vcores
 * @property            $ips
 * @property            $ipv6
 * @property            $ipv6_subnet
 * @property            $ips_int
 * @property            $bandwidth
 * @property            $update_resource
 * @property            $location
 * @property            $status
 * @property            $last_reverse_sync
 * @property            $ha_master
 * @property            $numvps
 * @property            $alloc_ram
 * @property            $alloc_space
 * @property            $alloc_cpu
 * @property            $alloc_cpu_percent
 * @property            $alloc_bandwidth
 * @property array      $virts
 */
class Server extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public
        $serid = 'int',
        $sgid = 'int',
        $server_name = 'string',
        $virt = 'array',
        $ip = 'string',
        $internal_ip = 'string',
        $vnc_ip = 'string',
        $settings = 'string',
        $unique_txt = 'string',
        $lv = 'string',
        $hvm = 'string',
        $licnumvs = 'string',
        $total_ram = 'int',
        $overcommit = 'string',
        $ram = 'int',
        $total_space = 'int',
        $space = 'int',
        $os = 'string',
        $os_arch = 'string',
        $uname = 'string',
        $version = 'string',
        $patch = 'string',
        $lic_expires = 'string',
        $checked = 'string',
        $locked = 'bool',
        $vcores = 'int',
        $ips = 'int',
        $ipv6 = 'string',
        $ipv6_subnet = 'string',
        $ips_int = 'string',
        $bandwidth = 'string',
        $update_resource = 'string',
        $location = 'string',
        $status = 'int',
        $last_reverse_sync = 'string',
        $ha_master = 'string',
        $numvps = 'string',
        $alloc_ram = 'string',
        $alloc_space = 'string',
        $alloc_cpu = 'string',
        $alloc_cpu_percent = 'string',
        $alloc_bandwidth = 'string';

    public $virts = 'string';


}