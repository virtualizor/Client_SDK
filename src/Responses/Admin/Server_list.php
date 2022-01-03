<?php
/**
 * @date_of_create: 11/24/2021 AD 12:51
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class Server_list
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property Server[] $servs
 * @property Server[] $servers
 */
class Server_list extends LowResponseBase
{
    public $servs = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\Server';
    public $servers = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\Server';
}