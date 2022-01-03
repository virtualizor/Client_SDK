<?php
/**
 * @date_of_create: 11/24/2021 AD 10:57
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class User
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property  integer $uid
 * @property  string  $email
 * @property  integer $pid
 * @property  integer $inhouse_billing
 */
class User extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $uid = "int";
    public $email = "string";
    public $pid = "ing";
    public $inhouse_billing = "int";
}