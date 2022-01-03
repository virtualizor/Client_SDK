<?php
/**
 * @date_of_create: 12/1/2021 AD 13:25
 */

namespace YiiMan\VirtualizorSdk\Responses\Admin;

class OsName extends \YiiMan\ApiStorm\Response\BaseResponse
{
    /**
     * @param $data
     * @return Os[]
     */
    public function __construct($data)
    {
        $out = [];
        foreach ($data as $osID => $osData) {
            $out[$osID] = new Os($osData);
        }
        return $out;
    }
}