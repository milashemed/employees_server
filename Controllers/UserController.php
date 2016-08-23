<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace controllers;
require($_SERVER['DOCUMENT_ROOT'].'/employees/Models/User.php');
require($_SERVER['DOCUMENT_ROOT'].'/employees/libs/Database.php');
use models\User;
class UserController{
    public function createUser($User){
        $username = $User->getUsername();
        $email = $User->getEmail();
        $phone = $User->getPhone();
        $type = $User->getType();
        $status = $User->getStatus();
        $password = $User->getPassword();
        $passchange = $User->getPasschange();
        $sql = "INSERT INTO users VALUES(NULL,:username,:email,:phone,:type,:status,:password,:passchange)";
        $params = array("username"=>$username,"email"=>$email,"phone"=>$phone,"type"=>$type,"status"=>$status,"password"=>$password,"passchange"=>$passchange);
        $db = new \Database($sql);
        return $db->execute_update_prepared_statement($params);
        
    }
    public function deleteUser($id){
        $sql = "DELETE FROM users WHERE id = :id";
        $params = array("id"=>$id);
        $db = new \Database($sql);
        return $db->execute_update_prepared_statement($params);
    }
    public function editUser($newUser){
        $username = $newUser->getUsername();
        $email = $newUser->getEmail();
        $phone = $newUser->getPhone();
        $type = $newUser->getType();
        $status = $newUser->getStatus();
        $password = $newUser->getPassword();
        $passchange = $newUser->getPasschange();
        $sql = "UPDATE users SET username=:username,Email=:email,phone=:phone,user_type=:type,status=:status,password=:password,passchange=:passchange where id=:id";
        $params = array("username"=>$username,"email"=>$email,"phone"=>$phone,"type"=>$type,"status"=>$status,"password"=>$password,"passchange"=>$passchange,"id"=>$newUser->getId());
        $db = new \Database($sql);
        return $db->execute_update_prepared_statement($params);
    }
    public function listUsers(){
        $sql = "SELECT * FROM users";
        $db = new \Database($sql);
        $results = array();
        foreach ($db->execute_query() as $row){
            $data = array("id"=>$row['id'],"username"=>$row['username'],"email"=>$row['email'],"phone"=>$row['phone'],"type"=>$row['User_type'],"status"=>$row['Status'],"passchange"=>$row['passchange']);
            array_push($results, $data);
        }
        return results;
    }
    public function keywordSearch($keyword){
        $sql = "SELECT * FROM users WHERE username like %:username%";
        $params = array("username"=>$keyword);
        $db = new \Database($sql);
        $results = array();
        foreach ($db->execute_prepared_statement($params) as $row){
            $data = array("id"=>$row['id'],"username"=>$row['username'],"email"=>$row['email'],"phone"=>$row['phone'],"type"=>$row['User_type'],"status"=>$row['Status'],"passchange"=>$row['passchange']);
            array_push($results, $data);
        }
        return results;
    }
    public function authenticate($username,$password){
        $user = $this->getUserByUsername($username);
        $hash = $user['password'];
        return password_verify($password, $hash);
    }
    public function ChangeStaus($user,$status){
        $user->setStatus($status);
        return $this->editUser($user);
    }
    public function getUserByID($id){
        $sql = "SELECT * FROM users WHERE id = :id";
        $params = array("id"=>$id);
        $db = new \Database($sql);
        $results = array();
        foreach ($db->execute_prepared_statement($params) as $row){
            $data = array("id"=>$row['id'],"username"=>$row['username'],"email"=>$row['email'],"phone"=>$row['phone'],"type"=>$row['User_type'],"status"=>$row['Status'],"password"=>$row['password'],"passchange"=>$row['passchange']);
            array_push($results, $data);
        }
        return results;
    }
    public function getUserByUsername($username){
         $sql = "SELECT * FROM users WHERE username = :username";
        $params = array("username"=>$username);
        $db = new \Database($sql);
        $results = array();
        foreach ($db->execute_prepared_statement($params) as $row){
            $data = array("id"=>$row['id'],"username"=>$row['username'],"email"=>$row['email'],"phone"=>$row['phone'],"type"=>$row['User_type'],"status"=>$row['Status'],"password"=>$row['password'],"passchange"=>$row['passchange']);
            array_push($results, $data);
        }
        return results;
    }
    public function get_User_Count(){
        return count($this->listUsers());
    }
}
?>
