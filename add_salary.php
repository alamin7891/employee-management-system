<html>
<head>
    <?php include('include/link.php'); ?>
    <style>
        .table th{
            text-align: center;  
            vertical-align: middle;
        }
        .table tbody tr td input{
            border: none;
            width: 90%;
        }
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
            <h1>Employee Salary<small>Control panel</small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="#">Dashboard</li>
                <li class="active">Employee Salary</li>
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
                                $sql = "INSERT INTO salary_slip(employee_id, employee_name, department_code, department_name, designation, month, basic_salary, festival, meal_allowance, bonus, total_allowances, loan, house_rent, total_deduction, net_salary) VALUES('$employee_code', '$employee_name', '$department_code', '$department_name', '$designation', '$month', '$basic_salary', '$festival', '$meal_allowance', '$bonus', '$total_allowances', '$loan', '$house_rent', '$total_deduction', '$net_salary')";

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
                                                <select name="employee_name" class="form-control" id="emp_name">
                                                    <option value="">Please Select One</option>
                                                    <?php
                                                        while($row = $data->fetch_object()){
                                                    ?>
                                                    <option value="<?php echo $row->employee_id;?>"><?php echo $row->firstname . " ". $row->lastname; ?></option>
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
                                                <input type="text" name="designation" class="form-control" id="designation" readonly>
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
                                            <label for="month" class="col-sm-4 control-label">Month</label>
                                            <div class="col-sm-8">
                                                <select name="months" id="months" class="form-control"></select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">Sl No.</th>
                                                    <th rowspan="2">Basic Salary</th>
                                                    <th colspan="3">Allowances</th>
                                                    <th colspan="2">Deduction</th>
                                                </tr>
                                                <tr>
                                                    <th>Festival</th>
                                                    <th>Meal</th>
                                                    <th>Bonus</th>
                                                    <th>Loan/Advance</th>
                                                    <th>House Rent</th>
                                                </tr>
                                            </thead>
                                            <tbody id="cal-table">
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <label for="basic_salary" hidden></label>
                                                        <input type="text" name="basic_salary" id="basic_salary">
                                                    </td>
                                                    <td><input type="text" name="festival" class="calAllowance"></td>
                                                    <td><input type="text" name="meal_allowance" class="calAllowance"></td>
                                                    <td><input type="text" name="bonus" class="calAllowance"></td>
                                                    <td><input type="text" name="loan" class="calDeduction"></td>
                                                    <td><input type="text" name="house_rent" class="calDeduction"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="note">Note</label>
                                            <textarea name="note" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <table class="table table-strip net-salary-table">
                                            <tr>
                                                <th>Basic Salary</th>
                                                <td><input type="text" name="basic_salary" id="cal_basic_salary" readonly></td>
                                            </tr>
                                            <tr>
                                                <th>Total Allowance</th>
                                                <td><input type="text" name="total_allowances" id="total_allowances" readonly></td>
                                            </tr>
                                            <tr>
                                                <th>Total Deduction</th>
                                                <td><input type="text" name="total_deduction" id="total_deduction" readonly></td>
                                            </tr>
                                            <tr>
                                                <th>Net Salary</th>
                                                <td><input type="text" name="net_salary" id="net_salary" readonly></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div style="padding-right: 15px; padding-left: 15px">
                                        <button type="submit" class="btn btn-success">Create</button>
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

<script>
                                
    $(document).ready(function(){

        $(".district").hide();
        $("#emp_name").on("change", function(){
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
                    var basic_salary = $("#basic_salary").val();
                    $("#cal_basic_salary").val(basic_salary);
                    calculate();
                }
            });

        });

        $.getJSON('jsonfile/months.json', function(data) {
            $.each(data, function(key, value) {
                $("#months").append('<option name="' + value.abbr + '">' + value.name + '</option>');
            }); // close each()
        }); // close getJSON()

        $("#cal-table").on('input', '.calAllowance', function(){
            
            var cal_total_allowance = 0;
     
            $("#cal-table .calAllowance").each(function () {
                let get_textbox_value = $(this).val();
                if ($.isNumeric(get_textbox_value)) {
                    cal_total_allowance += parseFloat(get_textbox_value);
                }                  
            });
            $("#total_allowances").val(cal_total_allowance);
            calculate();
        });

        $("#cal-table").on('input', '.calDeduction', function(){
            var cal_total_deduction = 0;
            $("#cal-table .calDeduction").each(function () {
                let get_textbox_value = $(this).val();
                if ($.isNumeric(get_textbox_value)) {
                    cal_total_deduction += parseFloat(get_textbox_value);
                }                  
            });
            $("#total_deduction").val(cal_total_deduction);
            calculate();
        });

        function calculate(){
            
            let basicSalary = 0;
            let total_allowance = 0;
            let total_deduction = 0;
            
            let net_salary = 0;

            basicSalary = parseFloat($("#cal-table").find("#basic_salary").val());
            alert(basicSalary)
            total_allowance = parseFloat($(".net-salary-table").find("#total_allowances").val());
            total_deduction = parseFloat($(".net-salary-table").find("#total_deduction").val());
            net_salary = parseFloat(basicSalary + total_allowance - total_deduction);
            $('#net_salary').val(net_salary);
        }


    });
</script>
</html>

