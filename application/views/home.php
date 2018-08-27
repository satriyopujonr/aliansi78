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




                  <div class="col-sm-6">
                    <div class="shopping-item">




                      <?php
                      $url_order	 = 'Selesai Belanja';
                      $url_order	.=' </a> ';
                      ?>
                      <?php if  ($this->cart->total_items()!=0):?>
                      <?= anchor('order',$url_order); ?>
                      <?php else:?>
                      <?= anchor(base_url(),$url_order); ?>
                      <?php endif ;?>

                      <!-- <a href="#">Total - <span class="cart-amunt">Rp. <?= $this->cart->total_items(); ?>,00</span> <i class="fa fa-shopping-cart"></i> </a> -->

                    </div>

                      <div class="shopping-item">
                        <?php
    											$url_cart	 = 'Jumlah Barang : ';
    											$url_cart	.=$this->cart->total_items().' </a>';
    										?>
    										<?= anchor('home/cart',$url_cart); ?>




                        <!-- <a href="#">Total - <span class="cart-amunt">Rp. <?= $this->cart->total_items(); ?>,00</span> <i class="fa fa-shopping-cart"></i> </a> -->

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

   

    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title"></h2>
                        <div class="product-carousel">


                                          <!-- body items -->
                              <!-- load products from table -->
                  			<?php foreach ($products as $product ) : ?>

                          <div class="single-product">
                              <div class="product-f-image">
                                <a href="">

                                  <?php

                                    $product_image =['src'	=>'assets/uploads/'.$product->pro_image,
                                    'alt'=>'""',
                                    'id'=>'g'
                                    ];
                                    echo img($product_image);
                                  ?>
                                </a>
                                  <div class="product-hover">
                                    <?php  if($this->session->userdata('group')	!=	'1'  and $this->session->userdata('group')	!=	'2' ): ?>
                                      <?=  anchor('home/add_to_cart/'.$product->pro_id,'Beli',['class'=>'add-to-cart-link']) ?>

                                    
                                  </div>
                              </div>

                              <h2><?=  $product->pro_name  ?> - <?=  $product->pro_title  ?></a></h2>

                              <div class="product-carousel-price">
                                  <ins>Rp. <?=  $product->pro_price  ?>  ,00</ins> <del>Rp 15.000,00</del>
                              </div>

                          </div>







                  						<?php else:?>
                  						<?=  anchor('admin/products/edit/'.$product->pro_id,'Edit',['class'=>'btn btn-success btn-xs']) ?>
                  						<?php  if($this->session->userdata('group')	==	'1' ): ?>
                  						<?=  anchor('admin/products/delete/'.$product->pro_id,'Delete',['class'=>'btn btn-danger btn-xs',
                  							'onclick'=>'return confirm(\'Are You Sure ? \')'
                  						]) ?>
                  						<?php else:?>
                  						<?=  anchor('admin/products/delete/','Delete',['class'=>'btn btn-danger btn-xs ','data-toggle'=>'button',
                  							'onclick'=>'return confirm(\'Sorry You Cant Delete it , Should Be Admin ! \')'
                  						]) ?>
                  						<?php endif;?>
                  						<?php endif;?>


                  			<?php endforeach; ?>





                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->

    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
 

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

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="<?= base_url()?>tema/js/owl.carousel.min.js"></script>
    <script src="<?= base_url()?>tema/js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="<?= base_url()?>tema/js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <script src="<?= base_url()?>tema/js/main.js"></script>

    <!-- Slider -->
    <script type="text/javascript" src="<?= base_url()?>tema/js/bxslider.min.js"></script>
	<script type="text/javascript" src="<?= base_url()?>tema/js/script.slider.js"></script>
  </body>
</html>
