<?php
/**
 * @date_of_create: 11/27/2021 AD 13:23
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 * Class FullUser
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property  int        $uid
 * @property  string     $password
 * @property  string     $email
 * @property  int        $type
 * @property  int        $aclid
 * @property  int        $pid
 * @property  int        $uplid
 * @property  int        $inhouse_billing
 * @property  float      $cur_bal
 * @property  float      $cur_usage
 * @property  float      $cur_invoices
 * @property  int        $max_cost
 * @property  int        $num_vs
 * @property  int        $num_users
 * @property  int        $space
 * @property  int        $ram
 * @property  int        $burst
 * @property  int        $bandwidth
 * @property  int        $cpu
 * @property  int        $cores
 * @property  int        $cpu_percent
 * @property  int        $num_cores
 * @property  int        $num_ipv4
 * @property  int        $num_ip_int
 * @property  int        $num_ipv6
 * @property  int        $num_ipv6_subnet
 * @property  array      $allowed_virts
 * @property  int        $network_speed
 * @property  int        $upload_speed
 * @property  int        $openvz
 * @property  int        $xen
 * @property  int        $xenhvm
 * @property  int        $kvm
 * @property  array      $sg
 * @property  array      $mg
 * @property  Preference $preferences
 * @property  int        $dnsplid
 * @property  int        $act_status
 * @property  string     $activation_code
 * @property  int        $date_created
 * @property  int        $service_period
 * @property  int        $band_suspend
 * @property  string     $billing_warn
 * @property  string     $suspended
 * @property  int        $foreign_uid
 * @property  int        $webuzo_prem_apps
 */
class FullUser extends \YiiMan\ApiStorm\Response\BaseResponse
{
    public $uid = "int";
    public $password = "string";
    public $email = "string";
    public $type = "int";
    public $aclid = "int";
    public $pid = "int";
    public $uplid = "int";
    public $inhouse_billing = "int";
    public $cur_bal = "float";
    public $cur_usage = "float";
    public $cur_invoices = "float";
    public $max_cost = "int";
    public $num_vs = "int";
    public $num_users = "int";
    public $space = "int";
    public $ram = "int";
    public $burst = "int";
    public $bandwidth = "int";
    public $cpu = "int";
    public $cores = "int";
    public $cpu_percent = "int";
    public $num_cores = "int";
    public $num_ipv4 = "int";
    public $num_ip_int = "int";
    public $num_ipv6 = "int";
    public $num_ipv6_subnet = "int";
    public $allowed_virts = 'array';
    public $network_speed = "int";
    public $upload_speed = "int";
    public $openvz = "int";
    public $xen = "int";
    public $xenhvm = "int";
    public $kvm = "int";
    public $sg = 'array';
    public $mg = 'array';
    public $preferences = 'class:YiiMan\VirtualizorSdk\Responses\Admin\Preference';
    public $dnsplid = "int";
    public $act_status = "int";
    public $activation_code = "string";
    public $date_created = "int";
    public $service_period = "int";
    public $band_suspend = "int";
    public $billing_warn = 'string';
    public $suspended = 'string';
    public $foreign_uid = "int";
    public $webuzo_prem_apps = "int";
}