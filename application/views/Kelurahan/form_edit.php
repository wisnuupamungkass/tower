<head>
  <title>EDIT KELURAHAN</title>
</head>
<?php
echo validation_errors();
echo form_open_multipart('Kelurahan/edit/'.$id_kelurahan);
?>
<header class="panel-heading"><center><h1>EDIT KELURAHAN</h1></header>
<!-- Form Edit Kelurahan -->              
<div class="row">
  <div class="col-lg-12">
	  <section class="panel">
		  <header class="panel-heading"></header>
		  <div class="panel-body">
			  <div class="form">
					  <div class="form-group ">
						 <label for="varchar" class="control-label col-lg-2">ID Kecamatan</label>
						  <div class="col-lg-10">
							  <input type="text" class="form-control" name="id_kecamatan" id="id_kecamatan" value="<?php echo $id_kecamatan; ?>" disabled>
						  </div>
					  </div>
					  <br>
					  <br>
					  <hr>
					  <div class="form-group ">
						 <label for="varchar" class="control-label col-lg-2">ID Kelurahan</label>
						  <div class="col-lg-10">
							  <input type="text" class="form-control" name="id_kelurahan" id="id_kelurahan" value="<?php echo $id_kelurahan; ?>" disabled>
						  </div>
					  </div>
					  <br>
					  <br>
					  <hr>
					  <div class="form-group ">
						 <label for="varchar" class="control-label col-lg-2">Nama Kelurahan</label>
						  <div class="col-lg-10">
							  <input type="text" class="form-control" name="nama_kelurahan" id="nama_kelurahan" placeholder="Nama Kelurahan" value="<?php echo $nama_kelurahan; ?>" required/>
							</div>
						</div>
						<br>
						<br>
						<hr>
						<div class="form-group" align="left">
							<button class="btn btn-success" type="submit" value="Simpan"><span class="fa fa-fw fa-check"></span> Save </button>
							<a href="<?php echo base_url('index.php/Kelurahan/daftar_kelurahan') ?>">
								<button class="btn btn-primary" type="button" value="Batal"><span class="fa fa-home"></span> Cancel </button>
							</a>
						</div>
				<?php echo form_close(); ?>
			  </div>
		  </div>
	  </section>
  </div>
</div>
