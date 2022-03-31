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
                                $sql = "INSERT INTO emp_leave(employee_code, employee_name, leave_type_code, leave_type, department_code, department, designation, start_date, end_date, total_days, comment) VALUES('$employee_code', '$employee_name', '$leave_type_code', '$leave_type',  '$department_code', '$department_name', '$designation', '$start_date', '$end_date', '$total_days', '$comment')";

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
                                                <select name="employee_code" class="form-control" id="employee_code">
                                                    <option value="">Please Select One</option>
                                                    <?php
                                                        while($row = $data->fetch_object()){
                                                    ?>
                                                    <option value="<?php echo $row->employee_id;?>"><?php echo $row->firstname . " ". $row->lastname; ?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                                <input type="hidden" name="employee_name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="designation" class="col-sm-4 control-label">Designation</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="designation" class="form-control" id="designation" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="start_date" class="col-sm-4 control-label">Start Date</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="start_date" id="startDate" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="total_days" class="col-sm-4 control-label">Total Days</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="total_days" id="totalDays" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="department_name" class="col-sm-4 control-label">Department Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="department_name" class="form-control" id="dep" readonly>
                                                <input type="hidden" name="department_code" id="dep_code">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="reason" class="col-sm-4 control-label">Reason</label>
                                            <div class="col-sm-8">
                                                <select name="leave_type_code" id="leave_type_code" class="form-control"></select>
                                                <input type="hidden" name="leave_type">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="end_date" class="col-sm-4 control-label">End Date</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="end_date" id="endDate" class="form-control">
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

    <script>
                                
    $(document).ready(function(){

        $("#employee_code").on("change", function(){
            $.ajax({
                type:'post',
                url:'getEmpInfo.php',
                data: 'id='+$(this).val(),
                success: function(value){
                    var data = value.split(",");
                    $("#dep_code").val(data[0]);
                    $("#dep").val(data[1]);
                    $("#designation").val(data[2]);
                    $("#basic_salary").val(data[3]);
                }
            });

        });

        $.getJSON('jsonfile/leave_type.json', function(data) {
            $("#leave_type_code").append('<option>' + "please Select One" + '</option>');
            $.each(data, function(key, value) {
                $("#leave_type_code").append('<option value="' + value.abbr + '">' + value.name + '</option>');
            }); // close each()
        }); // close getJSON()


        //$("#startDate").datepicker(); 
		$("#endDate").datepicker();

        //get current date
        var d = new Date()
        var month = d.getMonth()+1;
        var day = d.getDate();
        var currentDate = (month<10 ? '0' : '') + month + '/' +
            (day<10 ? '0' : '') + day + '/' +
            d.getFullYear();
        $("#startDate").val(currentDate);
         
        
        $("#endDate").on("change", function(){
            myfunc();
        });

        function myfunc(){
            var start= $("#startDate").datepicker("getDate");
    	    var end= $("#endDate").datepicker("getDate");
   		    var days = (end- start) / (1000 * 60 * 60 * 24);
            $("#totalDays").val(days);
       }

        $("#employee_code").on("click", function(){
			$("input[name = 'employee_name']").val($("#employee_code option:selected").text());
		});

        $("#leave_type_code").on("change", function(){
			$("input[name = 'leave_type']").val($('#leave_type_code option:selected').text());
		});
    });
</script>
</body>

