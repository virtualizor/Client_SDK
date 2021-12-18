<?php
/**
 * @date_of_create: 11/27/2021 AD 10:49
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class DoneResponse
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property bool   $done
 * @property string $done_msg
 * @property string $error_msg
 */
class DoneResponse extends LowResponseBase
{
    public $done = 'bool';
    public $done_msg = 'string';
    public $error_msg = 'string';
}