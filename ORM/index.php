<?php

require 'autoload.php';
use DB\{ DBFactory, MySQLFactory, PostgreSQLFactory, OracleFactory};

function test(DBFactory $db)
{
     $db->createDB();
}

//test(new MySQLFactory);
//test(new PostgreSQLFactory);
//test(new OracleFactory);

$db = new MySQLFactory;
$db->createDB();