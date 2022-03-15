<?php include('include/link.php'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- header part -->
  <?php include('include/header.php'); ?>

  <!-- Left side column. contains the logo and sidebar -->
  <?php include('include/left_sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Employee Information
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="#">Dashboard</li>
        <li class="active">Add new Employee form</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Hover Data Table</h3> -->
            </div>
<<<<<<< HEAD
               <!-- ADD EMPLOYEE PHP CODE -->
            <?php 
            if ($_SERVER['REQUEST_METHOD']=='POST') {
              //print_r($_POST)
              include('include/db_config.php');
              extract($_POST);
              $sql = "INSERT INTO empinfo(firstname, lastname, gender, phone,email,address, department, degree) VALUES('$fname', '$lname', '$gender','$phone', '$email','$addr', '$dept', '$deg')";

              $conn->query($sql);

              if($conn->affected_rows>0){  ?> 
                  <script>
                    alert("Successfully Added Information")
                  </script>           
              <?php 
            }

              // if($conn->affected_rows>0){ 
              //   header("Location: employee.php");                   
              // }
              //echo $conn->affected_rows; //Data gese kina check korar jonno
            }
          ?> 
=======
>>>>>>> 8d75c6d562d9af8af676f0baecb060e8035f5bd5

            <!-- /.box-header -->
            <div class="box-body">
               <form action="" method="post">
                 <div class="form-row">
                     <div class="form-group col-md-6">
                       <label>First Name*</label>
                       <input type="text" class="form-control" placeholder="Enter first name" value="" name="fname">
                     </div>


                     <div class="form-group col-md-6">
                       <label>Last Name*</label>
                       <input type="text" class="form-control" placeholder="Enter last name" value="" name="lname">
                     </div>
                 </div>
                 <div class="form-row">
                   <div class="form-group col-xs-6">
                     <label>Email*</label>
                     <input type="text" class="form-control" placeholder="Enter your Email" value="" name="email">
                   </div>
                   <div class="form-group col-xs-6">
                     <label>Address</label>
                     <input type="text" class="form-control" placeholder="Enter your Degree" value="" name="addr">
                   </div>
                 </div>
                 <div class="form-row">
                   <div class="form-group col-md-6">
                     <label>Department*</label>
                     <input type="text" class="form-control" placeholder="Enter your Department" value="" name="dept">
                   </div>
                   <div class="form-group col-md-6">
                     <label>Degree</label>
                     <input type="text" class="form-control" placeholder="Enter your Degree" value="" name="deg">
                   </div>
                 </div>

                 <div class="form-row">
                   <div class="form-group col-md-6">
                   <label>Gender: </label>
                    
                      <input class="form-check-input" type="radio" name="gender" value="Male">
                      <label class="form-check-label">
                        Male
                      </label>
                      <input class="form-check-input" type="radio" name="gender" value="Female">
                      <label class="form-check-label" >
                        Female
                      </label> 
                    </div>
                   </div>
                   <div class="form-group col-md-6">
                     <label>Phone*</label>
                     <input type="text" class="form-control" placeholder="Enter your phone" value="" name="phone">
                   </div>
                  </div>
                 <button type="submit" name="submit" class="btn btn-success btn-block">SUBMIT</button>
                </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->   


<<<<<<< HEAD
=======
<!--     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box-body">
            <button type="button" class="btn btn-primary btn-block btn-lg" data-toggle="modal" data-target="#modal-info">
              Add Employee
            </button>
          </div>
        </div>
      </div>

        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal modal-info fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Employee Data</h4>
              </div>
              <div class="modal-body">
                 <div class="container">
                       <!-- ADD EMPLOYEE PHP CODE -->
                     <?php  

                    if ($_SERVER['REQUEST_METHOD']=='POST') {
                      //print_r($_POST)
                      include('include/db_config.php');
                      extract($_POST);
                      $sql = "INSERT INTO empinfo(firstname, lastname, gender, phone,email,address, department, degree) VALUES('$fname', '$lname', '$gender','$phone', '$email','$addr', '$dept', '$deg')";

                      $conn->query($sql);

                      if($conn->affected_rows>0){ 

                        header("Location: http://localhost/waliul-1267894/php_projects/employee-management-system/users.php"); 
                  
                      }
                      //echo $conn->affected_rows; //Data gese kina check korar jonno
                    }
                  ?>                  
                    <form action="" method="post">
                     <div class="form-row">
                         <div class="form-group col-md-6">
                           <label>First Name</label>
                           <input type="text" class="form-control" placeholder="Enter first name" value="" name="fname">
                         </div>


                         <div class="form-group col-md-12">
                           <label>Last Name</label>
                           <input type="text" class="form-control" placeholder="Enter last name" value="" name="lname" style="width: 540px;" >
                         </div>
                     </div>

                     <div class="form-row">
                       <div class="form-group col-sm-3">
                       <label>Gender: </label>
                        
                          <input class="form-check-input" type="radio" name="gender" value="Male">
                          <label class="form-check-label">
                            Male
                          </label>
                          <input class="form-check-input" type="radio" name="gender" value="Female">
                          <label class="form-check-label" >
                            Female
                          </label> 
                        </div>
                       </div>
                       <div class="form-group col-sm-3">
                         <label>Phone</label>
                         <input type="text" class="form-control" placeholder="Enter your phone" value="" name="phone">
                       </div>
                      </div>
                     <div class="form-row">
                       <div class="form-group col-xs-6">
                         <label>Email</label>
                         <input type="text" class="form-control" placeholder="Enter your Email" value="" name="email">
                       </div>
                       <div class="form-group col-xs-6">
                         <label>Address</label>
                         <input type="text" class="form-control" placeholder="Enter your Degree" value="" name="addr">
                       </div>
                     </div>
                     <div class="form-row">
                       <div class="form-group col-md-6">
                         <label>Department</label>
                         <input type="text" class="form-control" placeholder="Enter your Department" value="" name="dept">
                       </div>
                       <div class="form-group col-md-6">
                         <label>Degree</label>
                         <input type="text" class="form-control" placeholder="Enter your Degree" value="" name="deg">
                       </div>
                     </div>
                     <button type="submit" name="submit" class="btn btn-success btn-block">SUBMIT</button>
                    </form>
                </div>
              </div>
              <!-- <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Save changes</button>
              </div> -->
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </section> -->

>>>>>>> 8d75c6d562d9af8af676f0baecb060e8035f5bd5
<!--     <a href="emp_reg_form.php"><input type="button" name="btn" value="Add Employee" class="btn btn-primary btn-block btn-lg"></a>

  </div>

.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <?php include('include/right_sidebar.php') ?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>