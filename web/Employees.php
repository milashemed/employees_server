<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <script src="js/jquery.js"></script>
            <script src="js/bootstrap/js/bootstrap.min.js"></script>
            <script src="js/utils.js"></script>
            <script src="js/bootbox.min.js"></script>
            <script src="js/Controllers/employee.js"></script>
            <script src="js/datepicker/js/bootstrap-datepicker.min.js"></script>
            <script src="js/angular.min.js"></script>
            <link rel="stylesheet" href="js/datepicker/css/bootstrap-datepicker.min.css" />

            <link rel="stylesheet"  href="js/bootstrap/css/bootstrap.min.css" />
                <link rel="stylesheet" href="css/mainstyle.css" />

        <title></title>
    </head>
    <body>
        <div class="container">
          
                <div class="btndiv">
                                    
                     <p>
                         <button type="button" id="btnadd" class="btn btn-lg  btn-primary" data-toggle="modal" data-target="#empmodal"><span class="glyphicon glyphicon-plus"></span> Add New Employee</button>

                          <button type="button" class="btn btn-lg  btn-primary"><span class="glyphicon glyphicon-print"></span> Print Employee List</button>
                         <button type="button" class="btn btn-lg  btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save Employees</button>




                     </p>
                     <p>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search Departments" id="search" />
                        </div>
                     </p>
                     

                </div>
        </div>
    </body>
        
    
</html>
<div id="empmodal" class="modal fade" role="dialog" ng-app="employeeApp">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div style="text-align: center">
                        <h2>
                            Add New Employee
                        </h2>
                        <h3 class="warning">
                            <span class="warning">*All Fields are Required</span>
                        </h3>
                        </div>
            </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="txtfname">Full Name : </label>
                            <input type="text" class="form-control" id="txtfname" placeholder="First Name" ng-model="fname" />
                            <input type="text" style="margin-top: 2%" class="form-control" id="txtlname" placeholder="Surname" ng-model="lname" />
                            <label id="lblname" class="success"> </label>
                            <label id="lblerrname" class="danger"></label>
                        </div>
                        <div class="form-group">
                            <label for="txtdob">Date of Birth : </label>
                            <input type="text" class="form-control" id="txtdob" placeholder="Pick A Date of Birth" />
                            <label id="lblerrdob" class="danger"></label>
                        </div>
                        <div class="form-group">
                            <label for="txtid">National ID : </label>
                            <input type="text" class="form-control" id="txtid" placeholder="Unique Kenyan National ID" />
                            <label id="lblerrid"></label>
                        </div>
                        <div class="form-group">
                            <label for="txtnhif">NHIF Number : </label>
                            <input type="text" class="form-control" id="txtnhif" placeholder="Unique National Health Insurance Number" />
                            <label id="lblerrnhif"></label>
                        </div>
                        <div class="form-group">
                            <label for="txtnssf">National ID : </label>
                            <input type="text" class="form-control" id="txtnssf" placeholder="Unique NSSF Number" />
                            <label id="lblerrnssf"></label>
                        </div>
                        <div class="form-group">
                            <label id="lblrank" class="success"></label>
                            <button class="btn btn-lg  btn-primary btn-block" id="btnpickrank">Pick Employee Rank</button>
                            <label id="lblerrrank"></label>
                        </div>
                        <div class="form-group">
                            <label id="lbldept" class="success"></label>
                            <button class="btn btn-lg  btn-primary btn-block" id="btnpickdept">Pick Employee Department</button>
                            <label id="lblerrdept"></label>
                        </div>
                        <div class="form-group">
                            <label for="optgender">Gender : </label>
                            <label class="radio-inline"><input type="radio" id="optgender" name="optgender" value="male">Male</label>
                            <label class="radio-inline"><input type="radio" id="optgender" name="optgender" value="female">Female</label>
                        </div>
                        <div class="form-group">
                            <label for="txtsalary">Salary : </label>
                            <input type="text" id="txtsalary" class="form-control" />
                            <label id="lblerrsalary"></label>

                        </div>
                        
                        
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-lg btn-block btn-success">Save Employee</button>
                </div>
            
        </div>
    </div>
    
</div>