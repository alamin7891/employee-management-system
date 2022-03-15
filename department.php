<?php include('include/link.php'); ?>

<style>

</style>

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
                <h1>Department Information <small>Control panel</small></h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="#">Dashboard</li>
                    <li class="active">Department List</li>
                </ol>
            </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div>
                    
                </div>
                <div class="box">
                    <div>
                        <div class="pull-right" style="padding: 10px">
                            <button class="btn btn-success" data-toggle="modal" data-target="#modal-info">New Department</button>
                        </div>
                    </div>

                    <?php 
                        include('include/db_config.php');

                        $sql = "SELECT * FROM department";
                        $data = $conn->query($sql);
                    ?>

                    <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Department Code</th>
                                <th>Department Name</th>
                                <th>Created_by</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php while($row = $data-> fetch_object()){ ?>
                            <tr>
                                <td><?php echo $row->id; ?></td>
                                <td><?php echo $row->department_code; ?></td>
                                <td><?php echo $row->department_name; ?></td>
                                <td><?php echo $row->created_by; ?></td>
                                <td>  
                                    <a href="edit.php?stdid=<?php echo $row->id ?>"><input type="button" name="btn" value="Edit" class="btn btn-info btn-sm"></a> 
                                    <a href="delete.php?stdid=<?php echo $row->id ?>"><input type="button" name="btn" value="Delete" class="btn btn-danger btn-sm"></a>
                                </td>
                            </tr>
                            <?php 
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
          <!-- /.box -->
        </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->   


    <section class="content">
        <!-- <div class="row">
            <div class="col-xs-12">
                <div class="box-body">
                    <button type="button" class="btn btn-primary btn-block btn-lg" data-toggle="modal" data-target="#modal-info">Add Department </button>
                </div>
            </div>
        </div> -->
      
        <div class="modal modal-info fade" id="modal-info">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Add Department</h4>
                    </div>

                    <div class="modal-body">
                        <div class="container">
                            <!-- ADD EMPLOYEE PHP CODE -->
                            <?php  

                                if ($_SERVER['REQUEST_METHOD']=='POST') {
                                //print_r($_POST)
                                    include('include/db_config.php');
                                    extract($_POST);
                                    $sql = "INSERT INTO department(department_code, department_name) VALUES('$department_code', '$department_name')";

                                    $conn->query($sql);

                                    if($conn->affected_rows>0){ 
                                        header("Location: http://localhost/waliul-1267894/php_projects/employee-management-system/users.php"); 
                                    }
                                    //echo $conn->affected_rows; //Data gese kina check korar jonno
                                }
                            ?> 

                            <form action="" method="post">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label>Department Code</label>
                                        <input type="text" class="form-control" name="department_code">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label>Department Name</label>
                                        <input type="text" class="form-control" name="department_name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-2">
                                        <button type="submit" name="submit" class="btn btn-success">SUBMIT</button>
                                    </div>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.18
        </div>
        <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <?php include('include/right_sidebar.php') ?>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>