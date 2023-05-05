<?php ob_start();
	include "include/db_connect.php";
?>
<script>
		function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  
</script>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> Trash Supervision </title>
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
        <p class="login-box-msg">Change Your Previous Password</p>
        <form name="login-form" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="uname" placeholder="Enter Your Username" autocomplete="off" required />
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div><br/>
		  <div class="form-group has-feedback">
            <input type="email" class="form-control" name="email" placeholder="Enter Your Email" autocomplete="off" required />
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div><br/>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="pword" placeholder="Enter New Password" required id="pass1" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div><br/>
		  <div class="form-group has-feedback">
            <input type="password" class="form-control" name="cpword" placeholder="Confirm Password" id="pass2" onkeyup="checkPass();" required />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
		  <span id="confirmMessage" class="confirmMessage"></span>
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Reset </button>
            </div><!-- /.col -->
          </div>
        </form>
		<?php
			
				if(isset($_POST['login']))
				{
				extract($_POST);
				if($pword==$cpword){
					$update=mysql_query("update admin set pword='$pword' where uname='$uname' and email='$email'");
						if($update)
						{
							header("location:index.php");
						}
						else
						{
							echo "<script>alert('Invalid Username or Password')</script>";
						}						
					}
				}
		?>
        <br/><br/>

        <a href="index.php" style="color:red;">Go to Login</a><br>
        

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