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
              <?php  if($this->session->userdata('group')   !=  '1'  and $this->session->userdata('group')  !=  '2' ): ?>
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
                      <li class="active"><a href="<?= base_url()?>Home">Home</a></li>
                      <li><a href="<?= base_url()?>Home/cart">Cart</a></li>                      
                      <li><a href="<?= base_url()?>Home/cara">Cara Pembayaran</a></li>
                  </ul>
                </div>
            </div>
        </div>
    </div> <div class="slider-area"><div class="block-slider block-slider4"></div>
            <!-- ./Slider -->
    </div> <!-- End slider area -->

<body>


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
								<h3>Payment Confirmation :</h3>  
						</div>
						<div class="panel-body" width="100px">
							
							
                        <?php if($this->session->flashdata('message')){?>
      <div class="alert alert-block alert-info">
                      <button type="button" class="close" data-dissmis="alert">
                        <i class="ace-icon fa fa-times"></i>
                            </button>
                        <?php echo $this->session->flashdata('message');?>
      </div>
     <?php }?>
							<div class="col-md-6">
							<?= form_open_multipart('customer/payment_confirmation/') ?>
								<div class="form-group">
									<label for="invoice_input">Invoice id : </label>
									<input type="text" class="form-control" name="invoice_id_input" value=<?=( $invoice_id != 0 ? $invoice_id:'')?> >
								</div>
								<div class="form-group">
									<label for="amount">Amount Transfered : </label>
									<input type="text" class="form-control" name="amount_input" >
								</div>
                                    <div class="form-group">
                                        <label for="amount">Foto bukti pembayaran : </label>
                                        <div class="input-group">
                                            <input type="file" name="userfile">
                                        </div>
                                    </div>
                                </div>

                                <br><br>


								<div class="form-group">
								<div class="col-md-2"></div>
								<div class="col-md-7">
									<button type="submit" class="btn btn-success">Confirm My Payment</button>
									<?=  anchor(base_url(),'Cancel',['class'=>'btn']) ?>
									
									</div>
								<div class="col-md-3">
									<?=  anchor('customer/shopping_history','Back to history',['class'=>'btn btn-default']) ?>
								</div>
								</div>
							<?= form_close() ?>
							</div>
							<div class="col-md-3"></div>
									
									
									
									
							</div>  
							
							
					</div>
					</div>  
			
			</div>
        <!-- /.row -->

        <!-- Features Section -->

        <!-- /.row -->
		</div>
        <hr>


    </div>
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
