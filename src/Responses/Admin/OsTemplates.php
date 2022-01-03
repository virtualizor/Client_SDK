<?php
/**
 * @date_of_create: 12/1/2021 AD 11:12
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class OsTemplates
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property VirtualizorType[] $oslist
 */
class OsTemplates extends LowResponseBase
{
    public $oses = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\Os';
    public $oslist = 'array';
    public $ostemplates = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\OsTemplate';
    public $installed = 'array';
}