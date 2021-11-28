<?php
/**
 * @date_of_create: 11/28/2021 AD 12:41
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class StatusResponse
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property Status[]     $status
 * @property string       $vs
 * @property OsTemplate[] $ostemplates
 * @property Server[]     $servers
 * @property array        $network_status
 * @property User[]       $owners
 * @property Plans[]      $plans
 * @property Plans[]      $backup_plans
 */
class StatusResponse extends LowResponseBase
{
    public
        $status = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\Status',
        $vs = '',
        $ostemplates = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\OsTemplate',
        $servers = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\Server',
        $network_status = 'array',
        $owners = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\User',
        $plans = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\Plans',
        $backup_plans = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\Plans';
}