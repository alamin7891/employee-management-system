
<?php 
    include('include/db_config.php');

    $id = $_POST['id'];

    $sql = "SELECT * FROM empinfo WHERE employee_id = '$id'";
    $result = $conn->query($sql);

    $row = $result->fetch_array();

    $dep_code = $row['department_code'];
    $dep = $row['department'];
    $desig = $row['designation'];
<<<<<<< HEAD
    $salary = $row['salary'];
    
    echo $dep_code.",".$dep.",".$desig.",".$salary;
=======
    $basic_salary = $row['salary'];
    
    echo $dep_code.",".$dep.",".$desig.",".$basic_salary;
>>>>>>> db3485be30a96784a8b411d37c21b8ec1c521ed0

    

?>
