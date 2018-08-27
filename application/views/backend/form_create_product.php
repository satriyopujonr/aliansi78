<?php
  require ('head.php');
  require ('navbar.php');
?>

<div class="right_col" role="main">
  <div class="">



    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Tambah Produk</small></h2>

                <div class="clearfix"></div>
              </div>

              <div class="container">
          			<!-- /.row -->
          			<div class="row">
          				<!-- body items -->

          				<div class="col-md-12">
          					<div class="panel panel-default">
          						<div class="panel-heading">

          						<div class="panel-body">
          						<div><?= validation_errors()?></div>
          						<?=  form_open_multipart('admin/products/create',['class'=>'form-group']) ?>
          							
                        <div class="col-sm-4">
                          <div class="input-group">
                                          <label for="inputKategori" class="input-group-addon">Kategori</label>
                                              <select name="pro_name" class="form-control select2" style="width: 100%;">
                                            
                                              <option value="">-Pilihan-</option>
                                                <option value="Teknologi">Teknologi</option>
                                                <option value="Pendidikan">Pendidikan</option>
                                                </select>
                                         </div>
                                       </div>
                      

          							<div class="col-sm-4">
          								<div class="input-group">
          									<div class="input-group-addon">Judul Buku</div>
          									<input type="text" class="form-control" name="pro_title" placeholder="Judul Buku" value="<?= set_value('pro_title') ?>">
          								</div>
          							</div>

                        <div class="col-sm-4">
                          <div class="input-group">
                            <div class="input-group-addon">Penulis</div>
                            <input type="text" class="form-control" name="penulis" placeholder="Penulis" >
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="input-group">
                            <div class="input-group-addon">Penerbit</div>
                            <input type="text" class="form-control" name="penerbit" placeholder="Penerbit" >
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="input-group">
                                          <label for="inputKategori" class="input-group-addon">Tahun Buku</label>
                                              <select name="tahun" class="form-control select2" style="width: 100%;">
                                            
                                              <option value="">-Pilihan-</option>
                                                <option value="1990">1990</option>
                                                <option value="1991">1991</option>
                                                <option value="1992">1992</option>
                                                <option value="1993">1993</option>
                                                <option value="1994">1994</option>
                                                <option value="1995">1995</option>
                                                <option value="1996">1996</option>
                                                <option value="1997">1997</option>
                                                <option value="1998">1998</option>
                                                <option value="1999">1999</option>
                                                <option value="2000">2000</option>
                                                <option value="2001">2001</option>
                                                <option value="2002">2002</option>
                                                <option value="2003">2003</option>
                                                <option value="2004">2004</option>
                                                <option value="2005">2005</option>
                                                <option value="2006">2006</option>
                                                <option value="2007">2007</option>
                                                <option value="2008">2008</option>
                                                <option value="2009">2009</option>
                                                <option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                
                                                </select>
                                         </div>
                                       </div>

          							<div class="col-sm-6">
                          <div class="input-group-addon">Description</div>
          								<div class="input-group col-sm-12">
          									<textarea rows="4" class="form-control" name="pro_description" placeholder="Deskripsi"><?= set_value('pro_description') ?></textarea>
          								</div>
          							</div>
          							<div class="col-sm-12"><hr></div>
          							<div class="col-sm-5">
          								<div class="input-group">
          									<div class="input-group-addon">Harga Satuan</div>
          									<input type="text" class="form-control" name="pro_price" placeholder="Harga" value="<?= set_value('pro_price') ?>">
          									<div class="input-group-addon">Rp.   </div>
          								</div>
          							</div>


          									<input type="hidden" class="form-control" name="pro_stock" value="10">


          							<div class="col-sm-3">
          								<div class="input-group">
          									<input type="file" name="userfile">
          								</div>
          							</div>

          							<div class="col-sm-1">
          								<div class="input-group">
          									<button type="submit" class="btn btn-primary">Simpan</button>
          								</div>
          							</div>
          							<div class="col-sm-1">
          								<div class="input-group">

          									<?=  anchor('admin/products','Batal',['class'=>'btn btn-danger']) ?>
          								</div>
          							</div>


          						<?= form_close() ?>
          						</div><!-- /..panel-body -->
          					</div><!-- /..panel panel-default -->
          				</div>

          			</div>
          			<!-- /.row -->
          			<hr>


          		</div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
    require ('footer.php')
?>
