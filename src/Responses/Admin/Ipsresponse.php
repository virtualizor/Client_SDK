<?php
/**
 * @date_of_create: 11/24/2021 AD 12:15
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class Ipsresponse
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property IpFull[] $ips
 * @property          $ippools
 */
class Ipsresponse extends LowResponseBase
{
    public $ips = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\IpFull';
    public $ippools = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\Ippool';
}