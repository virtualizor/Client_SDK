<?php
/**
 * @date_of_create: 11/21/2021 AD 13:00
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;


use YiiMan\ApiStorm\Response\BaseResponse;/**
 * Class VS
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property  $vpsid
 * @property  $vps_name
 * @property  $uuid
 * @property  $serid
 * @property  $time
 * @property  $edittime
 * @property  $virt
 * @property  $uid
 * @property  $plid
 * @property  $hostname
 * @property  $osid
 * @property  $os_name
 * @property  $iso
 * @property  $sec_iso
 * @property  $boot
 * @property  $space
 * @property  $inodes
 * @property  $ram
 * @property  $burst
 * @property  $swap
 * @property  $cpu
 * @property  $cores
 * @property  $cpupin
 * @property  $cpu_percent
 * @property  $bandwidth
 * @property  $network_speed
 * @property  $upload_speed
 * @property  $io
 * @property  $ubc
 * @property  $acpi
 * @property  $apic
 * @property  $pae
 * @property  $shadow
 * @property  $vnc
 * @property  $vncport
 * @property  $vnc_passwd
 * @property  $hvm
 * @property  $suspended
 * @property  $suspend_reason
 * @property  $nw_suspended
 * @property  $rescue
 * @property  $band_suspend
 * @property  $tuntap
 * @property  $ppp
 * @property  $ploop
 * @property  $dns_nameserver
 * @property  $osreinstall_limit
 * @property  $preferences
 * @property  $nic_type
 * @property  $vif_type
 * @property  $virtio
 * @property  $pv_on_hvm
 * @property  $disks
 * @property  $kvm_cache
 * @property  $io_mode
 * @property  $cpu_mode
 * @property  $total_iops_sec
 * @property  $read_bytes_sec
 * @property  $write_bytes_sec
 * @property  $kvm_vga
 * @property  $acceleration
 * @property  $vnc_keymap
 * @property  $routing
 * @property  $mg
 * @property  $used_bandwidth
 * @property  $cached_disk
 * @property  $webuzo
 * @property  $disable_ebtables
 * @property  $install_xentools
 * @property  $admin_managed
 * @property  $rdp
 * @property  $topology_sockets
 * @property  $topology_cores
 * @property  $topology_threads
 * @property  $mac
 * @property  $notes
 * @property  $disable_nw_config
 * @property  $locked
 * @property  $openvz_features
 * @property  $speed_cap
 * @property  $numa
 * @property  $bpid
 * @property  $bserid
 * @property  $timezone
 * @property  $ha
 * @property  $data
 * @property  $server_name
 * @property  $email
 * @property  $pid
 * @property  $type
 * @property  $os_distro
 * @property array $stid
 * @property array $ips
 */
class VS extends BaseResponse
{

    public $vpsid = 'int';
    public $vps_name = 'string';
    public $uuid = '';
    public $serid = '';
    public $time = '';
    public $edittime = '';
    public $virt = '';
    public $uid = 'int';
    public $plid = 'int';
    public $hostname = '';
    public $osid = 'int';
    public $os_name = '';
    public $iso = '';
    public $sec_iso = '';
    public $boot = '';
    public $space = 'float';
    public $inodes = '';
    public $ram = 'int';
    public $burst = '';
    public $swap = '';
    public $cpu = 'int';
    public $cores = 'int';
    public $cpupin = 'int';
    public $cpu_percent = 'float';
    public $bandwidth = 'float';
    public $network_speed = 'int';
    public $upload_speed = 'int';
    public $io = '';
    public $ubc = 'serialize';
    public $acpi = 'int';
    public $apic = 'int';
    public $pae = 'int';
    public $shadow = 'int';
    public $vnc = 'int';
    public $vncport = 'int';
    public $vnc_passwd = '';
    public $hvm = 'int';
    public $suspended = 'bool';
    public $suspend_reason = '';
    public $nw_suspended = '';
    public $rescue = '';
    public $band_suspend = '';
    public $tuntap = '';
    public $ppp = '';
    public $ploop = '';
    public $dns_nameserver = 'serialize';
    public $osreinstall_limit = '';
    public $preferences = '';
    public $nic_type = '';
    public $vif_type = '';
    public $virtio = '';
    public $pv_on_hvm = '';
    public $disks = '';
    public $kvm_cache = '';
    public $io_mode = '';
    public $cpu_mode = '';
    public $total_iops_sec = '';
    public $read_bytes_sec = '';
    public $write_bytes_sec = '';
    public $kvm_vga = '';
    public $acceleration = '';
    public $vnc_keymap = '';
    public $routing = '';
    public $mg = '';
    public $used_bandwidth = '';
    public $cached_disk = 'serialize';
    public $webuzo = '';
    public $disable_ebtables = '';
    public $install_xentools = '';
    public $admin_managed = '';
    public $rdp = '';
    public $topology_sockets = '';
    public $topology_cores = '';
    public $topology_threads = '';
    public $mac = '';
    public $notes = '';
    public $disable_nw_config = '';
    public $locked = '';
    public $openvz_features = '';
    public $speed_cap = '';
    public $numa = '';
    public $bpid = '';
    public $bserid = '';
    public $timezone = '';
    public $ha = '';
    public $data = 'json';
    public $server_name = '';
    public $email = '';
    public $pid = '';
    public $type = '';
    public $os_distro = '';

    public $stid, $ips;


}