<?php
/**
 * @date_of_create: 12/18/2021 AD 10:53
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * @property  int    $did
 * @property  string $disk_uuid
 * @property  string $st_uuid
 * @property  string $vps_uuid
 * @property  string $path
 * @property  int    $primary
 * @property  float  $size
 * @property  string $size_unit
 * @property  string $type
 * @property  string $format
 * @property  int    $num
 * @property  int    $rescue
 * @property  string $extra
 * @property  int    $vpsid
 */
class Disk extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $did = "int";
    public $disk_uuid = "string";
    public $st_uuid = "string";
    public $vps_uuid = "string";
    public $path = "string";
    public $primary = "int";
    public $size = "float";
    public $size_unit = "string";
    public $type = "string";
    public $format = "string";
    public $num = "int";
    public $rescue = "int";
    public $extra = "string";
    public $vpsid = "int";
}