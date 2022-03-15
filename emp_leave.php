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
            <h1>Employee Leave<small>Control panel</small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="#">Dashboard</li>
                <li class="active">Apply Employee Leave</li>
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
                            include('include/db_config.php');
                            $sql = "SELECT * FROM empinfo";
                            $data = $conn->query($sql);
                        ?>

                        <?php 
                            if ($_SERVER['REQUEST_METHOD']=='POST') {
                                include('include/db_config.php');
                                extract($_POST);
                                $sql = "INSERT INTO emp_leave(employee_code, employee_name, reason, department_code, department, designation, start_date, end_date, total_days, comment) VALUES('$employee_code', '$employee_name', '$reason', '$department_code', '$department_name', '$designation', '$start_date', '$end_date', '$total_days', '$comment')";

                                $conn->query($sql);

                                if($conn->affected_rows>0){  ?> 
                                    <script>
                                        alert("Successfully Applied");
                                    </script>           
                                <?php 
                                }
                            }
                        ?>

                        

                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="employee_name" class="col-sm-4 control-label">Employee Name</label>
                                            <div class="col-sm-8">
                                                <select name="employee_name" class="form-control">
                                                    <option value="">Please Select One</option>
                                                    <?php
                                                        while($row = $data->fetch_object()){
                                                    ?>
                                                    <option value="<?php echo $row->id;?>"><?php echo $row->firstname . " ". $row->lastname; ?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                                <input type="hidden" name="employee_code">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="designation" class="col-sm-4 control-label">Designation</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="designation" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="start_date" class="col-sm-4 control-label">Start Date</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="start_date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="total_days" class="col-sm-4 control-label">Total Days</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="total_days" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="department_name" class="col-sm-4 control-label">Department Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="department_name" class="form-control">
                                                <input type="hidden" name="department_code">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="reason" class="col-sm-4 control-label">Reason</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="reason" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="end_date" class="col-sm-4 control-label">End Date</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="end_date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="comment" class="col-sm-4 control-label">Comment</label>
                                            <div class="col-sm-8">
                                                <textarea name="comment" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div style="padding-right: 15px; padding-left: 15px">
                                        <button type="submit" class="btn btn-success">Apply</button>
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

