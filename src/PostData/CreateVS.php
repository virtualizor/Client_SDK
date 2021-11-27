<?php
/**
 * @date_of_create: 11/22/2021 AD 10:43
 */

namespace YiiMan\VirtualizorSdk\PostData;

use YiiMan\ApiStorm\Post\BasePostData;

/**
 * Class CreateVS
 * @package YiiMan\VirtualizorSdk\PostData
 * @property  integer $node_select0       server id that you want creta new vps on that
 * @property  string  $user_email0        Add User Email
 * @property  integer $cores0             The number of cores allotted to the VPS
 * @property  integer $plid0              The plan ID for the VPS
 * @property  integer $osid0              The ID of the Operating System
 * @property  string  $hostname0          The hostname the VPS
 * @property  string  $rootpass0          The root password for the VPS
 * @property  string  $virt0              The Virtualization Technology has to be specified here, refer below table for valid values
 * @property  string  $user_pass0         Add a password
 * @property  array   $ips0               The IP Address(s) for the VPS
 * @property  array   $space0             The disk space for the VPS. In case of Multiple Disk you can specify the array as given in the example. Otherwise just value for single disk VPS is enough
 * @property  integer $ram0               The ram value in MBs for the VPS
 * @property  integer $bandwidth0         The network bandwidth for the VPS: 0 (Zero) for unlimited
 * @property          $serid
 * @property  integer $slave_server       The slave server ID on which vps is to be created
 * @property  integer $uid                Selects a unique ID of the user to which the vps will be assigned
 * @property  string  $fname              Add user first name
 * @property  string  $lname              Add user last name
 * @property  integer $num_ips6           The Number of Ipv6 Address given to the vps
 * @property  integer $num_ips6_subnet    The Number of IPV6 Subnet to be assigned to the vps
 * @property  integer $stid               Storage ID on which the VPS is to be created. (Not needed if using Primary storage)
 * @property  integer $swapram            The amount of SWAP for the VPS (Only for KVM, Xen, Proxmox KVM and XCP)
 * @property  integer $network_speed      The network_speed for the VPS in KB/s
 * @property  integer $cpu                The CPU weight for the VPS
 * @property  integer $cpu_percent        The CPU Percent time for the VPS (Only for OpenVZ and Proxmox)
 * @property  bool    $vnc                Flag to enable vnc(0 or 1) (Only for KVM and Xen)
 * @property  string  $vncpass            The vnc password (Only for KVM and Xen)
 * @property  string  $kvm_cache          The type disk-cache mechanism can be writeback, writethrough, directsync or default (Only for KVM and Proxmox KVM)
 * @property  string  $io_mode            Sets the I/O policy for the VPS can be native/threads (Only for KVM)
 * @property  string  $vnc_keymap         Allows to select keymap can be 'en-us', 'de-ch', 'ar', 'da', 'et', 'fo', 'fr-be', 'fr-ch', 'hu', 'it', 'lt', 'mk', 'nl', 'no', 'pt', 'ru', 'sv', 'tr', 'de', 'en-gb', 'es', 'fi', 'fr', 'fr-ca', 'hr', 'is', 'ja', 'lv', 'nl-be', 'pl', 'pt-br', 'sl', 'th'
 * @property  string  $nic_type           The NIC type (default or e1000) (Only for KVM and Xen)
 * @property  integer $osreinstall_limit  If you want to limit the number of OS re-installs per month.Eg. 0 - is unlimited
 */
class CreateVS extends BasePostData
{

    const VIRTUALIZOR_TYPE_openvz = 'openvz';
    const VIRTUALIZOR_TYPE_xen = 'xen';
    const VIRTUALIZOR_TYPE_kvm = 'kvm';
    const VIRTUALIZOR_TYPE_xcp = 'xcp';
    const VIRTUALIZOR_TYPE_lxc = 'lxc';
    const VIRTUALIZOR_TYPE_vzo = 'vzo';
    const VIRTUALIZOR_TYPE_vzk = 'vzk';
    const VIRTUALIZOR_TYPE_proxo = 'proxo';
    const VIRTUALIZOR_TYPE_proxk = 'proxk';
    const VIRTUALIZOR_TYPE_proxl = 'proxl';

