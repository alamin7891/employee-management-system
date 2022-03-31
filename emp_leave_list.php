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
        Employee Leave List
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="#">Dashboard</li>
        <li class="active">Employee Leave List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-info">
                    Create Leave
                </button>
            </div>

             <?php 
                include('include/db_config.php');

                  $sql = "SELECT * FROM emp_leave";
                  $data = $conn->query($sql);
              ?>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>SL No.</th>
                        <th>ID</th>
                        <th>Emp Name</th>
                        <th>Department</th>
                        <th>Designation</th>
                        <th>Leave Type</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Total Days</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php 
                    $i = 1;
                  while($row = $data-> fetch_object()){
                      
                ?>
                <tbody>
                <tr>
                    <td><?php echo $i++; ?></td>
                  <td><?php echo $row->employee_code; ?></td>
                  <td><?php echo $row->employee_name; ?></td>
                  <td><?php echo $row->department; ?></td>
                  <td><?php echo $row->designation; ?></td>
                  <td><?php echo $row->leave_type; ?></td>
                  <td><?php echo $row->start_date; ?></td>
                  <td><?php echo $row->end_date; ?></td>
                  <td><?php echo $row->total_days; ?></td>
                  <td>  
                    <a href=""><input type="button" name="btn" value="Edit" class="btn btn-info btn-sm"></a> 
                    <a href=""><input type="button" name="btn" value="Delete" class="btn btn-danger btn-sm"></a>
                  </td>
                </tr>
                <?php 
                  }
                ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    

<!-- .content-wrapper -->
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