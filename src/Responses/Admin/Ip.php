<?php
/**
 * @date_of_create: 11/24/2021 AD 10:55
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class Ip
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property $ipid
 * @property $ippid
 * @property $ip_serid
 * @property $vpsid
 * @property $ip
 * @property $ipv6
 * @property $ipr_netmask
 * @property $primary
 * @property $ipr_ips
 * @property $mac_addr
 * @property $locked
 * @property $note
 */
class Ip extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $ipid = "int";
    public $ippid = "int";
    public $ip_serid = "int";
    public $vpsid = "int";
    public $ip = "string";
    public $ipv6 = "int";
    public $ipr_netmask = "";
    public $primary = "int";
    public $ipr_ips = "";
    public $mac_addr = "";
    public $locked = "int";
    public $note = '';

}