<?php
/**
 * @date_of_create: 11/27/2021 AD 13:27
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class Preference
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property string $fname
 * @property string $lname
 */
class Preference extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $fname = "";
    public $lname = "";
}