<?php
/**
 * @date_of_create: 11/28/2021 AD 13:59
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin\VPSStats;

use YiiMan\VirtualizorSdk\Responses\Admin\VPSStats\pieClasses\ServerBandwidth;
use YiiMan\VirtualizorSdk\Responses\Admin\VPSStats\pieClasses\ServerCpu;
use YiiMan\VirtualizorSdk\Responses\Admin\VPSStats\pieClasses\ServerRam;

/**
 * Class PieData
 * @package YiiMan\VirtualizorSdk\Responses\Admin\VPSStats
 * @property  ServerBandwidth $server_bandwidth
 * @property  ServerCpu       $server_cpu
 * @property  ServerRam[]     $server_ram
 * @property VpsData[]        $vps_data
 * @property string           $month
 * @property string           $notice
 */
class PieData extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $server_bandwidth = 'class:YiiMan\VirtualizorSdk\Responses\Admin\VPSStats\pieClasses\ServerBandwidth';
    public $server_cpu = 'class:YiiMan\VirtualizorSdk\Responses\Admin\VPSStats\pieClasses\ServerCpu';
    public $server_ram = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\VPSStats\pieClasses\ServerRam';
    public $vps_data = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\VPSStats\VpsData';
    public $month = '';
    public $notic = '';
}