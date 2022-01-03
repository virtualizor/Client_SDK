<?php
/**
 * @date_of_create: 11/24/2021 AD 12:13
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class LowResponseBase
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property string  $title
 * @property integer $timenow
 * @property float   $time_taken
 */
class LowResponseBase extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $title = '';
    public $timenow = 'int';
    public $time_taken = 'float';
}