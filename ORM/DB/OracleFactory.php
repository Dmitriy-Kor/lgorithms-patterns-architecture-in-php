<?php
namespace DB;
use DBConnection\DBConnection;
use DBQueryBuiler\DBQueryBuiler;
use DBrecord\DBrecord;
use DBConnection\OracleDBCconnection;
use DBQueryBuiler\OracleDBQueryBuiler;
use DBrecord\OracleDBRecord;


class OracleFactory extends DBFactory
{
    protected function createDBConection(): DBConnection
    {
        echo 'создаем класс подключения для Oracle <br>';
        return new OracleDBCconnection;
    }
    protected function createDBQueryBulier(): DBQueryBuiler
    {
        echo 'создаем класс конструктора запросов для Oracle <br>';
        return new OracleDBQueryBuiler;
    }
    protected function createDBRecord(): DBrecord
    {
        echo 'создаем класс crud для Oracle <br>';
        return new OracleDBRecord;
    }
}
