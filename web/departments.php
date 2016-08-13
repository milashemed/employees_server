<!DOCTYPE html>
    <html lang="en">
        <head>
            <script src="js/jquery.js"></script>
            <script src="js/bootstrap/js/bootstrap.min.js"></script>
            <script src="js/utils.js"></script>
            <script src="js/bootbox.min.js"></script>
            <script src="js/Controllers/Department.js"></script>
            <link rel="stylesheet"  href="js/bootstrap/css/bootstrap.min.css" />
                <link rel="stylesheet" href="css/mainstyle.css" />

            <title>Manage Departments</title>
            
        </head>
        <body>
            <div class="container">
          
                <div class="btndiv">
                                    
                     <p>
                         <button type="button" id="btnadd" class="btn btn-lg  btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New Department</button>
                          <button type="button" class="btn btn-lg  btn-primary"><span class="glyphicon glyphicon-print"></span> Print Department List</button>
                         <button type="button" class="btn btn-lg  btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save Department</button>




                     </p>
                     <p>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search Departments" id="search" />
                        </div>
                     </p>
                     

                </div>
            
                <div class="panel panel-default">
                <table>
                    <th colspan="3">Department List</th>
                </table> 
                </div>
                
            </div>
        </body>
    </html>