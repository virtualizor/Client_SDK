<?php
/**
 * @date_of_create: 11/28/2021 AD 13:59
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin\VPSStats\pieClasses;

/**
 * Class ServerBandwidth
 * @package YiiMan\VirtualizorSdk\Responses\Admin\VPSStats\pieClasses
 * @property  float $limit
 * @property  float $used
 * @property  array $usage
 * @property  IO    $in
 * @property  IO    $out
 * @property  float $free
 * @property  float $limit_gb
 * @property  float $used_gb
 * @property  float $free_gb
 * @property  float $percent
 * @property  float $percent_free
 */
class ServerBandwidth extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $limit = 'float';
    public $used = 'float';
    public $usage = 'array';
    public $in = 'class:YiiMan\VirtualizorSdk\Responses\Admin\VPSStats\pieClasses\IO';
    public $out = 'class:YiiMan\VirtualizorSdk\Responses\Admin\VPSStats\pieClasses\IO';
    public $free = 'float';
    public $limit_gb = 'float';
    public $used_gb = 'float';
    public $free_gb = 'float';
    public $percent = 'float';
    public $percent_free = 'float';
}