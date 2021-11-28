<?php
/**
 * @date_of_create: 11/28/2021 AD 14:00
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin\VPSStats\pieClasses;

/**
 * Class ServerCpu
 * @package YiiMan\VirtualizorSdk\Responses\Admin\VPSStats\pieClasses
 * @property  string $manu
 * @property  string $cpumodel
 * @property  float  $limit
 * @property  float  $used
 * @property  float  $free
 * @property  float  $percent
 * @property  float  $percent_free
 */
class ServerCpu extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $manu = 'string';
    public $cpumodel = 'string';
    public $limit = 'float';
    public $used = 'float';
    public $free = 'float';
    public $percent = 'float';
    public $percent_free = 'float';
}