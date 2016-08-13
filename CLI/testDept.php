<?php

require("../Controllers/DepartmentController.php");
use controllers\DepartmentController as dc;
use models\Department;
$dept = new Department();
$dept->setId(0);
$dept->setDescription("test Department 2");
$dc = new dc();
$num = $dc->create($dept);
echo $num;

?>