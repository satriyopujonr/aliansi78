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
                        Manajemen Kategori
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>Produk</a></li>
                        <li class="active">managemen kategori</li>
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
                    <button class="btn"><a href="<?php echo base_url(); ?>C_kategori/C_f_kategori" class="text-center">Tambah</a></button>
                    <br><br>
                    <div class="row">
                        <div class="col-xs-12">
                           
                                <div class="box-header">
                                    <h3 class="box-title">Data Kategori</h3>
                                    </div>
                                    <div class="box-body table-responsive">
                                        <table id="example1" class="table table-borderd table-striped">
                                        <thead>
                                            <tr>
                                                <th width="30" align="center">No</th>
                                                <th>Nama Kategori</th>
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
                                                            <?php echo anchor('C_kategori/C_e_kategori/edit/'.$row->id_kategori,'Edit'); ?>
                                                            </a>
                                                            <a class="red" href="#"><i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            <?php echo anchor('C_kategori/C_h_kategori/hapus/'.$row->id_kategori,'hapus'); ?>
                                                            </a>
                                                        </div>
                                                    </td>
                                                        </tr>
                                                        <?php endforeach;?>
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
        <!-- /page content -->

        <?php
          require ('footer.php');
        ?>
