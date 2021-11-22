<?php
/**
 * @date_of_create: 11/21/2021 AD 13:00
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class VS
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 *
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
 *
 * @property array $stid
 * @property array $ips
 */
class VS
{
    public
        $vpsid,
        $vps_name,
        $uuid,
        $serid,
        $time,
        $edittime,
        $virt,
        $uid,
        $plid,
        $hostname,
        $osid,
        $os_name,
        $iso,
        $sec_iso,
        $boot,
        $space,
        $inodes,
        $ram,
        $burst,
        $swap,
        $cpu,
        $cores,
        $cpupin,
        $cpu_percent,
        $bandwidth,
        $network_speed,
        $upload_speed,
        $io,
        $ubc,
        $acpi,
        $apic,
        $pae,
        $shadow,
        $vnc,
        $vncport,
        $vnc_passwd,
        $hvm,
        $suspended,
        $suspend_reason,
        $nw_suspended,
        $rescue,
        $band_suspend,
        $tuntap,
        $ppp,
        $ploop,
        $dns_nameserver,
        $osreinstall_limit,
        $preferences,
        $nic_type,
        $vif_type,
        $virtio,
        $pv_on_hvm,
        $disks,
        $kvm_cache,
        $io_mode,
        $cpu_mode,
        $total_iops_sec,
        $read_bytes_sec,
        $write_bytes_sec,
        $kvm_vga,
        $acceleration,
        $vnc_keymap,
        $routing,
        $mg,
        $used_bandwidth,
        $cached_disk,
        $webuzo,
        $disable_ebtables,
        $install_xentools,
        $admin_managed,
        $rdp,
        $topology_sockets,
        $topology_cores,
        $topology_threads,
        $mac,
        $notes,
        $disable_nw_config,
        $locked,
        $openvz_features,
        $speed_cap,
        $numa,
        $bpid,
        $bserid,
        $timezone,
        $ha,
        $data,
        $server_name,
        $email,
        $pid,
        $type,
        $os_distro;


    public $stid, $ips;

