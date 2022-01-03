<?php
/**
 * @date_of_create: 11/21/2021 AD 12:50
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;



/**
 * Class ListVs
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property VS[] $vs
 * @property OsTemplate[] $ostemplates
 * @property Server[] $servers
 *
 *
 * @property  $network_status
 * @property  $owners
 * @property  $plans
 * @property  $backup_plans
 * @property  $timenow
 * @property  $time_taken
 */
class ListVs extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $title='';
    public $vs = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\VS';
    public $ostemplates = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\OsTemplate';
    public $servers = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\Server';

    public $network_status = '';
    public $owners = '';
    public $plans = 'array';
    public $backup_plans = 'array';
    public $timenow = 'int';
    public $time_taken = 'float';

}