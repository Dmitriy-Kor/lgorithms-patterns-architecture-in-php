<?php

class YandexStrategy implements IPaySystem
{
    public function pay($bill)
    {
        echo 'Оплата через Yandex от номера: ' . $bill->getPhone() . ' на сумму ' . $bill->getValue() . ' руб.' . PHP_EOL;
    }
}
