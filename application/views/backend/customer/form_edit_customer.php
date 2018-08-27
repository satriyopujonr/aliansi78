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
                        Manajemen Data User
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> User</a></li>
                        <li class="active">managemen data user</li>
                    </ol>
                </section>
                <section class="content">
                <?php if($this->session->flashdata('message')){?>
                  <div class="alert alert-block alert-info">
                      <button type="button" class="close" data-dissmis="alert">
                        <i class="ace-icon fa fa-times"></i>
                            </button>
                            <strong class="green">
                              <?php echo $this->session->flashdata('message')?>
                                </strong>
                                </div>
                <?php }?>
                 <?php foreach ($data as $row) { ?>
                  <form role="form" action="<?php echo base_url(); ?>C_user/C_u_user/update" method="post">
                   <div class="row">
                      <div class="col-xs-12">
                          
                              <div class="box-header">
                                  <h3 class="box-title">Edit Data Customer</h3>
                                    </div>
                                    
                                      <div class="col-md-6">
                                <?= form_open('register') ?>

                                 <div class="form-group">
                                          <label for="gender">Status</label>
                                            <select name="rstuts" class="form-control">
                                            <?php
                                               $status=$row->stuts;
                                                if ($status=='0') { echo'
                                              <option value="0" selected>Tidak Aktif</option>
                                                <option value="1">Aktif</option>
                                                ';}
                                                else if ($status=='1') { echo'
                                                <option value="0">Tidak Aktif</option>
                                                <option value="1" selected>Aktif</option>
                                             '; }
                                             ?>
                                            </select>
                                         </div>
                                <div class="form-group">
                                    <label for="username">Nama Lengkap : </label>
                                    <input type="hidden" name="id_user" value="<?php echo $row->usr_id ?>">
                                    <input type="text" class="form-control" name="rname"  value="<?php echo $row->usr_nama ?>" required="">
                                </div>
                                <div class="form-group">
                                    <label for="username">User Name : </label>
                                    <input type="text" class="form-control" name="rusername" value="<?php echo $row->usr_name ?>" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password : </label>
                                    <input type="password" class="form-control" name="rpassword" value="<?php echo $row->usr_password ?>" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password">Email : </label>
                                    <input type="Email" class="form-control" name="remail" value="<?php echo $row->usr_email ?>" required="">
                                </div>
                                <div class="form-group">
                                    <label for="username">Alamat : </label>
                                    <input type="text" class="form-control" name="raddress" value="<?php echo $row->usr_address ?>" required="">
                                </div>
                                <div class="form-group">
                                    <label for="username">No Telp : </label>
                                    <input type="text" class="form-control" name="rtelp" value="<?php echo $row->usr_telp ?>" required="">
                                </div>
                                        <div class="form-group">
                                          <label for="gender">Jenis kelamin</label>
                                            <select name="rgender" class="form-control">
                                            <?php
                                               $jenis=$row->usr_gender;
                                                if ($jenis=='L') { echo'
                                              <option value="L" selected>Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                                ';}
                                                else if ($jenis=='P') { echo'
                                                <option value="L">Laki-laki</option>
                                                <option value="P" selected>Perempuan</option>
                                             '; }
                                             ?>
                                            </select>
                                         </div>



                
                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                    </form>
                                    </section>

                    </div>

<?php }?> 
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
