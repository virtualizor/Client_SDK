<?php
/**
 * @date_of_create: 11/28/2021 AD 14:01
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin\VPSStats\pieClasses;

/**
 * Class IO
 * @package YiiMan\VirtualizorSdk\Responses\Admin\VPSStats\pieClasses
 * @property  array $usage
 * @property  float $used
 * @property  float $limit
 * @property  float $free
 * @property  float $limit_gb
 * @property  float $used_gb
 * @property  float $free_gb
 * @property  float $percent
 * @property  float $percent_free
 */
class IO extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $usage = 'array';
    public $used = 'float';
    public $limit = 'float';
    public $free = 'float';
    public $limit_gb = 'float';
    public $used_gb = 'float';
    public $free_gb = 'float';
    public $percent = 'float';
    public $percent_free = 'float';
}