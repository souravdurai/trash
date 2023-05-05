<?php ob_start();
	include "../include/db_connect.php";
	include "../include/session_connect.php";
	$emp_id=$_REQUEST['emp_id'];
	$sel=mysql_query("select * from staff where emp_id='$emp_id'");
	$sel_row=mysql_fetch_array($sel);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Trash Supervision | Employee</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../dist/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <link href="../dist/css/style.css" rel="stylesheet" type="text/css" />
    <link href="../dist/css/skins/_all-skins.css" rel="stylesheet" type="text/css" />

  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
       <?php include "nav_top.php";
			include "nav_left.php";
			nav("staff");
		?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Update Employee Details
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="../dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="../add_labour.php">Add Employee</a></li>
            <li><a href="../labour.php">Employee</a></li>
          </ol>
        </section>
		
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12 ">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Basic Detail</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
					<div class="part1">
					  <div class="box-body">
						<div class="form-group">
						  <label for="exampleInputEmail1">Staff Id</label>
						  <input type="text" name="emp_id" class="form-control" id="exampleInputEmail1" placeholder="Enter id" pattern=".{6}" title="Please Enter 6 digits" value="<?php echo $sel_row['emp_id']; ?>" autocomplete="off" required />
						</div>
						<div class="form-group">
						  <label for="exampleInputEmail1">Staff Name</label>
						  <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" value="<?php echo $sel_row['name']; ?>" autocomplete="off" required />
						</div>
						<div class="form-group">
						  <label for="exampleInputEmail1">Designation</label>
						  <input type="text" name="designation" class="form-control" id="exampleInputEmail1" placeholder="Enter Designation" value="<?php echo $sel_row['designation']; ?>" autocomplete="off" required />
						</div>
						<div class="form-group">
						  <label for="exampleInputPassword1">Trash Id</label>
							  <select class="form-control" name="trash_id" required>
								<?php
					$trash=mysql_query("select * from trash");
					while($trash_row=mysql_fetch_array($trash))
					{
						?>
					<option value="<?php echo $trash_row['trash_id'];?>"
					<?php if($sel_row['trash_id']==$trash_row['trash_id'])
														{
														echo "selected";
													}
												?>><?php echo $trash_row['trash_id'];?> </option>
					<?php
					}
					?>
							  </select>
						</div>
					<!--	<div class="form-group">
						  <label for="exampleInputPassword1">Bank Name</label>
							  <select class="form-control" name="bank_name" required>
								<?php
					/* $bank=mysql_query("select * from atm");
					while($bank_row=mysql_fetch_array($bank))
					{
						?>
					<option value="<?php echo $bank_row['bank_name'];?>"
					<?php if($sel_row['bank_name']==$bank_row['bank_name'])
														{
														echo "selected";
													}
												?>><?php echo $bank_row['bank_name'];?> </option>
					<?php
					} */
					?>
			
							  </select>
						</div>-->
					  </div><!-- /.box-body -->
					</div>
					<div class="part2">
					  <div class="box-body">
						<div class="form-group">
						  <label for="exampleInputPassword1">Mobile</label>
						  <input type="text" name="mobile" class="form-control" id="exampleInputPassword1" value="<?php echo $sel_row['mobile']; ?>" pattern="[789][0-9]{9}" maxlength="10" placeholder="Enter Mobile No"autocomplete="off" required />
						</div>
						
						<div class="form-group">
						  <label for="exampleInputPassword1">Address</label>
						  <textarea name="address" class="form-control" id="exampleInputPassword1" placeholder="Enter Address"><?php echo $sel_row['address']; ?></textarea>
						</div>
						<div class="form-group">
						  <label for="exampleInputEmail1">Email</label>
						  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" value="<?php echo $sel_row['email']; ?>" autocomplete="off" required />
						</div>
						<div class="form-group">
						  <label for="exampleInputEmail1">Password</label>
						  <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="*****" value="<?php echo $sel_row['password']; ?>" autocomplete="off" required />
						</div>
						
						
						
					  </div>
					</div>
					<div class="box-footer">
						<button type="submit" name="close" class="btn btn-danger pull-right mtop20" onclick="window.location.href='../labour.php'" >Close</button>
						
						<button type="submit" name="add" class="btn btn-primary pull-right mtop20  mright10">Update</button>
						
					</div>
				
				</form>
				<?php
					//Function for checking the selected value
						function check_selected($var1,$var2){
							if($var1==$var2)
								echo "selected=selected";
						}
						
					if(isset($_POST['add']))
					{
						extract($_POST);
							
							$update=mysql_query("update staff set name='$name',mobile='$mobile',address='$address',designation='$designation',emp_id='$emp_id',email='$email',trash_id='$trash_id',password='$password' where emp_id='$emp_id'");
								
							if($update)
								{
									
									echo "<script>location.href = '../labour.php';	</script>";
								}		
								else
								{
							 		echo "<script>alert('UPDATE AGAIN');</script>";
								}
							
					}
					if(isset($_POST['close']))
					{
						header("location:../labour.php");
					}
				?>
              </div><!-- /.box -->
			</div><!--/.col (left) -->
		   </div>   <!-- /.row -->
        </section><!-- /.content -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          
        </div>
        <strong>Copyright &copy; 2019 .</strong> All rights reserved.
      </footer>
      
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="../plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>
  </body>
</html>