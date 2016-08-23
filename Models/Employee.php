<?php
namespace  models;
class Employee {
private $id;
private $fname;
private $mname;
private $dob;
private $national_id;
private $nhif;
private $nssf;
private $date_added;
private $rank;
private $dept;
private $promotion;
private $gender;
private $salary;
private $regimental;
function setId($id){
    $this->id = $id;
}
function getId(){
    return $this->id;
}
function setFname($fname){
    $this->fname = $fname;
}
function getFname(){
    return $this->fname;
}
function setMname($mname){
    $this->mname  = $mname;
}
function getMname(){
    return $this->mname;
}
function setDob($dob){
    $this->dob  = $dob;
}
function getDob(){
    return $this->dob;
}
function setNational_id($national_id){
    $this->national_id = $national_id;
}
function getNational_id(){
    return $this->national_id;
}
function setNhif($nhif){
    $this->nhif  = $nhif;
}
function getNhif(){
    return $this->nhif;
}
function setNssf($nssf){
    $this->nssf  = $nssf;
}
function getNssf(){
    return $this->nssf;
}
function setDate_added($date_added){
    $this->date_added  = $date_added;
}
function getDate_added(){
    return $this->date_added;
}
function setRank($rank){
    $this->rank  = $rank;
}
function getRank(){
    return $this->rank;
}
function setPromotion($promotion){
    $this->promotion  = $promotion;
}
function getPromotion(){
    return $this->promotion;
}
function setGender($gender){
    $this->gender = $gender;
}
function getGender(){
    return $this->gender;
}
function setSalary($salary){
    $this->salary  = $salary;
}
function getSalary(){
    return $this->salary;
}
function getDept() {
    return $this->dept;
}

function getRegimental() {
    return $this->regimental;
}

function setDept($dept) {
    $this->dept = $dept;
}

function setRegimental($regimental) {
    $this->regimental = $regimental;
}


}
?>