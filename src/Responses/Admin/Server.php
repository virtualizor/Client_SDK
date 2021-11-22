<?php
/**
 * @date_of_create: 11/22/2021 AD 09:44
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class Server
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 *
 * @property  $serid
 * @property  $sgid
 * @property  $server_name
 * @property  $virt
 * @property  $ip
 * @property  $internal_ip
 * @property  $vnc_ip
 * @property  $settings
 * @property  $unique_txt
 * @property  $lv
 * @property  $hvm
 * @property  $licnumvs
 * @property  $total_ram
 * @property  $overcommit
 * @property  $ram
 * @property  $total_space
 * @property  $space
 * @property  $os
 * @property  $os_arch
 * @property  $uname
 * @property  $version
 * @property  $patch
 * @property  $lic_expires
 * @property  $checked
 * @property  $locked
 * @property  $vcores
 * @property  $ips
 * @property  $ipv6
 * @property  $ipv6_subnet
 * @property  $ips_int
 * @property  $bandwidth
 * @property  $update_resource
 * @property  $location
 * @property  $status
 * @property  $last_reverse_sync
 * @property  $ha_master
 * @property  $numvps
 * @property  $alloc_ram
 * @property  $alloc_space
 * @property  $alloc_cpu
 * @property  $alloc_cpu_percent
 * @property  $alloc_bandwidth
 *
 *
 * @property array $virts
 */
class Server
{
    public
        $serid,
        $sgid,
        $server_name,
        $virt,
        $ip,
        $internal_ip,
        $vnc_ip,
        $settings,
        $unique_txt,
        $lv,
        $hvm,
        $licnumvs,
        $total_ram,
        $overcommit,
        $ram,
        $total_space,
        $space,
        $os,
        $os_arch,
        $uname,
        $version,
        $patch,
        $lic_expires,
        $checked,
        $locked,
        $vcores,
        $ips,
        $ipv6,
        $ipv6_subnet,
        $ips_int,
        $bandwidth,
        $update_resource,
        $location,
        $status,
        $last_reverse_sync,
        $ha_master,
        $numvps,
        $alloc_ram,
        $alloc_space,
        $alloc_cpu,
        $alloc_cpu_percent,
        $alloc_bandwidth;

    public $virts;

    public function __construct(
        $serid,
        $sgid,
        $server_name,
        $virt,
        $ip,
        $internal_ip,
        $vnc_ip,
        $settings,
        $unique_txt,
        $lv,
        $hvm,
        $licnumvs,
        $total_ram,
        $overcommit,
        $ram,
        $total_space,
        $space,
        $os,
        $os_arch,
        $uname,
        $version,
        $patch,
        $lic_expires,
        $checked,
        $locked,
        $vcores,
        $ips,
        $ipv6,
        $ipv6_subnet,
        $ips_int,
        $bandwidth,
        $update_resource,
        $location,
        $status,
        $last_reverse_sync,
        $ha_master,
        $numvps,
        $alloc_ram,
        $alloc_space,
        $alloc_cpu,
        $alloc_cpu_percent,
        $alloc_bandwidth,
        $virts
    ) {
        $this->serid = $serid;
        $this->sgid = $sgid;
        $this->server_name = $server_name;
        $this->virt = $virt;
        $this->ip = $ip;
        $this->internal_ip = $internal_ip;
        $this->vnc_ip = $vnc_ip;
        $this->settings = $settings;
        $this->unique_txt = $unique_txt;
        $this->lv = $lv;
        $this->hvm = $hvm;
        $this->licnumvs = $licnumvs;
        $this->total_ram = $total_ram;
        $this->overcommit = $overcommit;
        $this->ram = $ram;
        $this->total_space = $total_space;
        $this->space = $space;
        $this->os = $os;
        $this->os_arch = $os_arch;
        $this->uname = $uname;
        $this->version = $version;
        $this->patch = $patch;
        $this->lic_expires = $lic_expires;
        $this->checked = $checked;
        $this->locked = $locked;
        $this->vcores = $vcores;
        $this->ips = $ips;
        $this->ipv6 = $ipv6;
        $this->ipv6_subnet = $ipv6_subnet;
        $this->ips_int = $ips_int;
        $this->bandwidth = $bandwidth;
        $this->update_resource = $update_resource;
        $this->location = $location;
        $this->status = $status;
        $this->last_reverse_sync = $last_reverse_sync;
        $this->ha_master = $ha_master;
        $this->numvps = $numvps;
        $this->alloc_ram = $alloc_ram;
        $this->alloc_space = $alloc_space;
        $this->alloc_cpu = $alloc_cpu;
        $this->alloc_cpu_percent = $alloc_cpu_percent;
        $this->alloc_bandwidth = $alloc_bandwidth;
        $this->virts = $virts;
    }
}