<?php
/**
 * @date_of_create: 12/1/2021 AD 12:59
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

/**
 *
 */
class VirtualizorType extends \YiiMan\ApiStorm\Response\BaseResponse
{
    /**
     * @param $data
     * @return OsName[]
     */
    public function __construct($data)
    {
        $out = [];
        foreach ($data as $osName => $osData) {
            $out[$osName] = new OsName($osData);
        }
        return $out;
    }
}