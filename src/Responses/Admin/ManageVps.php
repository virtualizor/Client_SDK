<?php
/**
 * @date_of_create: 12/18/2021 AD 10:50
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 *
 *
 * @property VS $vs_info
 */
class ManageVps extends DoneResponse
{
    public $vs_info='class:YiiMan\VirtualizorSdk\Responses\Admin\VS';
}