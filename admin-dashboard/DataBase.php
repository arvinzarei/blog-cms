<?php
namespace DataBase;
class DataBase
{
private $connection;
private $option=array(\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION,\PDO::ATTR_DEFAULT_FETCH_MODE=>\PDO::FETCH_ASSOC);

private $dbHost="localhost";
private $dbName="blog";
private $dbUserName="root";
private $dbPassword="";

function __construct()
{
    try{
        $this->connection= new \PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName,$this->dbUserName,$this->dbPassword,$this->option);
    }
    catch(\PDOException $e){
        echo "<div style='color: red'>.Your Connection Failed:</div>".$e->getMessage();
    }
}

public function CreateTable($sql)
{
    try {
        $this->connection->exec($sql);
        return true;
    }
    catch (\PDOException $e){
        echo "<div style='color: red'>.Your Connection Failed:</div>".$e->getMessage();
        return false;
    }
}

}