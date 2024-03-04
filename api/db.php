<?php

class DB{

    private $host = "localhost";
    private $dbname="cafeteria";
    private $user="root";
    private $connection="";
    private $pass="";

    function __construct(){

        $this->connection=new pdo("mysql:=$this->host;dbname=$this->dbname",$this->user,"$this->pass");
    }

    function get_connection(){
        return $this->connection;
    }

    function query($sql){
        return $this->connection->query($sql);
    }

    function get_data($table_name,$condition=1){
        return $this->connection->query("select * from $table_name where $condition");
    }
    function delete_data($table_name,$condition=1){
        $this->connection->query("delete from $table_name where $condition");
    }

    function insert_data($table_name,$columns_names,$values){
        $this->connection->query("INSERT INTO $table_name ($columns_names) VALUES ($values)");
    }
    function update_data($table_name,$columns_values,$condition=1){
        $this->connection->query("UPDATE $table_name SET $columns_values WHERE $condition");
    }


}

header('Content-Type: application/json; charset=utf-8');


?>