<?php
/**
 * @date_of_create: 11/24/2021 AD 11:09
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class Storage
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property       $stid
 * @property       $st_uuid
 * @property       $name
 * @property       $path
 * @property       $type
 * @property       $format
 * @property       $size
 * @property       $free
 * @property       $oversell
 * @property       $alert_threshold
 * @property       $primary_storage
 * @property       $last_alert
 * @property       $disk_space
 * @property array $serids
 * @property array $sgids
 */
class Storage extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $stid = "int";
    public $st_uuid = "";
    public $name = "";
    public $path = "";
    public $type = "";
    public $format = "";
    public $size = 'float';
    public $free = 'float';
    public $oversell = "int";
    public $alert_threshold = "float";
    public $primary_storage = "int";
    public $last_alert = "int";
    public $disk_space = 'float';
    public $serids = 'array';
    public $sgids = 'array';
}