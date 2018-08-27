<?php 
    $pro_id                 = $product->pro_id;
if($this->input->post('is_submitted'))
{
        $pro_name           = set_value('pro_name');
        $pro_title          = set_value('pro_title');
        $penulis            = set_value('penulis');
        $penerbit           = set_value('penerbit');
        $tahun          = set_value('tahun');
        $pro_description    = set_value('pro_description');
        $pro_price          = set_value('pro_price');
        $pro_stock          = set_value('pro_stock');
}else{

        $pro_name           = $product->pro_name;
        $pro_title          = $product->pro_title;
        $penulis            = $product->penulis;
        $penerbit           = $product->penerbit;
        $tahun              = $product->tahun;
        $pro_description    = $product->pro_description;
        $pro_price          = $product->pro_price;
        $pro_stock          = $product->pro_stock;
    
}//end if   is_submitted
    
?>
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
                    <div class="row">
                      <div class="col-xs-12">
                          
    
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>
                                <i class="fa fa-fw fa-compass"></i>  Products Edit
                            </h4>
                        </div><!-- /..panel-heading -->
                        <div class="panel-body">
                        <div><?= validation_errors()?></div>
                        <?=  form_open_multipart('admin/products/edit/'.$pro_id,['class'=>'form-group']) ?>

                    

                            <div class="col-sm-4">
                                <div class="input-group">
                                    <div class="input-group-addon">Kategori</div>
                                    <input type="text" class="form-control" name="pro_name" placeholder="Kategori" value="<?= $pro_name ?>">
                                </div>
                            </div>
                            
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <div class="input-group-addon">Judul Buku</div>
                                    <input type="text" class="form-control" name="pro_title" placeholder="Judul Buku" value="<?= $pro_title ?>">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group">
                                    <div class="input-group-addon">Penulis</div>
                                    <input type="text" class="form-control" name="penulis" placeholder="penulis" value="<?= $penulis ?>">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <div class="input-group-addon">Penerbit</div>
                                    <input type="text" class="form-control" name="penerbit" placeholder="penerbit" value="<?= $penerbit ?>">
                                </div>
                            </div>
                        
                        <div class="col-sm-4">
                                <div class="input-group">
                                    <div class="input-group-addon">Tahun buku</div>
                                    <input type="text" class="form-control" name="tahun" placeholder="Tahun Buku" value="<?= $tahun ?>">
                                </div>
                            </div>


                            <div class="col-sm-6">
                          <div class="input-group-addon">Description</div>
                                        <div class="input-group col-sm-12">
                                    <textarea rows="4" class="form-control" name="pro_description" placeholder="Enter Product Description , Example : Dell INSPIRON Ram:2GB , AVG : 1 , CPU : 3200 Intel Core i5"><?= $pro_description ?></textarea>
                                </div>
                            </div>
                        </div>

                            <div class="col-sm-12"><hr></div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <div class="input-group-addon">Price</div>
                                    <input type="text" class="form-control" name="pro_price" placeholder="Enter Product Price" value="<?= $pro_price ?>">
                                    <div class="input-group-addon">Rp</div>
                                </div>
                            </div>
                            
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <div class="input-group-addon">Available Stock</div>
                                    <input type="text" class="form-control" name="pro_stock" value="<?= $pro_stock ?>">
                                </div>
                            </div>
                            
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <input type="file" name="userfile">
                                </div>
                            </div>
                            
                            <div class="col-sm-1">
                                <div class="input-group">
                                    <input type="hidden" name="is_submitted" value="1">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="input-group">
                                    
                                    <?=  anchor('admin/products','Cancel',['class'=>'btn btn-danger']) ?>
                                </div>
                            </div>
                            
                        
                        <?= form_close() ?>
                        </div><!-- /..panel-body -->
                    </div><!-- /..panel panel-default -->
                </div> 
                
            </div>
            <!-- /.row -->
            <hr>
            <!-- Footer -->
            <?php $this->load->view('layout/footer')?>
            
        </div>
        <!-- /.. container -->
        
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
