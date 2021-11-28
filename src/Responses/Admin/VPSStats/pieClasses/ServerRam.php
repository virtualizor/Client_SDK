<?php
/**
 * @date_of_create: 11/28/2021 AD 14:00
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin\VPSStats\pieClasses;

/**
 * Class ServerRam
 * @package YiiMan\VirtualizorSdk\Responses\Admin\VPSStats\pieClasses
 * @property integer $used_ram
 * @property integer $ram
 */
class ServerRam extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $used_ram = 'int';
    public $ram = 'int';
}