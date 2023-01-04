<?php
include_once('C:\xampp\htdocs\QUIZ_AWSB\app\modal\database.php');
class Datacontent extends database{
    public function __construct(){
        parent::__construct();
    }
    public function getData($query){
        $arrayOfData = $this->dbh->prepare($query);
        $arrayOfData->execute();
        return $arrayOfData->fetchAll(PDO:: FETCH_ASSOC);
    }
}