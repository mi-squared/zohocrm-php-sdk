<?php
namespace com\zoho\crm\api\util;

class Choice implements \JsonSerializable
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function jsonSerialize()
    {
        return $this->value;
    }

    public function getValue()
    {
        return $this->value;
    }
}