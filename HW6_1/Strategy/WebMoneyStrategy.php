<?php

class WebMoneyStrategy implements IPaySystem
{
    public function pay($bill)
    {
        echo 'Оплата через WebMoney от номера: ' . $bill->getPhone() . ' на сумму ' . $bill->getValue() . ' руб.' . PHP_EOL;
    }
}
