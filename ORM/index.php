<?php

// require 'DB/DBFactory.php';
// require 'DB/MySQLFactory.php';
// require 'DB/PostgreSQLFactory.php';
// require 'DB/OracleFactory.php';

// require 'DBConnection/DBConnection.php';
// require 'DBConnection/MySQLDBCconnection.php';
// require 'DBConnection/PostgreSQLDBConection.php';
// require 'DBConnection/OracleDBConnection.php';

// require 'DBQueryBuiler/DBQueryBuiler.php';
// require 'DBQueryBuiler/MySQLDBQueryBuiler.php';
// require 'DBQueryBuiler/PostgreSQLDBQueryBuiler.php';
// require 'DBQueryBuiler/OracleDBQueryBuiler.php';

// require 'DBRecord/DBRecord.php';
// require 'DBRecord/MySQLDBRecord.php';
// require 'DBRecord/PostgreSQLDBRecord.php';
// require 'DBRecord/OracleDBRecord.php';

require 'autoload.php';
use DB\{ DBFactory, MySQLFactory, PostgreSQLFactory, OracleFactory};

function test(DBFactory $db)
{
     $db->createDB();
}

test(new MySQLFactory);
//test(new PostgreSQLFactory);
//test(new OracleFactory);

// $db = new MySQLFactory;
// $db->createDB();