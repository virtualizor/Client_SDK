<?php
/**
 * @date_of_create: 11/28/2021 AD 11:17
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class RebuildResponse
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property VS[]         $vpses
 * @property VS[]         $vps
 * @property OsTemplate[] $ostemplates
 * @property integer      $actid
 */
class RebuildResponse extends DoneResponse
{
    public $vpses = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\VS';
    public $vps = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\VS';
    public $ostemplates = 'classArray:YiiMan\VirtualizorSdk\Responses\Admin\OsTemplate';
    public $actid = 'int';
}