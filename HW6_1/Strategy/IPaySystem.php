<?php

interface IPaySystem
{
    public function pay(Bill $bill);
}
