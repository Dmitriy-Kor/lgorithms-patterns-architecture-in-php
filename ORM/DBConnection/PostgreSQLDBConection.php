<?php

namespace DBConnection;

class PostgreSQLDBCconnection extends DBConnection
{
    function startConection()
    {
        echo 'Работает подключение к БД PostgreSQL <br>';
    }
}