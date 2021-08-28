<?php
$this->simple_login->cek_login();
echo validation_errors();
echo form_open_multipart('Penyewa/tambah');
?>
<div><header class="panel-heading"><center><h1>TAMBAH PENYEWA</h1></header></div>
<!-- Form Input Penyewa -->              
<div class="row">
  <div class="col-lg-12">
	  <section class="panel">
		  <header class="panel-heading"></header>
		  <div class="panel-body">
			  <div class="alert alert-info fade in">
					  <div class="form-group ">
						 <label for="varchar" class="control-label col-lg-2">ID Penyewa</label>
						  <div class="col-lg-9">
							  <input type="text" class="form-control" name="id_penyewa" id="id_penyewa" placeholder="ID Penyewa" value="<?php echo $id_penyewa; ?>" disabled/>
						  </div>
					  </div>
					  <br>
					  <br>
					  <hr>
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
						 <label for="varchar" class="control-label col-lg-2">Penyewa 1 *</label>
						  <div class="col-lg-9">
							  <input type="text" class="form-control" name="penyewa_1" id="penyewa_1" placeholder="Penyewa 1" value="<?php echo set_value('penyewa_1') ?>" required/>
						  </div>
					  </div>
					  <br>
					  <br>
					  <hr>
					  <div class="form-group ">
						 <label for="varchar" class="control-label col-lg-2">Penyewa 2</label>
						  <div class="col-lg-9">
							  <input type="text" class="form-control" name="penyewa_2" id="penyewa_2" placeholder="Penyewa 2" value="<?php echo set_value('penyewa_2') ?>" />
						  </div>
					  </div>
					  <br>
					  <br>
					  <hr>
					  <div class="form-group ">
						 <label for="varchar" class="control-label col-lg-2">Penyewa 3</label>
						  <div class="col-lg-9">
							  <input type="text" class="form-control" name="penyewa_3" id="penyewa_3" placeholder="Penyewa 3" value="<?php echo set_value('penyewa_3') ?>" />
						  </div>
					  </div>
					  <br>
					  <br>
				<?php echo form_close(); ?>
			  	</div>
				<div class="form-group" align="left">
				  <button class="btn btn-success" type="submit" value="Simpan"><span class="fa fa-fw fa-check"></span> Simpan</button>
				  <a href="<?php echo base_url('index.php/Penyewa/daftar_penyewa') ?>">
					<button class="btn btn-primary" type="button" value="Batal"><span class="fa fa-home"></span> Cancel</button>
				  </a>
				<div>
		  </div>
	  </section>
  </div>
</div>
