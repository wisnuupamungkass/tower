<?php
echo validation_errors();
echo form_open_multipart('Site/tambah');
?>
<div><header class="panel-heading"><center><h1>TAMBAH SITE</h1></header></div>
<!-- Form Tambah Site -->              
<div class="row">
  <div class="col-lg-12">
	  <section class="panel">
		  <header class="panel-heading"></header>
		  <div class="panel-body">
		  	<div class="alert alert-info fade in">
			  	<div class="form-group ">
						 <label for="varchar" class="control-label col-lg-2">ID Site</label>
						  <div class="col-lg-9">
							<?php
							$option='';
							foreach ($query->result_array() as $row )
							{
								$option[$row['id_site']]=$row['id_site'];
							}
							echo form_dropdown('id_site',$option, set_value('id_site'), 'class="form-control", style="width 100%"');
							?>
						  </div>
					  </div>
					  <br>
					  <br>
					  <hr>
					  <div class="form-group ">
						 <label for="varchar" class="control-label col-lg-2">Pemilik Menara</label>
						  <div class="col-lg-9">
							<?php
							$option='';
							foreach ($query3->result_array() as $row )
							{
								$option[$row['id_provider']]=$row['nama_provider'];
							}
							echo form_dropdown('pemilik_menara',$option, set_value('pemilik_menara'), 'class="form-control", style="width 100%"');
							?>
						  </div>
					  </div>
					  <br>
					  <br>
					  <hr>
					  <div class="form-group ">
						 <label for="varchar" class="control-label col-lg-2">Alamat</label>
						  <div class="col-lg-9">
							  <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo set_value('alamat') ?>" required/>
						  </div>
					  </div>
					  <br>
					  <br>
					  <hr>
					  <div class="form-group ">
						 <label for="varchar" class="control-label col-lg-2">Kelurahan</label>
						  <div class="col-lg-9">
							<?php
							$option='';
							foreach ($query2->result_array() as $row )
							{
								$option[$row['nama_kelurahan']]=$row['nama_kelurahan'];
							}
							echo form_dropdown('kelurahan',$option, set_value('kelurahan'), 'class="form-control", style="width 100%"');
							?>
						  </div>
					  </div>
					  <br>
					  <br>
					  <hr>
					  <div class="form-group ">
						 <label for="varchar" class="control-label col-lg-2">Kecamatan</label>
						  <div class="col-lg-9">
							<?php
							$option='';
							foreach ($query1->result_array() as $row )
							{
								$option[$row['nama_kecamatan']]=$row['nama_kecamatan'];
							}
							echo form_dropdown('kecamatan',$option, set_value('kecamatan'), 'class="form-control", style="width 100%"');
							?>
						  </div>
					  </div>
					  <br>
					  <br>
					  <hr>
					  <div class="form-group ">
						 <label for="varchar" class="control-label col-lg-2">Latitude</label>
						  <div class="col-lg-9">
							  <input type="text" class="form-control" name="latitude" id="latitude" placeholder="Latitude" value="<?php echo set_value('latitude') ?>" required/>
						  </div>
					  </div>
					  <br>
					  <br>
					  <hr>
					  <div class="form-group ">
						 <label for="varchar" class="control-label col-lg-2">Longitude</label>
						  <div class="col-lg-9">
							  <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Longitude" value="<?php echo set_value('longitude') ?>" required/>
						  </div>
					  </div>
					  <br>
					  <br>
					  <hr>
					  <div class="form-group ">
						 <label for="varchar" class="control-label col-lg-2">Lahan</label>
						  <div class="col-lg-9">
							  <select  class="form-control" name="lahan" id="lahan" placeholder="Lahan" value="<?php echo set_value('lahan') ?>">    
								<option value="">-----Silahkan Pilih-----</option>    
								<option value="Pemukiman">Pemukiman</option>    
								<option value="Perkantoran">Perkantoran</option>    
								<option value="Fasilitas Publik">Fasilitas Publik</option>
								<option value="Kawasan Industri">Kawasan Industri</option>
								<option value="Perkebunan">Perkebunan</option>
								<option value="Persawahan">Persawahan</option>
							</select>
						  </div>
					  </div>
					  <br>
					  <br>
					  <hr>
				<?php echo form_close(); ?>
		  </div>
		  	<div class="form-group" align="left">
			  <button class="btn btn-success" type="submit" value="Simpan"><span class="fa fa-fw fa-check"></span> Save </button>
			  <a href="<?php echo base_url('index.php/Site/daftar_site') ?>">
				<button class="btn btn-primary" type="button" value="Batal"><span class="fa fa-home"></span> Cancel </button>
			  </a>
			</div>
		</div>
	  </section>
  </div>
</div>