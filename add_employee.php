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

               <!-- ADD EMPLOYEE PHP CODE -->
            <?php 
            if ($_SERVER['REQUEST_METHOD']=='POST') {
              //print_r($_POST)
              include('include/db_config.php');
              extract($_POST);
              $sql = "INSERT INTO empinfo(employee_id, firstname, lastname, gender, phone, email, address, department_code, department, designation, salary, degree) VALUES('$employee_id', '$fname', '$lname', '$gender','$phone', '$email','$addr', '$department_code', '$department', '$designation', '$salary', '$deg')";

              $conn->query($sql);

              if(($conn->affected_rows) == 1){
                  echo '<h4 class="alert alert-success text-center" role="alert">Successfully Added!</h4>';
              }else{
                  echo '<h4 class="alert alert-warning text-center w-50" role="alert">Something went wrong!</h4>';
              }
            }
          ?>

          <?php
              include('include/db_config.php');
              $sql = "SELECT * FROM department";
              $data = $conn->query($sql);
          ?>

            <!-- /.box-header -->
            <div class="box-body">
               <form action="" method="post">
               <div class="form-row">
                     <div class="form-group offset-md-6 col-md-12">
                       <label>Employee ID</label>
                       <input type="text" class="form-control" name="employee_id" style="width: 48.5%">
                     </div>
                 </div>
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
                     <label for="department">Department*</label>
                     <select name="department" class="form-control">
                        <option value="">Please Select One</option>
                        <?php
                            while($row = $data->fetch_object()){
                        ?>
                        <option value="<?php echo $row->department_code;?>"><?php echo $row->department_name; ?></option>
                        <?php
                          }
                        ?>
                    </select>
                    <input type="hidden" name="department_code">
                   </div>
                   <div class="form-group col-md-6">
                     <label>Degree</label>
                     <input type="text" class="form-control" placeholder="Enter your Degree" value="" name="deg">
                   </div>
                 </div>

                 <div class="form-row">
                   <div class="form-group col-xs-6">
                     <label for="designation">Designation</label>
                     <input type="text" class="form-control" name="designation">
                   </div>
                   <div class="form-group col-xs-6">
                     <label>Salary</label>
                     <input type="number" class="form-control" name="salary">
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