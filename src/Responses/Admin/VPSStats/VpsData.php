<?php
/**
 * @date_of_create: 11/28/2021 AD 14:13
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin\VPSStats;

/**
 * Class VpsData
 * @package YiiMan\VirtualizorSdk\Responses\Admin\VPSStats
 * @property  integer $status
 * @property  integer $net_in
 * @property  integer $net_out
 * @property  float   $used_cpu
 * @property  integer $used_ram
 * @property  integer $ram
 * @property  float   $used_disk
 * @property  integer $disk
 * @property  integer $used_inode
 * @property  integer $inode
 * @property  integer $used_bandwidth
 * @property  integer $bandwidth
 * @property  string  $virt
 * @property  integer $io_read
 * @property  integer $io_write
 * @property  integer $vpsid
 * @property  string  $vps_name
 * @property  string  $hostname
 * @property  array   $vps_ram_info
 * @property  string  $speed_cap
 * @property  integer $cores
 */
class VpsData extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $status = 'int';
    public $net_in = 'int';
    public $net_out = 'int';
    public $used_cpu = "float";
    public $used_ram = "int";
    public $ram = "int";
    public $used_disk = 'float';
    public $disk = "int";
    public $used_inode = 'int';
    public $inode = 'int';
    public $used_bandwidth = 'int';
    public $bandwidth = 'int';
    public $virt = "string";
    public $io_read = 'int';
    public $io_write = 'int';
    public $vpsid = "int";
    public $vps_name = "string";
    public $hostname = "string";
    public $vps_ram_info = 'array';
    public $speed_cap = '';
    public $cores = "int";
}