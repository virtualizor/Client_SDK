<?php
/**
 * @date_of_create: 11/24/2021 AD 11:13
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class Os2
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property string $os_arch
 * @property string $uname
 * @property string $distro
 * @property string $name
 */
class Os2 extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $os_arch = '';
    public $uname = '';
    public $distro = '';
    public $name = '';
}