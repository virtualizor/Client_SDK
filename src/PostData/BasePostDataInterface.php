<?php
/**
 * @date_of_create: 11/22/2021 AD 11:11
 */

namespace YiiMan\VirtualizorSdk\PostData;


interface BasePostDataInterface
{
    public function requiredFields(): array;

    /**
     * this function validate your data based on defined rules and required fields
     * @return bool
     */
    public function validate(): bool;

    /**
     * define data type of every field like:
     *
     * [
     *  'fieldname'=>'int'|'string'|'float'|'array'|'object'|'class'|'boolean'
     * ]
     * @return array
     */
    public function rules():array;


}