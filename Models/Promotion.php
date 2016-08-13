<?php
namespace models;
class Promotion {
    private $id;
    private $from;
    private $to;
    private $employee;
    private $date;
    function setId($id){
        $this->id = $id;
    }
    function getId(){
        return $this->id;
    }
    function setFrom($from){
        $this->from = $from;
    }
    function getFrom(){
        return $this->from;
    }
    function getTo(){
        return $this->to;
    }
    function setTo($to){
        $this->to = $to;
    }
    function setDate($date){
        $this->date = $date;
    }
    function getDate(){
        return $this->date;
    }
}
?>