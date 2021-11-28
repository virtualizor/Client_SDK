<?php
/**
 * @date_of_create: 11/27/2021 AD 12:03
 */

namespace YiiMan\VirtualizorSdk\PostData;

/**
 * Class EditUser
 * @package YiiMan\VirtualizorSdk\PostData
 * @property integer $priority0        This specifies if the user is a user(0) or admin(1) or cloud (2)
 * @property string  $newpass         The password of the user
 * @property string  $newemail0        The email of the user
 * @property string  $fname           The first name of the user
 * @property string  $lname           The last name of the user
 * @property integer $dnsplan_id      The dnsplan ID for the user
 * @property integer $acl_id          Access Control ID for the user
 * @property integer $num_vs          The maximum number of Virtual Private Servers this user can create. Zero (0) for unlimited
 * @property integer $num_users       The maximum number of sub-users this user can create. Zero (0) for unlimited
 * @property integer $space           The maximum disk space in GB that the user can use to create the vps
 * @property integer $ram             The maximum amount of ram in MB that the user can use to create the vps
 * @property integer $burst           The maximum amount of swap ram (For Other Kernels )or burst ram (For Open Vz) in MB that the user can use to create the vps
 * @property integer $bandwidth       The total bandwidth assigned to the user
 * @property integer $cpu             The default cpu weight assigned to the user to create vps
 * @property integer $cores           The maximum number of cpu cores that the user can use to create the vps
 * @property integer $cpu_percent     All VPS created by the user would have this CPU %. This is per core base. E.g. If user creates VPS with 2 cores and percentage is 40 total 80% will be assigned.
 * @property integer $num_cores       The total number of cores allowed. Zero (0) means unlimited cores
 * @property integer $num_ipv4        The total number of ipv4 addresses that will be used for the vps
 * @property integer $num_ipv6_subnet The total number of ipv6 subnet that will be used for the vps
 * @property integer $num_ipv6        The total number of ipv6 addresses that will be used for the vps
 * @property integer $network_speed   The total network speed in KB/s
 * @property integer $upload_speed    The total upload speed in KB/s
 * @property boolean $band_suspend    If checked then all the cloud user's VPS(s) will be suspended if the specified bandwidth limit is exceeded
 * @property integer $service_period  The billing cycle start date for bandwidth calculation (1-31)
 * @property array   $allowed_virts   The Virtualization type to allow this user (openvz,xen,xenhvm,kvm, xcp, xcphvm,lxc, proxo, proxk, proxl, vzk, vzo)
 * @property array   $sgs             The array of servergroup that the user can use
 * @property array   $mgs             The array of media groups that the user can use
 */
class EditUser extends \YiiMan\ApiStorm\Post\BasePostData
{
    public $edituser=1;
    public

        $priority0=0,
        $newpass="",
        $newemail0,
        $fname,
        $lname,
        $dnsplan_id,
        $acl_id,
        $num_vs,
        $num_users,
        $space,
        $ram,
        $burst,
        $bandwidth,
        $cpu,
        $cores,
        $cpu_percent,
        $num_cores,
        $num_ipv4,
        $num_ipv6_subnet,
        $num_ipv6,
        $network_speed,
        $upload_speed,
        $band_suspend,
        $service_period,
        $allowed_virts,
        $sgs,
        $mgs;

    /**
     * @inheritDoc
     */
    public function rules(): array
    {
        return
            [
                'uid'             => 'int',
                'priority'        => 'int',
                'newpass'         => 'string',
                'newemail'        => 'string',
                'fname'           => 'string',
                'lname'           => 'string',
                'dnsplan_id'      => 'int',
                'acl_id'          => 'int',
                'num_vs'          => 'int',
                'num_users'       => 'int',
                'space'           => 'int',
                'ram'             => 'int',
                'burst'           => 'int',
                'bandwidth'       => 'int',
                'cpu'             => 'int',
                'cores'           => 'int',
                'cpu_percent'     => 'int',
                'num_cores'       => 'int',
                'num_ipv4'        => 'int',
                'num_ipv6_subnet' => 'int',
                'num_ipv6'        => 'int',
                'network_speed'   => 'int',
                'upload_speed'    => 'int',
                'band_suspend'    => 'boolean',
                'service_period'  => 'int',
                'allowed_virts'   => 'array',
                'sgs'             => 'array',
                'mgs'             => 'array',
            ];
    }
}