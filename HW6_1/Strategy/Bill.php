<?php
class Bill
{
    protected int $phone;
    protected float $value;

    public function __construct(int $phone, float $value)
    {
        $this->phone = $phone;
        $this->value = $value;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getValue()
    {
        return $this->value;
    }
}

