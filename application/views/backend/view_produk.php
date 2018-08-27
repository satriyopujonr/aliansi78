  <?php
    require ('head.php');
    require ('navbar.php');
  ?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">


            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">

                    <div class="bs-docs-section">
                      <section class="content-header">
                    <h1>
                        Manajemen Data Produk
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> produk</a></li>
                        <li class="active">managemen data produk</li>
                    </ol>
                </section>
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
                <h4><i class=""></i><?=  anchor('admin/products/create','Tambah produk',['class'=>'btn btn-primary']) ?></h4>

                    <div class="row">

                      <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h2>Daftar Produk</h2>
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

                            <table id="datatable-buttons" class="table table-striped">
                              <thead>
                              <tr>
                                <th>Kategori</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Tahun</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            <!-- load products from table -->
                            <?php foreach ($products as $product ) : ?>
                              <tr>
                                <td><?=  $product->pro_name  ?></td>
                                <td><?=  $product->pro_title  ?></td>
                                <td><?=  $product->penulis  ?></td>
                                <td><?=  $product->penerbit  ?></td>
                                <td><?=  $product->tahun  ?></td>
                                <td><textarea rows="4" disabled><?=  $product->pro_description  ?></textarea></td>
                                <td>Rp<?=  $product->pro_price  ?></td>
                                <td>
                                  <a href="">
                                    <style>#g {width:50px;height:50px;}</style>
                                    <?php

                                      $product_image =['src'  =>'assets/uploads/'.$product->pro_image,

                                      'class'=>'img-responsive img-portfolio img-hover',
                                      'id'=>'g'
                                      ];
                                      echo img($product_image);
                                    ?>
                                </td>
                                <td>
                                  <?=  anchor('admin/products/edit/'.$product->pro_id,'Edit',['class'=>'btn btn-success btn-xs']) ?>

                                  <?=  anchor('admin/products/delete/'.$product->pro_id,'Delete',['class'=>'btn btn-danger btn-xs',
                                                                  'onclick'=>'return confirm(\'Are You Sure ? \')'
                                                                  ]) ?>


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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

        <!-- /page content -->
  <?php
    require ('footer.php');
  ?>
