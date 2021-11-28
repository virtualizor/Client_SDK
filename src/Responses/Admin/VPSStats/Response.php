<?php
/**
 * @date_of_create: 11/28/2021 AD 13:50
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin\VPSStats;

/**
 * Class Response
 * @package YiiMan\VirtualizorSdk\Responses\Admin\VPSStats
 * @property PieData $pie_data
 * @property array   $vps_stats
 * @property VpsData $vps_data
 * @property         $month
 * @property  string $notice
 */
class Response extends \YiiMan\VirtualizorSdk\Responses\Admin\LowResponseBase
{
    public $pie_data = 'class:YiiMan\VirtualizorSdk\Responses\Admin\VPSStats\PieData';
    public $vps_stats = '';
    public $vps_data = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\VPSStats\VpsData';
    public $month = '';
    public $notice = '';
}