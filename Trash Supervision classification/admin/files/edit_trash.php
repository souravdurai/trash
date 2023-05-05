<?php ob_start();
	include "../include/db_connect.php";
	include "../include/session_connect.php";
	$tid=$_REQUEST['tid'];
	$sel=mysql_query("select * from trash where tid='$tid'");
	$sel_row=mysql_fetch_array($sel);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Trash Supervision | Trash</title>
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
			nav("customer");
		?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Update Trash Details
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="../dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="../add_trash.php">Add Trash</a></li>
            <li><a href="../trash.php">Trash</a></li>
          </ol>
        </section>
		
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class=" col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Basic Detail</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
					<div class="part1">
					  <div class="box-body">
						
						<!--<div class="form-group">
						  <label for="exampleInputEmail1">Bank Name</label>
						  <input type="text" name="bank_name" class="form-control" id="exampleInputEmail1" placeholder="Enter bank name" autocomplete="off" value="<?php //echo $sel_row['bank_name']; ?>" required />
						</div>-->
						<div class="form-group">
						  <label for="exampleInputEmail1">Trash Id</label>
						  <input type="text" name="trash_id" class="form-control" pattern=".{6}" placeholder="Enter Trash Id" title="Please Enter 6 digits" value="<?php echo $sel_row['trash_id']; ?>" autocomplete="off" required />
						</div>
						<div class="form-group">
						  <label for="exampleInputEmail1">City</label>
						  <input type="text" name="city" class="form-control" id="exampleInputEmail1" placeholder="Enter City" value="<?php echo $sel_row['city']; ?>" autocomplete="off" required />
						</div>
						<div class="form-group">
						  <label for="exampleInputEmail1">Street</label>
						  <input type="text" name="street" class="form-control" id="exampleInputEmail1" placeholder="Enter Street" value="<?php echo $sel_row['street']; ?>" autocomplete="off" required />
						</div>
						
					  </div><!-- /.box-body -->
					</div>
					<div class="part2">
					  <div class="box-body">
						<div class="form-group">
						  <label for="exampleInputEmail1">Land Mark</label>
						  <input type="text" name="land_mark" class="form-control" id="exampleInputEmail1" placeholder="Enter Land Mark" value="<?php echo $sel_row['land_mark']; ?>" autocomplete="off" required />
						</div>
						<div class="form-group">
						  <label for="exampleInputPassword1">Address</label>
						  <textarea name="address" class="form-control" id="exampleInputPassword1" placeholder="Enter Address"><?php echo $sel_row['address']; ?></textarea>
						</div>
						<div class="form-group">
						  <label for="exampleInputEmail1">Photo</label>
						  <img src="../move/trash/<?php echo $sel_row['photo'];?>" width="100" height="100" />
						  <input type="hidden" value="<?php echo $sel_row['photo'];?>" name="pname" />
						  <input type="file" name="photo" class="form-control" id="exampleInputEmail1" value="<?php echo $sel_row['photo']; ?>" autocomplete="off"  />
						</div>
						
					  </div>
					</div>
					<div class="box-footer">
						<button type="submit" name="close" class="btn btn-danger pull-right mtop20" onclick="window.location.href='trash.php'" >Close</button>
						
						<button type="submit" name="add" class="btn btn-primary pull-right mtop20  mright10">Update</button>
						
					</div>
				
				</form>
				<?php
					if(isset($_POST['add']))
					{
						extract($_POST);
						if(empty($photo))
				{
					$photo=$_POST['pname'];
				}
				else
				{
					$source=$_FILES['photo']['name'];
					$destination="../move/trash/".$photo;
					$move=move_uploaded_file($source,$destination);
				}

							$update=mysql_query("update trash set trash_id='$trash_id',city='$city',street='$street',land_mark='$land_mark',address='$address',photo='$photo' where tid='$tid'");
								
							if($update)
								{
									
									echo "<script>location.href = '../trash.php';	</script>";
								}		
								else
								{
							 		echo "<script>alert('UPDATE AGAIN');</script>";
								}
							
					}
					if(isset($_POST['close']))
					{
						header("location:../trash.php");
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