<?php
/**
 * @date_of_create: 11/28/2021 AD 10:57
 */

namespace YiiMan\VirtualizorSdk\PostData;

/**
 * Class Rebuild
 * @package YiiMan\VirtualizorSdk\PostData
 * @property integer $vpsid                 The ID of the VPS to be rebuilt
 * @property integer $osid                  The ID of the OS Template
 * @property string  $newpass0              The new root password
 * @property string  $conf0                 The confirmation password
 * @property boolean $format_primary        If this parameter is set as one then only primary disk will be formatted of the OS. Other disks remains as it is.(Supported only for VPS(s) on KVM, PROXMOX KVM and XEN HVM)
 * @property boolean $eu_send_rebuild_email If this is set as one, an email will be sent to the VPS user after the VPS is rebuilt
 */
class Rebuild extends \YiiMan\ApiStorm\Post\BasePostData
{
    public
        $vpsid,
        $osid,
        $newpass0,
        $conf0,
        $format_primary,
        $eu_send_rebuild_email,
        $reos = 1;

    /**
     * @inheritDoc
     */
    public function rules(): array
    {
        return
            [
                'vpsid'                 => 'int',
                'osid'                  => 'int',
                'newpass'               => 'string',
                'conf'                  => 'string',
                'format_primary'        => 'bool',
                'eu_send_rebuild_email' => 'bool',
                'reos'                  => 'int',
            ];
    }
}