<?php
/**
 * @date_of_create: 11/28/2021 AD 12:36
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class Ststus
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property integer $status
 * @property float   $used_cpu
 * @property integer $used_ram
 * @property float   $used_disk
 * @property integer $net_in
 * @property integer $net_out
 * @property integer $used_inode
 * @property integer $io_read
 * @property integer $io_write
 * @property integer $inode
 * @property integer $ram
 * @property integer $disk
 * @property float   $used_bandwidth
 * @property integer $bandwidth
 * @property string  $virt
 */
class Status extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $status = 'int';
    public $used_cpu = 'float';
    public $used_ram = 'int';
    public $used_disk = 'float';
    public $net_in = 'int';
    public $net_out = 'int';
    public $used_inode = 'int';
    public $io_read = 'int';
    public $io_write = 'int';
    public $inode = 'int';
    public $ram = 'int';
    public $disk = 'int';
    public $used_bandwidth = 'float';
    public $bandwidth = 'int';
    public $virt = 'string';
}