<?php
$this->simple_login->cek_login();

echo validation_errors();
echo form_open_multipart('Tower/edit/'.$id_site);
?>
<div><header class="panel-heading"><center><h1>EDIT TOWER</h1></header></div>
<!-- Form Edit Tower -->              
<div class="row">
  <div class="col-lg-12">
	  <section class="panel">
		  <header class="panel-heading"></header>
		  <div class="panel-body">
			  <div class="alert alert-info fade in">
			  	<div class="form-group ">
						 <label for="varchar" class="control-label col-lg-2">ID Menara</label>
						  <div class="col-lg-9">
							  <input type="text" class="form-control" name="id_site" id="id_site" value="<?php echo $id_site; ?>" disabled>
						  </div>
					  </div>
					  <br>
					  <br>
					  <hr>
					  <div class="form-group ">
						 <label for="varchar" class="control-label col-lg-2">Tipe Menara</label>
						  <div class="col-lg-9">
							  <select  id="tipe_menara" name="tipe_menara" class="form-control" name="<?php echo $tipe_menara; ?>" required/>    
								<option value="">Silahkan Pilih</option>    
								<option value="Green Field">Green Field</option>    
								<option value="Combat">Combat</option>    
								<option value="Roof Top">Roof Top</option>       
							</select>
						  </div>
					  </div>
					  <br>
					  <br>
					  <hr>
					  <div class="form-group ">
						  <label for="varchar" class="control-label col-lg-2">Tinggi Menara <span class="required">*</span></label>
						  <div class="col-lg-9">
							<input type="text" class="form-control" name="tinggi_menara" id="tinggi_menara" placeholder="Tinggi Menara (Meter)" value="<?php echo $tinggi_menara; ?>" required/>
						  </div>
					  </div>
					  <br>
					  <br>
					  <hr>
					  <div class="form-group ">
						  <label for="varchar" class="control-label col-lg-2">Eksisting Antena <span class="required">*</span></label>
						  <div class="col-lg-9">
							  <input type="text" class="form-control" name="eksisting_antena" id="eksisting_antena" placeholder="Eksisting Antena (Buah)" value="<?php echo $eksisting_antena; ?>" required/>
						  </div>
					  </div>
					  <br>
					  <br>
					  <hr>
					  <div class="form-group ">
						  <label for="varchar" class="control-label col-lg-2">Tinggi Antena <span class="required">*</span></label>
						  <div class="col-lg-9">
							  <input type="text" class="form-control" name="tinggi_antena" id="tinggi_antena" placeholder="Tinggi Antena (Meter)" value="<?php echo $tinggi_antena; ?>" required/>
						  </div>
					  </div>
					  <br>
					  <br>
					  <hr>
					  <div class="form-group ">
						  <label for="varchar" class="control-label col-lg-2">Foto <span class="required">*</span></label>
						  <div class="col-lg-9">
						  	<img width="20%" height="20%" src="<?php echo base_url('images/Tower/'.$foto_menara);?>"><br><br>
							  <input type="file" name="userfile" class="btn btn-default" value= "<?php echo set_value('foto_menara');?>" size="50">
						  </div>
					  </div>
					  <br><br><br><br><br><br><br><br><br><br><br><br>
				<?php echo form_close(); ?>
			  </div>
			  <div class="form-group" align="left">
				  <button class="btn btn-success" type="submit" value="Simpan"><span class="fa fa-fw fa-check"></span> Save </button>
				  <a href="<?php echo base_url('index.php/Tower/daftar_tower') ?>">
					<button class="btn btn-primary" type="button" value="Batal"><span class="fa fa-home"></span> Cancel </button>
				  </a>
			</div>
		  </div>
	  </section>
  </div>
</div>
