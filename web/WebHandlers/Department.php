<?php
require("../../Controllers/DepartmentController.php");
use controllers\DepartmentController as dc;
use models\Department;
$operation = $_POST['operation'];
switch($operation){
    case "Add" : add($_POST['description']);break;
    case "Delete" : delete($_POST['id']);break;
    case "Update" : update($_POST['id'],$_POST['description']);break;
    case "List" : listDepartments();break;
    case "keywordSearch" : keywordSearch($_POST['keyword']);break;
    default: header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
}
function add($description){


$dept = new Department();
$dept->setId(0);
$dept->setDescription($description);
$dc = new dc();
$num = $dc->create($dept);
if (!isset($num) || !is_int($num) || $num <= 0 ){
    $msg = array("Status" => "Fail","Description" => "Error Inserting Data,Please Contact Administrator");
    echo json_encode($msg);
}
else {
    $msg = array("Status" => "OK","Description" => "Update Success $num row(s) Updated" );
    echo json_encode($msg);
}

}
function delete($id){
        $dept = new Department();
        $dc = new dc();
        $num = $dc->delete($id);
        $data = array("Status" => "OK","Description" => "$num Rows Deleted");
        echo json_encode($data);

}
function update($id,$description){
    $dept = new Department();
$dept->setId($id);
$dept->setDescription($description);
$dc = new dc();
$num = $dc->update($dept);
if (!isset($num) || !is_int($num) || $num <= 0 ){
    $msg = array("Status" => "Fail","Description" => "Error Updating Data,Please Contact Administrator");
    echo json_encode($msg);
}
else {
    $msg = array("Status" => "OK","Description" => "Update Success $num rows Updated" );
    echo json_encode($msg);
}
}
function listDepartments(){
   $dept = new Department();
   $dc = new dc();
    $results = $dc->listDepartments();
    $data = array();
    if (empty($results)){
        $data["Status"] = "Empty";
        $data["Description"] = "Data Not Found";
        echo json_encode($data);
    }
    else {
        array_push($data,array("Status" => "OK","Rows_Retrieved" => count($results)));
        array_push($data,$results);
        echo json_encode($data);
    }
}
function keywordSearch($keyword){
     $dept = new Department();
   $dc = new dc();
    $results = $dc->keywordSearch($keyword);
    $data = array();
    if (empty($results)){
        $data["Status"] = "Empty";
        $data["Description"] = "Data Not Found";
        echo json_encode($data);
    }
    else {
        array_push($data,array("Status" => "OK","Rows_Retrieved" => count($results)));
        array_push($data,$results);
        echo json_encode($data);
    }
    
}
?>