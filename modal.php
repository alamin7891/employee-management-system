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
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Employee</h3>
            </div>
            <div class="box-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                ADD
              </button>
            </div>
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
                     <button type="submit" name="submit" class="btn btn-primary active">Update</button>
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
                <h4 class="modal-title">Info Modal</h4>
              </div>
              <div class="modal-body">
                <form>
                   <div class="form-row">
                     <div class="form-group col-md-6">
                       <label for="inputEmail4">First Name</label>
                       <input type="email" class="form-control" id="inputEmail4" placeholder="Enter first name">
                     </div>
                     <div class="form-group col-md-6">
                       <label for="inputPassword4">Last Name</label>
                       <input type="password" class="form-control" id="inputPassword4" placeholder="Enter last name">
                     </div>
                   <div class="form-group">
                     <label for="inputAddress">Email</label>
                     <input type="text" class="form-control" id="inputAddress" placeholder="Enter your email">
                   </div>
                   </div>
                   <div class="form-row">
                     <div class="form-group col-md-6">
                     <label for="inputAddress">Gender</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                          Male
                        </label>
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                          Female
                        </label>
                      </div>
                     </div>
                     <div class="form-group col-md-6">
                       <label for="inputPassword4">Phone</label>
                       <input type="password" class="form-control" id="inputPassword4" placeholder="Enter your phone">
                     </div>
                   </div>
                   <div class="form-row">
                     <div class="form-group col-md-6">
                       <label for="inputCity">Department</label>
                       <input type="text" class="form-control" id="inputCity" placeholder="Enter your Department">
                     </div>
                     <div class="form-group col-md-6">
                       <label for="inputCity">Degree</label>
                       <input type="text" class="form-control" id="inputCity" placeholder="Enter your Degree">
                     </div>
                   </div>
                   <div class="form-group">
                     <div class="form-check">
                       <label for="inputCity">Address</label>
                       <input type="text" class="form-control" id="inputCity" placeholder="Enter your Address">
                     </div>
                   </div>
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </section>
    <!-- /.content -->
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

