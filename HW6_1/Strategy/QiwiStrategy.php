<?php

class QiwiStrategy implements IPaySystem
{
    public function pay($bill)
    {
        echo 'Оплата через Qiwi от номера: ' . $bill->getPhone() . ' на сумму ' . $bill->getValue() . ' руб.' . PHP_EOL;
    }
}
