<?php
  $id = $_GET['stdid'];
?>

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
        Edit Employee Data
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Employee List</li>
        <li class="active">Edit Employee</li>
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

            <?php 
                include('include/db_config.php');

              $sql = "SELECT * FROM empinfo where id='$id'";
              $data = $conn->query($sql);
              $row= $data->fetch_object();

                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    extract($_POST);
                    // UPDATE `students` SET `id`='[value-1]',`name`='[value-2]',`email`='[value-3]',`phone`='[value-4]',`gender`='[value-5]' WHERE 1

                    $sql = ("UPDATE empinfo SET firstname='$fname', lastname='$lname', email='$email', gender='$gender', department='$dept', degree='$deg', phone='$phone', address='$addr' WHERE id='$id'");
                    $conn->query($sql);
                    if(($conn->affected_rows) == 1){
                        echo '<h4 class="alert alert-success text-center" role="alert">Successfully updated!</h4>';
                    }else{
                        echo '<h4 class="alert alert-warning text-center w-50" role="alert">Something went wrong!</h4>';
                    }
                }

            ?>

           <!-- /.box-header -->
            <div class="box-body">
              <div class="container">
                 <form action="" method="post">
                     <div class="form-row">
                       <div class="form-group col-lg-6">
                         <label>First Name</label>
                         <input type="text" class="form-control" placeholder="Enter first name" value="<?php echo $row->firstname;?>" name="fname">
                       </div>

                       <div class="form-group col-lg-6">
                         <label>Last Name</label>
                         <input type="text" class="form-control" placeholder="Enter last name" value="<?php echo $row->lastname;?>" name="lname">
                       </div>
                     </div>
                     <div class="form-row">
                       <div class="form-group col-xs-6">
                       <label>Gender</label>
                        <?php if($row->gender == 'Male'){
                          ?>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" value="Male" checked>
                          <label class="form-check-label">
                            Male
                          </label>
                          <input class="form-check-input" type="radio" name="gender" value="Female">
                          <label class="form-check-label">
                            Female
                          </label>   
                          <?php 
                            } elseif($row->gender == 'Female'){

                            ?>
                          <input class="form-check-input" type="radio" name="gender" value="Male">
                          <label class="form-check-label">
                            Male
                          </label>
                          <input class="form-check-input" type="radio" name="gender" value="Female" checked>
                          <label class="form-check-label" >
                            Female
                          </label>     
                          <?php 
                            } 
                          ?>   
                        </div>
                       </div>
                       <div class="form-group col-xs-6">
                         <label>Phone</label>
                         <input type="text" class="form-control" placeholder="Enter your phone" value="<?php echo $row->phone;?>" name="phone">
                       </div>
                     </div>
                     <div class="form-row">
                       <div class="form-group col-xs-6">
                         <label>Email</label>
                         <input type="text" class="form-control" placeholder="Enter your Email" value="<?php echo $row->email;?>" name="email">
                       </div>
                       <div class="form-group col-xs-6">
                         <label>Address</label>
                         <input type="text" class="form-control" placeholder="Enter your Degree" value="<?php echo $row->address;?>" name="addr">
                       </div>
                     </div>
                     <div class="form-row">
                       <div class="form-group col-md-6">
                         <label>Department</label>
                         <input type="text" class="form-control" placeholder="Enter your Department" value="<?php echo $row->department;?>" name="dept">
                       </div>
                       <div class="form-group col-md-6">
                         <label>Degree</label>
                         <input type="text" class="form-control" placeholder="Enter your Degree" value="<?php echo $row->degree;?>" name="deg">
                       </div>
                     </div>
                     <a href=""><button type="submit" name="submit" class="btn btn-primary active">Update</button></a>
                     <a href="users.php"  class="btn btn-info">Employee List</a>
                    </form>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  </div>
  <!-- /.content-wrapper -->
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
<!-- ./wrapper -->

