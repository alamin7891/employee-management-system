
<?php 
    include('include/db_config.php');

    $id = $_POST['id'];

    $sql = "SELECT * FROM empinfo WHERE employee_id = '$id'";
    $result = $conn->query($sql);

    $row = $result->fetch_array();

    $dep_code = $row['department_code'];
    $dep = $row['department'];
    $desig = $row['designation'];
    $salary = $row['salary'];
    
    echo $dep_code.",".$dep.",".$desig.",".$salary;

    

?>
