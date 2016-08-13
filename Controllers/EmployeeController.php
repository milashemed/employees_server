<?php
namespace controllers;
require("../Models/Employee.php");
require("../libs/Database.php");
use models\Employee;
class EmployeeController{
    public function createEmployee($employee){
        $fname = $employee->getFname();
        $mname = $employee->getMname();
        $dob = $employee->getDob();
        $natid = $employee->getNational_id();
        $nhif = $employee->getNhif();
        $nssf = $employee->getNssf();
        $date_added = $employee->getDate_added();
        $rank = $employee->getRank();
        $promotion = $employee->getPromotion();
        $gender = $employee->getGender();
        $salary = $employee->getSalary();
        $sql = "INSERT INTO employees.employees VALUES(NULL,:fname,:mname,:dob,:natid,:nhif,:nssf,:date_added,:rank,:promotion,:gender,:salary)";
        $params = array("fname" => $fname,"mname" => $mname,"dob" => $dob,"natid"=>$natid,"nhif" => nhif,"nssf" => $nssf,"date_added" => $date_added,"rank" => $rank,"promotion" => $promotion,"gender" => $gender,"salary" => $salary);
        $db = new Database($sql);
        $num = $db->execute_update_prepared_statement($params);
        return $num;
    }
    public function updateEmployee($newEmployee){}
    public function listEmployees(){}
    public function keywordSearch($keyword){}
    public function deleteEmployee($id){}
    
}
?>