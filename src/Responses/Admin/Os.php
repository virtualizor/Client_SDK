<?php
/**
 * @date_of_create: 11/24/2021 AD 11:00
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class Os
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property $osid
 * @property $type
 * @property $name
 * @property $filename
 * @property $size
 * @property $pygrub
 * @property $drive
 * @property $hvm
 * @property $perf_ops
 * @property $active
 * @property $url
 * @property $distro
 * @property $Nvirt
 */
class Os extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $osid = "int";
    public $type = "";
    public $name = "";
    public $filename = "";
    public $size = "int";
    public $pygrub = "int";
    public $drive = "";
    public $hvm = "int";
    public $perf_ops = "int";
    public $active = "int";
    public $url = "";
    public $distro = "";
    public $Nvirt = "";
}