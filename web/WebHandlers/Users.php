<?php
require("../../Controllers/UserController.php");
use controllers\UserController as uc;
use models\User;
$operation = $_POST['operation'];
switch ($operation){
    case "add" : addUser();break;
    case "disable" : disableUser();break;
    case "delete" : deleteUser();break;
    case "list" : listUsers();break;
    case "count" : getUserCount();break;
    case "edit" : editUser();break;
    case "passwd" : changePassword();break;
    case "enable" : enableUser();break;
    default :     default: header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found"); break;
}
function addUser(){
    $user = new User();
    $user->setId(0);
    $user->setUsername($_POST['username']);
    $user->setEmail($_POST['email']);
    $user->setPhone($_POST['phone']);
    $user->setType($_POST['type']);
    $user->setStatus($_POST['status']);
    $user->setPassword(password_hash($_POST['password'], PASSWORD_BCRYPT));
    $user->setPasschange(1);
    $uc = new uc();
    $num = $uc->createUser($user);
    if (!isset($num) || !is_int($num) || $num <= 0 ){
    $msg = array("Status" => "Fail","Description" => "Error Inserting Data,Please Contact Administrator");
    echo json_encode($msg);
}
else {
    $msg = array("Status" => "OK","Description" => "Update Success $num row(s) Updated" );
    echo json_encode($msg);
}
}
function disableUser(){}
function deleteUser(){}
function listUsers(){}
function getUserCount(){}
function editUser(){}
function changePassword(){}
function enableUser(){}
?>

