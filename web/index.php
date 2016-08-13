<!DOCTYPE html>
<html>
<head>
    <title>Employee Management System</title>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/utils.js"></script>
    <link rel="stylesheet"  href="js/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/mainstyle.css" />
</head>

<body>
<div class="jumbotron">
    <div class="container">
        <h1>Employee Management System</h1>
        <div style="text-align: center">
             <img src="images/color_management.png" />
        <p>
            <a href="javascript:openWin('departments.php',1000,1000)" class="btn btn-primary btn-lg">Departments</a>
             <a href="#" class ="btn btn-primary btn-lg">Employees</a>
              <a href="#" class= "btn btn-primary btn-lg">Promotions</a>
               <a href="#" class="btn btn-primary btn-lg">Reports</a>
        </p>
        </div>
       
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2>Manage Departments</h2>
            <p>Use this Handler to Manage Organisation Departments like Adding,Deleting,Updating, transfer of Employees and Assigning Department Heads.</p>
        </div>
        <div class="col-md-4">
            <h2>Manage Employees</h2>
            <p>Use this Handler to Manage Organisation Employees like Adding,Deleting,Updating Employees</p>
        </div>
        <div class="col-md-4">
            <h2>Manage Promotions</h2>
            <p>Use this Handler to Manage Employee Promotions and Demotions</p>
        </div>
        
    </div>
</div>

</body>
</html>