    public function __construct(
        $vpsid,
        $vps_name,
        $uuid,
        $serid,
        $time,
        $edittime,
        $virt,
        $uid,
        $plid,
        $hostname,
        $osid,
        $os_name,
        $iso,
        $sec_iso,
        $boot,
        $space,
        $inodes,
        $ram,
        $burst,
        $swap,
        $cpu,
        $cores,
        $cpupin,
        $cpu_percent,
        $bandwidth,
        $network_speed,
        $upload_speed,
        $io,
        $ubc,
        $acpi,
        $apic,
        $pae,
        $shadow,
        $vnc,
        $vncport,
        $vnc_passwd,
        $hvm,
        $suspended,
        $suspend_reason,
        $nw_suspended,
        $rescue,
        $band_suspend,
        $tuntap,
        $ppp,
        $ploop,
        $dns_nameserver,
        $osreinstall_limit,
        $preferences,
        $nic_type,
        $vif_type,
        $virtio,
        $pv_on_hvm,
        $disks,
        $kvm_cache,
        $io_mode,
        $cpu_mode,
        $total_iops_sec,
        $read_bytes_sec,
        $write_bytes_sec,
        $kvm_vga,
        $acceleration,
        $vnc_keymap,
        $routing,
        $mg,
        $used_bandwidth,
        $cached_disk,
        $webuzo,
        $disable_ebtables,
        $install_xentools,
        $admin_managed,
        $rdp,
        $topology_sockets,
        $topology_cores,
        $topology_threads,
        $mac,
        $notes,
        $disable_nw_config,
        $locked,
        $openvz_features,
        $speed_cap,
        $numa,
        $bpid,
        $bserid,
        $timezone,
        $ha,
        $data,
        $server_name,
        $email,
        $pid,
        $type,
        $os_distro,
        $stid,
        $ips
    ) {
        $this->vpsid = (int) $vpsid;
        $this->vps_name = $vps_name;
        $this->uuid = $uuid;
        $this->serid = $serid;
        $this->time = $time;
        $this->edittime = $edittime;
        $this->virt = $virt;
        $this->uid = (int) $uid;
        $this->plid = (int) $plid;
        $this->hostname = $hostname;
        $this->osid = (int) $osid;
        $this->os_name = $os_name;
        $this->iso = $iso;
        $this->sec_iso = $sec_iso;
        $this->boot = $boot;
        $this->space = (float) $space;
        $this->inodes = $inodes;
        $this->ram = (int) $ram;
        $this->burst = $burst;
        $this->swap = $swap;
        $this->cpu = (float) $cpu;
        $this->cores = (int) $cores;
        $this->cpupin = (int) $cpupin;
        $this->cpu_percent = (float) $cpu_percent;
        $this->bandwidth = (float) $bandwidth;
        $this->network_speed = (int) $network_speed;
        $this->upload_speed = (int) $upload_speed;
        $this->io = $io;
        $this->ubc = !empty($ubc) ? unserialize($ubc) : $ubc;
        $this->acpi = (int) $acpi;
        $this->apic = (int) $apic;
        $this->pae = (int) $pae;
        $this->shadow = (int) $shadow;
        $this->vnc = (int) $vnc;
        $this->vncport = (int) $vncport;
        $this->vnc_passwd = $vnc_passwd;
        $this->hvm = (int) $hvm;
        $this->suspended = (bool) $suspended;
        $this->suspend_reason = $suspend_reason;
        $this->nw_suspended = $nw_suspended;
        $this->rescue = $rescue;
        $this->band_suspend = $band_suspend;
        $this->tuntap = $tuntap;
        $this->ppp = $ppp;
        $this->ploop = $ploop;
        $this->dns_nameserver = !empty($dns_nameserver) ? unserialize($dns_nameserver) : $dns_nameserver;
        $this->osreinstall_limit = $osreinstall_limit;
        $this->preferences = $preferences;
        $this->nic_type = $nic_type;
        $this->vif_type = $vif_type;
        $this->virtio = $virtio;
        $this->pv_on_hvm = $pv_on_hvm;
        $this->disks = $disks;
        $this->kvm_cache = $kvm_cache;
        $this->io_mode = $io_mode;
        $this->cpu_mode = $cpu_mode;
        $this->total_iops_sec = $total_iops_sec;
        $this->read_bytes_sec = $read_bytes_sec;
        $this->write_bytes_sec = $write_bytes_sec;
        $this->kvm_vga = $kvm_vga;
        $this->acceleration = $acceleration;
        $this->vnc_keymap = $vnc_keymap;
        $this->routing = $routing;
        $this->mg = $mg;
        $this->used_bandwidth = $used_bandwidth;
        $this->cached_disk = !empty($cached_disk) ? unserialize($cached_disk) : $cached_disk;
        $this->webuzo = $webuzo;
        $this->disable_ebtables = $disable_ebtables;
        $this->install_xentools = $install_xentools;
        $this->admin_managed = $admin_managed;
        $this->rdp = $rdp;
        $this->topology_sockets = $topology_sockets;
        $this->topology_cores = $topology_cores;
        $this->topology_threads = $topology_threads;
        $this->mac = $mac;
        $this->notes = $notes;
        $this->disable_nw_config = $disable_nw_config;
        $this->locked = $locked;
        $this->openvz_features = $openvz_features;
        $this->speed_cap = $speed_cap;
        $this->numa = $numa;
        $this->bpid = $bpid;
        $this->bserid = $bserid;
        $this->timezone = $timezone;
        $this->ha = $ha;
        $this->data = !empty($data) ? json_decode($data) : $data;
        $this->server_name = $server_name;
        $this->email = $email;
        $this->pid = $pid;
        $this->type = $type;
        $this->os_distro = $os_distro;

        $this->stid = $stid;
        $this->ips = $ips;
    }

}