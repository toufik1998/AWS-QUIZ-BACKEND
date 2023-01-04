<?php

define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "aws_quiz");
class database{
    protected  $host = DB_HOST;
    protected  $db_name = DB_NAME;
    protected  $user = DB_USERNAME;
    protected  $password = DB_PASSWORD;
    protected $dbh;
    public function __construct(){
        try {
            
            $this->dbh = new PDO("mysql:host=$this->host;dbname=$this->db_name",$this->user,$this->password);

        } catch (PDOException $error) {
            echo "Error! ". $error->getMessage() ."<br/>";
            die();
        }
    }

}
