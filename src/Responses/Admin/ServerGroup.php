<?php
/**
 * @date_of_create: 11/24/2021 AD 11:15
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class ServerGroup
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property integer $sgid
 * @property string  $sg_name
 * @property string  $sg_reseller_name
 * @property string  $sg_desc
 * @property integer $sg_select
 */
class ServerGroup extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $sgid = 'int';
    public $sg_name = "";
    public $sg_reseller_name = "";
    public $sg_desc = "";
    public $sg_select = 'int';
}