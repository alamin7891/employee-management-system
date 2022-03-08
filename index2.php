<?php include('include/link.php') ?>
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">


  <?php 

    if(isset($_POST['login'])){
      include('include/db_config.php');

      $username = mysqli_real_escape_string($conn, $_POST['email']);
      $password = md5($_POST['password']);

      $sql = ("SELECT email, password FROM login WHERE email = '{$emal}' AND password = '{$password}'");

      $result = mysqli_query($conn, $sql) or die("Query failed");
      
      if(mysqli_num_rows($result) > 0 ){
        while($row = mysqli_fetch_assoc($result)){
          session_start();
          $_SESSION['username'] = $row['username'];
          $_SESSION['user_id'] = $row['username'];
          $_SESSION['username'] = $row['username'];

          header("Location: dashboard.php");
        }
      } else {
        echo '<b>Invalid user or password</b>';
      }

    }

   ?>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="dashboard.php"><b>User Sing up</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign up to start your session</p>

    <form action="dashboard.php" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign Up</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->



<!-- iCheck -->
<script src="assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>

