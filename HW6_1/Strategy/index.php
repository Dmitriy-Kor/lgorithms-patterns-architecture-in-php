<?php
/*
2. Стратегия: есть интернет-магазин по продаже носков. 
Необходимо реализовать возможность оплаты различными способами (Qiwi, Яндекс, WebMoney). 
Разница лишь в обработке запроса на оплату и получение ответа от платёжной системы. 
В интерфейсе функции оплаты достаточно общей суммы товара и номера телефона.
*/

spl_autoload_register(function ($classname) {
    require_once($classname . '.php');
});

$bill = new Bill(89115556677, 225.35);
$anotherBill = new Bill(89214443366, 3456.99);

function testStrategy(Bill $bill)
{
    $order = new PrepareBill($bill);

    $order->payBy(new QiwiStrategy());
    $order->payBy(new YandexStrategy());
    $order->payBy(new WebMoneyStrategy());
}
testStrategy($bill);
testStrategy($anotherBill);