    const KVM_CPU_MODE_host_model = 'host-model';
    const KVM_CPU_MODE_host_passthrough = 'host-passthrough';

    const PROXMOX_CPU_MODE_host_model = 'host-model';
    const PROXMOX_CPU_MODE_host_passthrough = 'host-passthrough';
    const PROXMOX_CPU_MODE_486 = '486';
    const PROXMOX_CPU_MODE_athlon = 'athlon';
    const PROXMOX_CPU_MODE_pentium = 'pentium';
    const PROXMOX_CPU_MODE_pentium2 = 'pentium2';
    const PROXMOX_CPU_MODE_pentium3 = 'pentium3';
    const PROXMOX_CPU_MODE_coreduo = 'coreduo';
    const PROXMOX_CPU_MODE_core2duo = 'core2duo';
    const PROXMOX_CPU_MODE_kvm32 = 'kvm32';
    const PROXMOX_CPU_MODE_qemu32 = 'qemu32';
    const PROXMOX_CPU_MODE_qemu64 = 'qemu64';
    const PROXMOX_CPU_MODE_phenom = 'phenom';
    const PROXMOX_CPU_MODE_Conroe = 'Conroe';
    const PROXMOX_CPU_MODE_Penryn = 'Penryn';
    const PROXMOX_CPU_MODE_Nehalem = 'Nehalem';
    const PROXMOX_CPU_MODE_SandyBridge = 'SandyBridge';
    const PROXMOX_CPU_MODE_IvyBridge = 'IvyBridge';
    const PROXMOX_CPU_MODE_Haswell = 'Haswell';
    const PROXMOX_CPU_MODE_Broadwell = 'Broadwell';
    const PROXMOX_CPU_MODE_Opteron_G1 = 'Opteron_G1';
    const PROXMOX_CPU_MODE_Opteron_G2 = 'Opteron_G2';
    const PROXMOX_CPU_MODE_Opteron_G3 = 'Opteron_G3';
    const PROXMOX_CPU_MODE_Opteron_G4 = 'Opteron_G4';
    const PROXMOX_CPU_MODE_Opteron_G5 = 'Opteron_G5';


    public int $serid = 0;
    public int $slave_server;
    public string $virt0;
    public int $uid;
    public string $user_email0;
    public string $user_pass0;
    public string $fname;
    public string $lname;
    public int $plid0;
    public int $osid0;
    public string $hostname0;
    public string $rootpass0;
    public array $ips0 = [];
    public int $num_ips6;
    public int $num_ips6_subnet;
    public int $stid;
    public int $space0;//GIG
    public int $ram0;
    public int $swapram;
    public int $bandwidth0;
    public int $network_speed;
    public int $cpu;
    public int $cores0;
    public int $cpu_percent;
    public int $vnc;
    public string $vncpass;
    public string $kvm_cache;
    public string $io_mode;
    public string $vnc_keymap;
    public string $nic_type;
    public int $osreinstall_limit = 0;
    public $node_select0;
    public $addvps = 1;


    public function rules(): array
    {
        return
            [
                'slave_server'      => 'integer',
                'virt'              => 'string',
                'uid'               => 'integer',
                'user_email'        => 'string',
                'user_pass'         => 'string',
                'fname'             => 'string',
                'lname'             => 'string',
                'plid'              => 'integer',
                'osid'              => 'integer',
                'hostname'          => 'string',
                'rootpass'          => 'string',
                'ips'               => 'array',
                'num_ips6'          => 'integer',
                'num_ips6_subnet'   => 'integer',
                'stid'              => 'integer',
                'space'             => 'integer',
                'ram'               => 'integer',
                'swapram'           => 'integer',
                'bandwidth'         => 'integer',
                'network_speed'     => 'integer',
                'cpu'               => 'integer',
                'cores'             => 'integer',
                'cpu_percent'       => 'integer',
                'vnc'               => 'integer',
                'vncpass'           => 'string',
                'kvm_cache'         => 'string',
                'io_mode'           => 'string',
                'vnc_keymap'        => 'string',
                'nic_type'          => 'string',
                'osreinstall_limit' => 'integer',
                'node_select'       => 'integer'
            ];
    }


}