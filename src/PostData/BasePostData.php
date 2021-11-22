<?php
/**
 * @date_of_create: 11/22/2021 AD 11:11
 */

namespace YiiMan\VirtualizorSdk\PostData;

/**
 * Class BasePostData
 * @package YiiMan\VirtualizorSdk\PostData
 * @property [] $errors
 */
abstract class BasePostData implements BasePostDataInterface
{
    public $errors = [];

    /**
     * serve data as array
     * @return array
     */
    public function serve()
    {
        $out = [];
        $reflect = new \ReflectionClass($this);
        $props = $reflect->getProperties(\ReflectionProperty::IS_PUBLIC);
        foreach ($props as $prop) {
            if (!isset($this->{$prop->name})) {
                continue;
            }
            $out[$prop->name] = $this->{$prop->name};
        }

        return $out;
    }

    private function addError($prop, $error)
    {
        $this->errors[$prop] = $error;
    }

    private function checkRequires()
    {
        $hasError = false;
        $requires = $this->requiredFields();
        if (!empty($requires)) {
            foreach ($requires as $f) {
                if (!isset($this->{$f})) {
                    $this->addError($f, $f.' is required');
                    $hasError = true;
                }
            }
        }

        if ($hasError) {
            return false;
        }
        return true;
    }

    private function checkTypes()
    {
        $hasError = false;
        $reflect = new \ReflectionClass($this);
        $props = $reflect->getProperties(\ReflectionProperty::IS_PUBLIC);
        foreach ($props as $prop) {
            if (!isset($this->{$prop->name})) {
                continue;
            }
            $type = $this->rules()[$prop->name];

            if (is_callable($type)) {
                if ($this->{$prop->name} instanceof $type) {
                    $this->addError($prop->name, $prop.'should instant of class');
                    $hasError = true;
                }
            } else {
                $isOk = true;
                switch ($type) {
                    case 'integer':
                        $isOk = (is_int($this->{$prop->name}) | is_integer($this->{$prop->name})) ? true : false;
                        break;
                    case 'string':
                        $isOk = (is_string($this->{$prop->name})) ? true : false;
                        break;
                    case 'array':
                        $isOk = (is_array($this->{$prop->name})) ? true : false;
                        break;
                    case 'bool':
                    case 'boolean':
                        $isOk = (is_bool($this->{$prop->name})) ? true : false;
                        break;
                }

                if (!$isOk) {
                    $this->addError($prop->name, $prop->name.' type should be '.$type);
                    $hasError = true;
                }
            }
        }


        if ($hasError) {
            return true;
        } else {
            return false;
        }
    }

    public function validate(): bool
    {
        if ($this->checkRequires() * $this->checkTypes()) {
            return true;
        } else {
            return false;
        }
    }
}