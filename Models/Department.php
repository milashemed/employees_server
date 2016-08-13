<?php
namespace models;
class Department {
private $id;
private $description;
function setId($id){
    $this->id = $id;
}
function getId(){
    return $this->id;
}
function getDescription(){
    return $this->description;
}
function setDescription($description){
    $this->description = $description;
}
}
?>