<?php
namespace controllers;
echo file_exists("../Models/Department.php");
require($_SERVER['DOCUMENT_ROOT'].'/employees/Models/Department.php');
require($_SERVER['DOCUMENT_ROOT'].'/employees/libs/Database.php');
use models\Department;
class DepartmentController {
    function create($department){
        $description = $department->getDescription();
        $sql = "INSERT INTO departments(Description) VALUES(:description)";
        $params = array("description" => $description);
        $db = new \Database($sql);
         $num = $db->execute_update_prepared_statement($params);
        return $num;
    }
    function delete($id){
        $sql = "DELETE FROM departments WHERE id = :id";
        $params = array("id" => $id);
        $db = new \Database($sql);
        $num = $db->execute_update_prepared_statement($params);
        return $num;
    }
    function listDepartments(){
        $sql = "SELECT id,description FROM departments";
        $db = new \Database($sql);
        $results = array();
        foreach ($db->execute_query() as $row){
            $data = array("ID" => $row['id'],"Description"=>$row['description']);
            array_push($results,$data);
        }
        return $results;
    }
    function update($newDepartment){
        $desc = $newDepartment->getDescription();
        $id = $newDepartment->getId();
        $sql = "UPDATE departments SET Description = :description WHERE id = :id";
        $params = array("id"=>$id,"description"=>desc);
        $db = new Database($sql);
        $num = $db->execute_update_prepared_statement($params);
        return $num;
    }
    function keywordSearch($keyword){
        $sql = "SELECT id,description FROM departments WHERE description like %:keyword%";
        $params = array("keyword" => $keyword);
        $db = new Database($sql);
        $esults = array();
        foreach ($db->execute_prepared_statement($params) as $row){
            $data = array("ID" => $row['id'],"Description");
            array_push($results,$data);
        }
        return $results;
    }
    
}
?>