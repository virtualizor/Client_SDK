<?php
/**
 * @date_of_create: 11/21/2021 AD 12:50
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;


use YiiMan\VirtualizorSdk\Responses\BaseResponse;

/**
 * Class ListVs
 * @package YiiMan\VirtualizorSdk\Responses\Admin
 * @property VS[] $vs
 * @property OsTemplate[] $osTemplates
 * @property Server[] $servers
 *
 *
 * @property  $network_status
 * @property  $owners
 * @property  $plans
 * @property  $backup_plans
 * @property  $timenow
 * @property  $time_taken
 */
class ListVs extends BaseResponse
{
    public $vs = [];
    public $osTemplates = [];
    public $servers = [];

    public $network_status;
    public $owners;
    public $plans;
    public $backup_plans;
    public $timenow;
    public $time_taken;

    public function __construct($data)
    {
        $data=(object)$data;
        $this->title = $data->title;
        $this->network_status = $data->network_status;
        $this->owners = $data->owners;
        $this->plans = $data->plans;
        $this->backup_plans = $data->backup_plans;
        $this->timenow = $data->timenow;
        $this->time_taken = $data->time_taken;


        if (!empty($data->vs)) {
            foreach ($data->vs as $v) {
                $v=(object)$v;
                $this->vs[] = new VS(
                    $v->vpsid,
                    $v->vps_name,
                    $v->uuid,
                    $v->serid,
                    $v->time,
                    $v->edittime,
                    $v->virt,
                    $v->uid,
                    $v->plid,
                    $v->hostname,
                    $v->osid,
                    $v->os_name,
                    $v->iso,
                    $v->sec_iso,
                    $v->boot,
                    $v->space,
                    $v->inodes,
                    $v->ram,
                    $v->burst,
                    $v->swap,
                    $v->cpu,
                    $v->cores,
                    $v->cpupin,
                    $v->cpu_percent,
                    $v->bandwidth,
                    $v->network_speed,
                    $v->upload_speed,
                    $v->io,
                    $v->ubc,
                    $v->acpi,
                    $v->apic,
                    $v->pae,
                    $v->shadow,
                    $v->vnc,
                    $v->vncport,
                    $v->vnc_passwd,
                    $v->hvm,
                    $v->suspended,
                    $v->suspend_reason,
                    $v->nw_suspended,
                    $v->rescue,
                    $v->band_suspend,
                    $v->tuntap,
                    $v->ppp,
                    $v->ploop,
                    $v->dns_nameserver,
                    $v->osreinstall_limit,
                    $v->preferences,
                    $v->nic_type,
                    $v->vif_type,
                    $v->virtio,
                    $v->pv_on_hvm,
                    $v->disks,
                    $v->kvm_cache,
                    $v->io_mode,
                    $v->cpu_mode,
                    $v->total_iops_sec,
                    $v->read_bytes_sec,
                    $v->write_bytes_sec,
                    $v->kvm_vga,
                    $v->acceleration,
                    $v->vnc_keymap,
                    $v->routing,
                    $v->mg,
                    $v->used_bandwidth,
                    $v->cached_disk,
                    $v->webuzo,
                    $v->disable_ebtables,
                    $v->install_xentools,
                    $v->admin_managed,
                    $v->rdp,
                    $v->topology_sockets,
                    $v->topology_cores,
                    $v->topology_threads,
                    $v->mac,
                    $v->notes,
                    $v->disable_nw_config,
                    $v->locked,
                    $v->openvz_features,
                    $v->speed_cap,
                    $v->numa,
                    $v->bpid,
                    $v->bserid,
                    $v->timezone,
                    $v->ha,
                    $v->data,
                    $v->server_name,
                    $v->email,
                    $v->pid,
                    $v->type,
                    $v->os_distro,
                    $v->stid,
                    $v->ips
                );
            }
        }

        if (!empty($data->ostemplates)) {
            foreach ($data->ostemplates as $o) {
                $o=(object)$o;
                $this->osTemplates[] = new OsTemplate(
                    $o->osid,
                    $o->type,
                    $o->name,
                    $o->filename,
                    $o->size,
                    $o->pygrub,
                    $o->drive,
                    $o->hvm,
                    $o->perf_ops,
                    $o->active,
                    $o->url,
                    $o->distro,
                    $o->Nvirt
                );
            }
        }

        if (!empty($data->servers)) {
            foreach ($data->servers as $server) {
                $server=(object)$server;
                $this->servers[] = new Server(
                    $server->serid,
                    $server->sgid,
                    $server->server_name,
                    $server->virt,
                    $server->ip,
                    $server->internal_ip,
                    $server->vnc_ip,
                    $server->settings,
                    $server->unique_txt,
                    $server->lv,
                    $server->hvm,
                    $server->licnumvs,
                    $server->total_ram,
                    $server->overcommit,
                    $server->ram,
                    $server->total_space,
                    $server->space,
                    $server->os,
                    $server->os_arch,
                    $server->uname,
                    $server->version,
                    $server->patch,
                    $server->lic_expires,
                    $server->checked,
                    $server->locked,
                    $server->vcores,
                    $server->ips,
                    $server->ipv6,
                    $server->ipv6_subnet,
                    $server->ips_int,
                    $server->bandwidth,
                    $server->update_resource,
                    $server->location,
                    $server->status,
                    $server->last_reverse_sync,
                    $server->ha_master,
                    $server->numvps,
                    $server->alloc_ram,
                    $server->alloc_space,
                    $server->alloc_cpu,
                    $server->alloc_cpu_percent,
                    $server->alloc_bandwidth,
                    $server->virts
                );
            }
        }
    }
}