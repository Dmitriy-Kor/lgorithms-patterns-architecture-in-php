<?php
namespace DB;
use DBConnection\DBConnection;
use DBQueryBuiler\DBQueryBuiler;
use DBrecord\DBrecord;
use DBConnection\PostgreSQLDBCconnection;
use DBQueryBuiler\PostgreSQLDBQueryBuiler;
use DBrecord\PostgreSQLDBRecord;

class PostgreSQLFactory extends DBFactory
{
    protected function createDBConection(): DBConnection
    {
        echo 'создаем класс подключения для PostgreSQL <br>';
        return new PostgreSQLDBCconnection;
    }
    protected function createDBQueryBulier(): DBQueryBuiler
    {
        echo 'создаем класс конструктора запросов для PostgreSQL <br>';
        return new PostgreSQLDBQueryBuiler;
    }
    protected function createDBRecord(): DBrecord
    {
        echo 'создаем класс crud для PostgreSQL <br>';
        return new PostgreSQLDBRecord;
    }
}
