<!DOCTYPE html>
<?php
   require ('head.php');
    require ('navbar.php');
  ?>

  <div class="right_col" role="main">
    <div class="">


      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Invoice Design <small>Sample user invoice design</small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <section class="content invoice">
                <!-- title row -->
                <div class="row">
                  <div class="col-xs-12 invoice-header">
                    <h1>
                                    <i class="fa fa-globe"></i> Invoice.
                                    <small class="pull-right">Tanggal Cetak: <?php echo date("d M Y");?></small>
                                </h1>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                  <div class="col-sm-4 invoice-col">
                    Dari
                    <address>
                                    <strong>Toko Aliansi</strong>
                                    <br>Kelompok 7 dan 8
                                    <br>UPN Veteran Jawa Timur
                                    <br>Email: ironadmin.com
                                </address>
                  </div>
                  <!-- /.col -->
                  <?php foreach ($invoice as $invoice_id ) : ?>
                  <div class="col-sm-4 invoice-col">
                    Kepada
                    <address>
                                    <strong><?= $invoice_id->usr_name ?></strong>
                                    <br>795 Freedom Ave, Suite 600
                                    <br>New York, CA 94107
                                    <br>Email: jon@ironadmin.com
                                </address>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                    <b>No Invoice : <?= $invoice_id->id ?></b>
                    <br>
                    <br>
                    <b>Due date:</b> <?= $invoice_id->due_date ?>
                    <br>
                    <b>Account:</b> 968-34567
                  </div>
                  	<?php endforeach; ?>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Table row -->
                <div class="row">
                  <div class="col-xs-12 table">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10%">Kode Produk</th>
                          <th style="width: 15%">Product</th>
                          <th>Serial #</th>
                          <th style="width: 30%">Description</th>
                          <th>Subtotal</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
        									$total = 0;
        									foreach ($orders as $order ) :
        									$subtotal = $order->qty * $order->price;
        									$total += $subtotal;
        								?>
        									<tr>
        										<td><?= $order->product_id ?></td>
        										<td><?= $order->product_type ?></td>
        										<td><?= $order->product_title ?></td>
        										<td><?= $order->qty ?></td>
        										<td><?= $order->price ?></td>
        										<td><?= $subtotal ?></td>

        									</tr>
        									<?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <!-- accepted payments column -->
                  <div class="col-xs-6">
                    <p class="lead">Payment Methods:</p>
                    <img src="images/visa.png" alt="Visa">
                    <img src="images/mastercard.png" alt="Mastercard">
                    <img src="images/american-express.png" alt="American Express">
                    <img src="images/paypal.png" alt="Paypal">
                    <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                      Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                    </p>
                  </div>
                  <!-- /.col -->
                  <div class="col-xs-6">
                    <p class="lead">Amount Due 2/22/2014</p>
                    <div class="table-responsive">
                      <table class="table">
                        <tbody>
                          <tr>
                            <th style="width:50%">Subtotal:</th>
                            <td>$250.30</td>
                          </tr>
                          <tr>
                            <th>Tax (9.3%)</th>
                            <td>$10.34</td>
                          </tr>
                          <tr>
                            <th>Shipping:</th>
                            <td>$5.80</td>
                          </tr>
                          <tr>
                            <th>Total:</th>
                            <td>Rp. <?=$total?>,00</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- this row will not appear when printing -->
                <div class="row no-print">
                  <div class="col-xs-12">
                    <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                    <a href="<?= base_url()?>admin/invoices/pdfe/<?= $invoice_id->id ?>"><button class="btn btn-default"><i class="fa fa-print"></i> Export PDF</button></a>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php
    require ('footer.php');
  ?>
