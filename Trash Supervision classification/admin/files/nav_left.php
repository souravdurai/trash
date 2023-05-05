<?php
	function nav($var) {
  ?>
<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/avatar5.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Administrator</p>

              <a href="#"><i class="fa fa-circle text-success"></i> </a>
            </div>
          </div>
          <!-- search form -->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
		  
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
			<li class="<?php if($var=='dashboard'){echo 'active';}?>">
              <a href="dashboard.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
			<li class="<?php if($var=='customer'){echo 'active';}?>">
              <a href="trash.php">
                <i class="fa fa-user"></i> <span>Trash</span> 
              </a>
            </li>
			<li class="treeview <?php if($var=='staff'){echo 'active';}?>">
              <a href="labour.php">
                <i class="fa fa-users"></i>
                <span>Labour</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="labour.php"><i class="fa fa-circle-o"></i> View Labour List</a></li>
               
              </ul>
            </li>
			<li class="treeview <?php if($var=='jobitem'){echo 'active';}?>">
              <a href="construction.php">
                <i class="fa fa-briefcase"></i>
                <span>Trash Inspector</span>
              </a>
             
            </li>
			<li class="<?php if($var=='order'){echo 'active';}?>">
              <a href="construction.php">
                <i class="fa fa-edit"></i> <span>Meter Tracking</span> 
              </a>
            </li>
			<li class="treeview <?php if($var=='material'){echo 'active';}?>">
              <a href="construction.php">
                <i class="fa fa-folder"></i>
                <span>Trash Pick Alert System</span>
              </a>
              
            </li>
			
			<li class="treeview <?php if($var=='schedule'){echo 'active';}?>">
              <a href="construction.php">
                <i class="fa fa-pie-chart"></i>
                <span>Public Complaint</span>
                <span class="label label-primary pull-right"></span>
              </a>
              
            </li>
			<li class="<?php if($var=='billing'){echo 'active';}?>">
              <a href="construction.php">
                <i class="fa fa-folder"></i> <span>Complaint Resolved Notification</span> 
              </a>
            </li>
			
			<li class="treeview <?php if($var=='report'){echo 'active';} ?>">
              <a href="construction.php">
                <i class="fa fa-pie-chart"></i>
                <span> Report Generation</span>
                <span class="label label-primary pull-right"></span>
              </a>
              
            </li>
          </ul>
		  
        </section>
        <!-- /.sidebar -->
      </aside>
<?php
	}
  ?>