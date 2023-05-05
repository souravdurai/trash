<?php ob_start();
	include "include/db_connect.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> Trash Supervision</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="index2.html"><b>Admin</b> Panel</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form name="login-form" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="uname" placeholder="Username" autocomplete="off" autofocus required />
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div><br/>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="pword" placeholder="Password" required />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div><br/>
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
              <a href="../index.php"  class="btn btn-info btn-block btn-flat">Home</a>
            </div><!-- /.col -->
          </div>
        </form>
		<?php
				if(isset($_POST['login']))
				{
				extract($_POST);
				
				$qry=mysql_query("select * from admin where uname='$uname' && pword='$pword'");
				
				$n=mysql_num_rows($qry);									
						if($n==1)
						{
						
						$row=mysql_fetch_array($qry);
						$uid=$row['admin_id'];
						
						session_start();
						$_SESSION['admin_id']=$uid;
						
						header("location:dashboard.php");
						}
						else
						{
						echo "Invalid Username and Password";
						}
				
				
				}
		?>
        <br/><br/>

        <a href="forget.php" style="color:red;">I forgot my password</a><br>
        

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>