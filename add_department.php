<head>
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
            <h1>Department<small>Control panel</small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="#">Dashboard</li>
                <li class="active">Add Department</li>
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
                                include('include/db_config.php');
                                extract($_POST);
                                $sql = "INSERT INTO department(department_code, department_name) VALUES('$department_code', '$department_name')";

                                $conn->query($sql);

                                if($conn->affected_rows>0){  ?> 
                                    <script>
                                        alert("Successfully Added Information");
                                    </script>           
                                <?php 
                                }
                            }
                        ?> 

                    <!-- /.box-header -->
                        <div class="box-body">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Department Code</label>
                                        <input type="text" class="form-control" name="department_code">
                                    </div>

                                    <div class="form-group col-md-4">
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
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            <!-- /.col -->
            </div>
        <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
</body>

