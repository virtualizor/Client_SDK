<?php
/**
 * @date_of_create: 11/21/2021 AD 12:51
 */

namespace YiiMan\VirtualizorSdk\Responses;

/**
 * Class BaseResponse
 * @package YiiMan\VirtualizorSdk\Responses
 *
 * @property $title
 * @property $status
 * @property $error
 */
class BaseResponse
{


    public $hasError=false;

    public $error;
    public $title;
    public $status;
}