<?php
namespace DB;
use DBConnection\DBConnection;
use DBQueryBuiler\DBQueryBuiler;
use DBrecord\DBrecord;
use DBConnection\MySQLDBCconnection;
use DBQueryBuiler\MysqlDBQueryBuiler;
use DBrecord\MySQLDBRecord;

class MySQLFactory extends DBFactory {
    protected function createDBConection() : DBConnection
    {
        echo 'создаем класс подключения для MySQL' . PHP_EOL;
        return new MySQLDBCconnection;
    }
    protected function createDBQueryBulier() : DBQueryBuiler
    {
        echo 'создаем класс конструктора запросов для MySQL' . PHP_EOL;
        return new MysqlDBQueryBuiler; 
    }
    protected function createDBRecord() : DBrecord
    {
        echo 'создаем класс crud для MySQL' . PHP_EOL;
        return new MySQLDBRecord;
    }
}