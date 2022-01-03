<?php
/**
 * @date_of_create: 11/24/2021 AD 12:21
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class Ippool
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property integer $ippid
 * @property string  $ippool_name
 * @property integer $ipp_serid
 */
class Ippool extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $ippid = "int";
    public $ippool_name = "";
    public $ipp_serid = "int";
}