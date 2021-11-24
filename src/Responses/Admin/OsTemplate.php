<?php
/**
 * @date_of_create: 11/22/2021 AD 09:52
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;


/**
 * Class OsTemplate
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
class OsTemplate extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public
        $osid = 'int',
        $type = 'string',
        $name = 'string',
        $filename = 'string',
        $size = 'int',
        $pygrub = 'int',
        $drive = 'string',
        $hvm = 'int',
        $perf_ops = 'int',
        $active = 'bool',
        $url = 'string',
        $distro = 'string',
        $Nvirt = 'string';
}