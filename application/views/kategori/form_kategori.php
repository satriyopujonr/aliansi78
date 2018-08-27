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
                        Tambah kategori
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Produk</a></li>
                        <li class="active">tambah kategori</li>
                    </ol>
                </section>
                <section class="content">
                <?php if($this->session->flashdata('message')){?>
                    <div class="alert alert-block alert-info">
                        <button type="button" class="close" data-dissmis="alert">
                            <i class="ace-icon fa fa-times"></i>
                            </button>
                            <strong class="White">
                                <?php echo $this->session->flashdata('message')?>
                                </strong>
                                </div>
                                <?php }?>
                                <form role="form" action="<?php echo base_url(); ?>C_kategori/C_t_kategori/simpan" method="post" enctype="multipart/form-data" >
                                    <div class=box-body">
                                        <div class="form-group">
                                            <label for="exampleInputNamakategoriberita">Nama Kategori</label>
                                            <input type="text" name="nama_kategori" class="form-control" id="exampleInputNamakategoriberita" placeholder="Nama Kategori" required="">
                                        </div>     
                                   </div>
                                   <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                    </form>
                                    </section>
                                                  

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
