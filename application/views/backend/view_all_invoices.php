<?php
   require ('head.php');
    require ('navbar.php');
  ?>


  <div class="right_col" role="main">
    <div class="">

      <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <section class="content">
                <?php if($this->session->flashdata('message')){?>
                  <div class="alert alert-block alert-info">
                      <button type="button" class="close" data-dissmis="alert">
                        <i class="ace-icon fa fa-times"></i>
                            </button>

                              <?php echo $this->session->flashdata('message')?>
                                </strong>
                                </div>
                <?php }?>
              </section>
                <div class="x_title">
                  <section class="content-header">
                <h1>
                    Manajemen Data Laporan Penjualan
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> laporan</a></li>
                    <li class="active">managemen data laporan</li>
                </ol>
                </section>

            

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Kode Invoice</th>
                        <th>ID Pemesan</th>
                        <th>Nama Pemesan</th>
                        <th>Tanggal Pesan</th>
                        <th>Status Bayar</th>
                        <th>Bukti Pembayaran</th>

                        <th>Action</th>
                      </tr>
                    </thead>


                    <tbody>
                      <?php foreach ($invoices as $invoice ) : ?>
      									<tr>
      										<td><?=  $invoice->id  ?></td>
      										<td><?=  $invoice->usr_id  ?></td>
      										<td><?=  $invoice->usr_name  ?></td>
      										<td><?=  $invoice->due_date  ?></td>
                          <td><?=  $invoice->status  ?></td>

                            <td>
                                  
                                </td>


      										<?php if($invoice->status == 'confirmed'):?>
      										<td><?=  anchor('admin/invoices/detail/'.$invoice->id,'Details',['class'=>'btn btn-success btn-xs']) ?>
      										<?php else:?>
      										<td><?=  anchor('admin/invoices/detail/'.$invoice->id,'Details',['class'=>'btn btn-primary btn-xs']) ?>
      										<?php endif;?>
      										</td>
      									</tr>
      									<?php endforeach; ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


            <?php
              require ('footer.php');
            ?>







			<!-- /.row -->
