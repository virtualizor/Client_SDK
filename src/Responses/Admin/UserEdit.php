<?php
/**
 * @date_of_create: 11/27/2021 AD 13:22
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class UserEdit
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property FullUser      $users
 * @property  string       $msg
 * @property ServerGroup[] $servergroups
 */
class UserEdit extends LowResponseBase
{
    public
        $users = 'class:YiiMan\VirtualizorSdk\Responses\Admin\FullUser',
        $msg = '',
        $servergroups = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\ServerGroup';
}