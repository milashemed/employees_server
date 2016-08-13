<?php
namespace models;
use models\Promotions;
use \Database;
class PromotionController{
    function create($promotion){
        $from = $promotion->getFrom();
        $to = $promotion->getTo();
        $employee = $promotion->getEmployee();
        $date = $promotion->getDate();
        $sql = "INSERT INTO promotions(from,to,employee,date) VALUES(:from,:to,:employee,:date)";
        $params = array("from"=>$from,"to"=>$to,"employee"=>$employee,"date"=>$date);
        $db = new Database($sql);
        $num = $db->execute_update_prepared_statement($params);
        return $num;
    }
    function read(){}
    function delete($id){}
    function update($newpromotion){}
    function keywordSearch($keyword){}
   
}
?>