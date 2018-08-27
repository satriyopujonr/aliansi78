<div class="header-area">
		<div class="container">
				<div class="row">
						<div class="col-md-8">
								<div class="user-menu">
									<ul>
											<?php  if($this->session->userdata('group')	==	'1'  or $this->session->userdata('group')	==	'2' ): ?>



										<li>
										<?php echo anchor('admin/invoices','Invoices List');?>
										</li>
										<li>
											<?php echo anchor('admin/products/reports','Product Report');?>
										</li>
										<li>
											<?php echo anchor('admin/products','Dashboard');?>
											<?php endif;?>
										</li>
											<?php if ($this->session->userdata('group')=='3'): ?>
										<li>
											<?php echo anchor('customer/payment_confirmation','Payment Confirmation');?>
										</li>
										<li>
											<?php echo anchor('customer/shopping_history','History');?>
										</li>
											<?php endif;?>

										<?php if ($this->session->userdata('username')): ?>
										<li>

											<?php echo ('<a>'.'Welcome '.$this->session->userdata('username').'</a>'); ?>
										</li>

										<li>
											<?php echo anchor('logout','Logout');?>
											<?php else:?>
										</li>
										<li>
											<?php echo anchor('login','Login / Sign Up');?>
											<?php endif;?>
										</li>
										

									</ul>
										<!-- <ul>
												<li><a href="<?= base_url()?>tema/#"><i class="fa fa-heart"></i> Wishlist</a></li>
												<li><a href="<?= base_url()?>tema/cart.html"><i class="fa fa-user"></i> My Cart</a></li>
												<li><a href="<?= base_url()?>tema/checkout.html"><i class="fa fa-user"></i> Checkout</a></li>
												<li><a href="<?= base_url()?>tema/#"><i class="fa fa-user"></i> Login</a></li>
										</ul> -->
								</div>
						</div>

						
				</div>
		</div>
</div>
