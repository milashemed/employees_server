<?php
/**
Description : Class For Accessing The Employees Database.
@author Salim Said Hemed <milas.dev@live.com>
@license LGPL https://www.gnu.org/licenses/lgpl-3.0.en.html

**/

class Database {
private $dsn = "mysql:host=localhost;dbname=employees";
private $username = "root";
private $password = "";
private $query;
private $conn;
/**
Description : Prevents var_dump from printing secure properties of the database connection such as username and password
**/
function __debugInfo(){
    return array(
      "Datasource"=>$this->dsn  
    );
}
/**
Description : Returns a reference to the Database Connection
@exception throws an exception if Connection fails
@return PDO Database Connection Handler/Reference
**/
private function get_Data_Source(){
    try {
        return new PDO($this->dsn,$this->username,$this->password);
    }
    catch(Exception $ex){
        echo $ex->getMessage();
        return null;
    }
    
}
/**
Description : Class Constructor with a query parameter, Initializes query parameter and initiates Database Connection
@param String $query SQL Query to be Executed


**/
function __construct($query){
    $this->conn = $this->get_Data_Source();
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->query = $query;
}


/**

**/
function execute_query(){
    try {
        $stmt = $this->conn->query($this->query);
        return $stmt;
    }
    catch (PDOException $ex){
        echo $ex->getMessage();
        return null;
    }
    
}
function execute_non_query(){
    try {
        return $this->conn->exec($this->query);
    }
    catch(PDOException $ex){
        echo $ex->getMessage();
        return 0;
    }
}
function execute_prepared_statement($array){
    try {
        $stmt = $this->conn->prepare($this->query);
        $stmt->execute($array);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOException $ex){
        echo $ex->getMessage();
        return null;
    }
}
function execute_update_prepared_statement($array){
    try {
        $stmt = $this->conn->prepare($this->query);
        $stmt->execute($array);
        return $stmt->rowCount();
    }
    catch(PDOException $ex){
        echo $ex->getMessage();
        return 0;
    }
}
function get_Row_Count(){
    try{
        return $this->conn->query($this->query)->rowCount();
    }
    catch(PDOException $ex){
        echo $ex->getMessage();
        return null;
    }
}
}
?>