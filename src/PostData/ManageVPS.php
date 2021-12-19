<?php
/**
 * @date_of_create: 11/28/2021 AD 13:33
 */

namespace YiiMan\VirtualizorSdk\PostData;

/**
 * Class ManageVPS
 * @package YiiMan\VirtualizorSdk\PostData
 * @property  string  $rootpass
 * @property  array   $ips
 * @property  string  $hostname
 * @property  integer $ram
 * @property  integer $bandwidth
 * @property  integer $cores
 * @property  integer $cpupin
 * @property  integer $uid The user ID to which the vps belongs
 * @property  integer $network_speed
 * @property  integer $upload_speed
 * @property  integer $hvm
 * @property  integer $io
 * @property  integer $burst
 * @property  integer $cpu_percent
 * @property  integer $acpi
 * @property  integer $apic
 * @property  integer $pae
 * @property  integer $vnc
 * @property  integer $shadow
 * @property  string  $iso
 * @property  string  $boot
 * @property  integer $band_suspend
 * @property  integer $tuntap
 * @property  integer $pv_on_hvm
 * @property  integer $ppp
 * @property  integer $mac_status
 * @property  integer $osreinstall_limit
 * @property  string  $mgs
 * @property  string  $webuzo
 * @property  string  $cpu_mode
 * @property  integer $admin_managed
 * @property  integer $rdp
 * @property  string  $mac
 * @property  string  $notes
 * @property  integer $disable_nw_config
 * @property  integer $topology_sockets
 * @property  integer $topology_cores
 * @property  integer $topology_threads
 */
class ManageVPS extends \YiiMan\ApiStorm\Post\BasePostData
{

    public $vpsid0;
    public $rootpass;
    public $ips;
    public $hostname;
    public $ram;
    public $bandwidth;
    public $cores;
    public $cpupin;
    public $uid;
    public $network_speed;
    public $upload_speed;
    public $hvm;
    public $io;
    public $burst;
    public $cpu_percent;
    public $acpi;
    public $apic;
    public $pae;
    public $vnc;
    public $shadow;
    public $iso;
    public $boot;
    public $band_suspend;
    public $tuntap;
    public $pv_on_hvm;
    public $ppp;
    public $mac_status;
    public $osreinstall_limit;
    public $mgs;
    public $webuzo;
    public $cpu_mode;
    public $admin_managed;
    public $rdp;
    public $mac;
    public $notes;
    public $disable_nw_config;
    public $topology_sockets;
    public $topology_cores;
    public $topology_threads;
    public $editvps=1;

    /**
     * @inheritDoc
     */
    public function rules(): array
    {
        return
            [
                'vpsid0'            => 'int',
                'rootpass'          => 'string',
                'ips'               => 'array',
                'hostname'          => 'string',
                'ram'               => 'int',
                'bandwidth'         => 'int',
                'cores'             => 'int',
                'cpupin'            => 'int',
                'uid'               => 'int',
                'network_speed'     => 'int',
                'upload_speed'      => 'int',
                'hvm'               => 'int',
                'io'                => 'int',
                'burst'             => 'int',
                'cpu_percent'       => 'int',
                'acpi'              => 'int',
                'apic'              => 'int',
                'pae'               => 'int',
                'vnc'               => 'int',
                'shadow'            => 'int',
                'iso'               => 'string',
                'boot'              => 'string',
                'band_suspend'      => 'int',
                'tuntap'            => 'int',
                'pv_on_hvm'         => 'int',
                'ppp'               => 'int',
                'mac_status'        => 'int',
                'osreinstall_limit' => 'int',
                'mgs'               => 'string',
                'webuzo'            => 'string',
                'cpu_mode'          => 'string',
                'admin_managed'     => 'int',
                'rdp'               => 'int',
                'mac'               => 'string',
                'notes'             => 'string',
                'disable_nw_config' => 'int',
                'topology_sockets'  => 'int',
                'topology_cores'    => 'int',
                'topology_threads'  => 'int',
            ];
    }
}