<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace models;
class User {
private $id;
private $username;
private $email;
private $phone;
private $type;
private $status;
private $password;
private $passchange;
function getId() {
    return $this->id;
}

function getUsername() {
    return $this->username;
}

function getEmail() {
    return $this->email;
}

function getPhone() {
    return $this->phone;
}

function getType() {
    return $this->type;
}

function getStatus() {
    return $this->status;
}

function getPassword() {
    return $this->password;
}

function getPasschange() {
    return $this->passchange;
}

function setId($id) {
    $this->id = $id;
}

function setUsername($username) {
    $this->username = $username;
}

function setEmail($email) {
    $this->email = $email;
}

function setPhone($phone) {
    $this->phone = $phone;
}

function setType($type) {
    $this->type = $type;
}

function setStatus($status) {
    $this->status = $status;
}

function setPassword($password) {
    $this->password = $password;
}

function setPasschange($passchange) {
    $this->passchange = $passchange;
}


}
?>