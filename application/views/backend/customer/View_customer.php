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
                        Manajemen Data Customer
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> User</a></li>
                        <li class="active">managemen data Customer</li>
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
                          
                              <div class="box-header">
                                  <h3 class="box-title">Data Customer</h3>
                                    </div>
                                    <div class="box-body table-responsive">
                                      <table id="example1" class="table table-borderd table-striped">
                                        <thead>
                                          <tr>
                                              <th>No</th>
                                                <th>Username</th>
                                                <th>password</th>
                                                <th>email</th>
                                                <th>alamat</th>
                                                <th>telp</th>
                                                <th>gender</th>
                                                <th>status</th>
                                                <th>Aksi</th>
                                                </tr>
                                                </thead>
                                                </tbody>
                                               
                                                 <?php $no = $offset; ?>
                                                  <?php foreach ($results as $d): ?>
                                                  <?php $no++;?>
                                                <tr>
                                                    <td><?php echo $no?></td>
                                                    <td><?php echo $d->usr_name;?></td>
                                                    <td><?php echo $d->usr_password;?></td>
                                                    <td><?php echo $d->usr_email;?></td>
                                                    <td><?php echo $d->usr_address;?></td>
                                                    <td><?php echo $d->usr_telp;?></td>
                                                    <td><?php echo $d->usr_gender;?></td>
                                                    <td><?php echo $d->stuts;?></td>
                                                    <td>
   <div class='timeline-footer'>
      <a class="btn btn-primary btn-xs"<?php echo anchor('C_user/C_e_user/edit/'.$d->usr_id,'Edit'); ?></a>
      <a class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin ingin menghapus data ini? ');"<?php echo anchor('C_user/C_h_user/hapus/'.$d->usr_id,'Hapus'); ?></a>
   </div>
                                                    
                                                        </td>
                                                        </tr>
                                                        <?php endforeach;?>
                                                        </tbody>
                                                        </table>
                                                        <div class="col-md-6">
                                                          <nav>
                                                            <ul class="pagination pagination-sm">
                                                                <li><?php echo $this->pagination->create_links(); ?>
                                                            </ul>
                                                            </nav>
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

              <?php
          require ('footer.php');
        ?>
        <!-- /page content -->

