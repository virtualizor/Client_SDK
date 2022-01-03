<?php
/**
 * @date_of_create: 11/28/2021 AD 12:19
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class UsersList
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property FullUser[] $users
 * @property array      $ssh_keys
 */
class UsersList extends LowResponseBase
{
    public $users = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\FullUser';
    public $ssh_keys = 'array';
}