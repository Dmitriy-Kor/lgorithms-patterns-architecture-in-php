<?php
/*
1. Наблюдатель: есть сайт HandHunter.gb. На нем работники могут подыскать себе вакансию РНР-программиста.
Необходимо реализовать классы искателей с их именем, почтой и стажем работы.
Также реализовать возможность в любой момент встать на биржу вакансий (подписаться на уведомления), либо же,
напротив, выйти из гонки за местом.
Таким образом, как только появится новая вакансия программиста, 
все жаждущие автоматически получат уведомления на почту (можно реализовать условно).
*/

spl_autoload_register(function ($classname) {
    require_once($classname . '.php');
});



$seeker1 = new JobSeeker('Jhon','qwerty@123.ru',2);
$seeker2 = new JobSeeker('Tom','qaz@123.ru',3);
$seeker2->statysOff();
$seeker3 = new JobSeeker('Bob','123@123.ru',5);

$seekers = [];
array_push($seekers, $seeker1);
array_push($seekers, $seeker2);
array_push($seekers, $seeker3);


$vacancy = new Vacancy('junior PHP', 88007009000);
$vacancy->openVacancy($seekers);