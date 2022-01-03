<?php
/**
 * @date_of_create: 11/24/2021 AD 10:29
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class AddVs
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property VS $newvs
 */
class AddVs extends BaseResponse
{
    public $newvs = 'class:YiiMan\VirtualizorSdk\Responses\Admin\VS';
}