<?php
/**
 * @date_of_create: 11/24/2021 AD 12:17
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class IpFull
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property  integer $ipp_serid
 * @property  string  $ippool_name
 * @property  string  $gateway
 * @property  string  $netmask
 * @property  string  $ns1
 * @property  string  $ns2
 * @property  string  $nat
 * @property  string  $nat_name
 * @property  integer $routing
 * @property  integer $internal
 * @property  string  $bridge
 * @property  integer $mtu
 * @property  integer $vlan
 * @property  string  $hostname
 */
class IpFull extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $ipp_serid = "int";
    public $ippool_name = "";
    public $gateway = "";
    public $netmask = "";
    public $ns1 = "";
    public $ns2 = "";
    public $nat = "";
    public $nat_name = "";
    public $routing = "int";
    public $internal = "int";
    public $bridge = "";
    public $mtu = "int";
    public $vlan = "int";
    public $hostname = '';
}