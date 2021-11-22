<?php
/**
 * @date_of_create: 11/22/2021 AD 09:52
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class OsTemplate
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 *
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
class OsTemplate
{
    public
        $osid,
        $type,
        $name,
        $filename,
        $size,
        $pygrub,
        $drive,
        $hvm,
        $perf_ops,
        $active,
        $url,
        $distro,
        $Nvirt;

    public function __construct(
        $osid,
        $type,
        $name,
        $filename,
        $size,
        $pygrub,
        $drive,
        $hvm,
        $perf_ops,
        $active,
        $url,
        $distro,
        $Nvirt
    ) {

        $this->osid = $osid;
        $this->type = $type;
        $this->name = $name;
        $this->filename = $filename;
        $this->size = $size;
        $this->pygrub = $pygrub;
        $this->drive = $drive;
        $this->hvm = $hvm;
        $this->perf_ops = $perf_ops;
        $this->active = $active;
        $this->url = $url;
        $this->distro = $distro;
        $this->Nvirt = $Nvirt;
    }
}