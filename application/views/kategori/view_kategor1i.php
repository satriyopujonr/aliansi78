<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
                <!-- bootstrap 3.0.2 -->
        
        <link href="/cv.berkatalamsejahtera/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="/cv.berkatalamsejahtera/tema/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="/cv.berkatalamsejahtera/tema/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="/cv.berkatalamsejahtera/tema/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="/cv.berkatalamsejahtera/tema/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="/cv.berkatalamsejahtera/tema/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="/cv.berkatalamsejahtera/tema/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="/cv.berkatalamsejahtera/tema/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="/cv.berkatalamsejahtera/tema/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
	</head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
         <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Berkat Alam Sejahtera
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Jane Doe - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
		<div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
                       <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="/cv.berkatalamsejahtera/tema/img/avatar5.png"class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Admin</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                                           
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo base_url() ?>Welcome2">
                                <i class="fa fa-home"></i> <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>C_user/c_v_user">
                                <i class="fa fa-user"></i> <span>User</span> 
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>C_profil/c_v_profil">
                                <i class="fa fa-shield"></i> <span>Profil</span> 
                            </a>
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url() ?>C_layanan/c_v_layanan">
                                <i class="fa  fa-rss-square"></i> <span>Layanan</span> 
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>C_partner/c_v_partner">
                                <i class="fa fa-sitemap"></i> <span>Partner</span> 
                            </a>
                        </li>
                        
                        <li class="treeview">
                       		 <a href="">
                        		<i class="fa fa-picture-o"></i> 
                                <span>Portofolio</span> 
                        		<i class="fa fa-angle-left pull-right"></i>
                        	 </a>
                        	<ul class="treeview-menu">
                        		<li>
                                	<a href="<?php echo base_url() ?>C_kategori_portofolio/c_v_kategori_portofolio">
                                	<i class="fa  fa-bars"></i>Kategori Portofolio
                                	</a>
                                </li>
                            	<li>
                                	<a href="<?php echo base_url() ?>C_portofolio/c_v_portofolio">
                                	<i class="fa fa-file"></i>Data Portofolio 
                                    </a>
                                </li>
                        	</ul>
                         </li>
                         <li class="treeview">
                       		 <a href="">
                        		<i class="fa fa-external-link"></i> <span>Berita</span> 
                                <i class="fa fa-angle-left pull-right"></i>                        		
                        	 </a>
                        	<ul class="treeview-menu">
                        		<li  class="active">
                                	<a href="<?php echo base_url() ?>C_kategori_berita/c_v_kategori_berita">
                                	<i class="fa fa-bars"></i>Kategori Berita
                                	</a>
                                </li>
                            	<li>
                                	<a href="<?php echo base_url() ?>C_berita/c_v_berita">
                                	<i class="fa fa-file"></i>Data Berita 
                                    </a>
                                </li>
                        	</ul>
                         </li>
                        <li>
                            <a href="<?php echo base_url() ?>C_kontak/c_v_kontak">
                                <i class="fa fa-phone-square"></i> <span>Kontak</span> 
                            </a>
                        </li>
                        </li>
                        </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Manajemen Kategori Berita
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Berita</a></li>
                        <li class="active">managemen kategori berita</li>
                    </ol>
                </section>
                <section class="content">
                <?php if($this->session->flashdata('message')){?>
                	<div class="alert alert-block alert-info">
                    	<button type="button" class="close" data-dissmis="alert">
                    		<i class="ace-icon fa fa-times"></i>
                            </button>
                            <strong class="green">
                            	<?php echo $this->session->flashdata('message')?>
                                </strong>
                                </div>
                <?php }?>
                	<button class="btn"><a href="<?php echo base_url(); ?>C_kategori_berita/C_f_kategori_berita" class="text-center">Tambah</a></button>
                    <br><br>
                    <div class="row">
                    	<div class="col-xs-12">
                        	<div class="box">
                            	<div class="box-header">
                                	<h3 class="box-title">Data Kategori Berita</h3>
                                    </div>
                                    <div class="box-body table-responsive">
                                    	<table id="example1" class="table table-borderd table-striped">
                                        <thead>
                                        	<tr>
                                            	<th width="30" align="center">No</th>
                                                <th>Nama Kategori Berita</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                                </tbody>
                                                <?php
												$i=1;
												foreach ($data as $row) :?>
                                                <tr>
                                                	<td class="center"><?php echo $i++;?></td>
                                                    <td><?php echo $row->nama_kategori;?></td>  
                                                    <td>
														<div class="hidden-sm hidden-xs action-button">
                                                        	<a class="green" href="#"><i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            <?php echo anchor('c_kategori_berita/c_e_kategori_berita/edit/'.$row->id_kategori,'Edit'); ?>
                                                            </a>
                                                            <a class="red" href="#"><i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            <?php echo anchor('c_kategori_berita/c_h_kategori_berita/hapus/'.$row->id_kategori,'hapus'); ?>
                                                            </a>
                                                        </div>
                                                    </td>
                                                        </tr>
                                                        <?php endforeach;?>
                                                        </tbody>
                                                        </table>
                                                        
                                                        
                                                       
                                                    
                                                    
                                                    
                                      

                <!-- Main content -->
                
           <!-- /.right-side -->
        </div><!-- ./wrapper -->
         <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="/cv.berkatalamsejahtera/tema/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="/cv.berkatalamsejahtera/tema/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="/cv.berkatalamsejahtera/tema/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="/cv.berkatalamsejahtera/tema/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="/cv.berkatalamsejahtera/tema/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="/cv.berkatalamsejahtera/tema/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="/cv.berkatalamsejahtera/tema/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="/cv.berkatalamsejahtera/tema/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="/cv.berkatalamsejahtera/tema/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="/cv.berkatalamsejahtera/tema/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="/cv.berkatalamsejahtera/tema/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="/cv.berkatalamsejahtera/tema/js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="/cv.berkatalamsejahtera/tema/js/AdminLTE/dashboard.js" type="text/javascript"></script>        

		 </body>
         </html>