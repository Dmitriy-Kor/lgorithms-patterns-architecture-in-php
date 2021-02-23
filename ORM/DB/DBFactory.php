<?php
namespace DB;
use DBConnection\DBConnection;
use DBQueryBuiler\DBQueryBuiler;
use DBrecord\DBrecord;

abstract class DBFactory
{
    private DBConnection $dbConection;
    private DBQueryBuiler $dbQueryBulier;
    private DBrecord $dbRecord;
     
    public function __construct()
    {
        $this->dbConection = $this->createDBConection();
        $this->dbQueryBulier = $this->createDBQueryBulier();
        $this->dbRecord = $this->createDBRecord();
    }

    public function createDB()
    {
        $this->dbConection->startConection();
        $this->dbRecord->crud();
        $this->dbQueryBulier->query();
       
    }

    abstract protected function createDBConection() : DBConnection;
    abstract protected function createDBQueryBulier() : DBQueryBuiler;
    abstract protected function createDBRecord() : DBrecord;
}