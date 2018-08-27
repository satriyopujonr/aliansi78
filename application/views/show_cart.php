<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ustora Demo</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url()?>tema/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url()?>tema/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url()?>tema/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url()?>tema/style.css">
    <link rel="stylesheet" href="<?= base_url()?>tema/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?= base_url()?>tema/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="<?= base_url()?>tema/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <?php $this->load->view('layout/navigation')?>





    <div class="site-branding-area">
        <div class="container">
            <div class="row">
              <?php  if($this->session->userdata('group')	!=	'1'  and $this->session->userdata('group')	!=	'2' ): ?>
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="<?php echo base_url(); ?>"><img src="<?= base_url()?>tema/img/logo.png"></a></h1>
                    </div>
                </div>



<?php endif;?>
            </div>
        </div>
    </div> <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
              <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                      <li><a href="<?= base_url()?>Home">Home</a></li>
                      <li class="active"><a href="<?= base_url()?>Home/cart">Cart</a></li>                      
                      <li><a href="<?= base_url()?>Home/cara">Cara Pembayaran</a></li>
                  </ul>
                </div>
            </div>
        </div>
    </div> <div class="slider-area"><div class="block-slider block-slider4"></div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->

    <!-- Page Content -->
    <div class="container">

       <hr>
        <!-- /.row -->
        <div class="row">
                        <!-- body items -->
            <!-- load products from table -->
             <div class="col-md-12">

                <div class="panel panel-default">
                    <div class="panel-heading">

							<h3>My Carts : <?=  $this->cart->total_items()?> <i class="fa fa-shopping-cart"></i></h3>
                    </div>
                    <div class="panel-body" width="100px">
						<div class="col-md-12">
							<hr>
								<div class="col-md-1">
								<h3>#</h3>
								</div>
								<div class="col-md-2">
								<h3>Product</h3>
								</div>
								<div class="col-md-2">
								<h3>Name</h3>
								</div>
								<div class="col-md-2">
								<h3>Quantity</h3>
								</div>
								<div class="col-md-3">
								<h3>Price</h3>
								</div>
								<div class="col-md-2">
								<h3>Subtotal</h3>
								</div>
						</div>
						<hr>
						<?php
							$i=0;
							foreach ($this->cart->contents() as $items):
							$i++;
						?>
						<div class="col-md-12">
							<hr>
							<div class="col-md-1">
								<?= $i ?>
							</div>
							<div class="col-md-2">
								<?= $items['name'] ?>
							</div>
							<div class="col-md-2">
								<?= $items['title'] ?>
							</div>
							<div class="col-md-2">
								<?= $items['qty'] ?>
							</div>
							<div class="col-md-3">
								<?php echo $this->cart->format_number( $items['price'] );?>
							</div>
							<div class="col-md-2">
								<?php echo $this->cart->format_number( $items['subtotal'] );?>
							</div>
							<hr>
						</div>
						<?php endforeach;?>

						<div class="col-md-12">
							<hr>
							<div class="col-md-9">
							<hr>
							</div>
							<div class="col-md-3">
								<h3>Total : <?php echo $this->cart->format_number( $this->cart->total() ); ?></h3>
							</div>
						</div>
						<div class="col-md-4"></div>
						<div class="col-md-6">
							<?=  anchor('home/clear_cart','Clear Cart',['class'=>'btn btn-danger','role'=>'button']) ?>
							<?=  anchor(base_url(),'Continue Shopping',['class'=>'btn btn-primary','role'=>'button']) ?>
							<?php

								$url_check	='<button class="btn btn-success type="submit">';
								$url_check	 .= 'Check Out'.'</button>';
							?>
							<?php if  ($this->cart->total_items()!=0):?>
							<?=  anchor('order',' Check Out',['class'=>'btn btn-success','role'=>'button']) ?>
							<?php else:?>
							<?= anchor(base_url(),$url_check); ?>
							<?php endif ;?>
						</div>
						<div class="col-md-2"></div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

        <!-- Features Section -->

        <!-- /.row -->

        

        <!-- Footer -->

    </div><br><br><br>
    <!-- /.container -->


    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&nbsp;</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
    <!-- jQuery -->
    <script src="<?php echo base_url('/assets/js/jquery.js');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
