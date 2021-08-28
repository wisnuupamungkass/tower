<head>
  <title>EDIT KECAMATAN</title>
</head>
<?php
echo validation_errors();
echo form_open_multipart('Kecamatan/edit/'.$id_kecamatan);
?>
<header class="panel-heading"><center><h1>EDIT KECAMATAN</h1></header>
<!-- Form Edit Kecamatan -->              
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
                  <label for="varchar" class="control-label col-lg-2">Nama Kecamatan</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" name="nama_kecamatan" id="nama_kecamatan" placeholder="Nama Kecamatan" value="<?php echo $nama_kecamatan; ?>" required/>
                  </div>
                </div>
							  <br>
							  <br>
							  <hr>
                <div class="form-group" align="left">
                  <button class="btn btn-success" type="submit" value="Simpan"><span class="fa fa-fw fa-check"></span>Simpan</button>
								  <a href="<?php echo base_url('index.php/Kecamatan/daftar_kecamatan') ?>">
									<button class="btn btn-primary" type="button" value="Batal"><span class="fa fa-home"></span>Cancel</button>
								  </a>
                </div>
								<?php echo form_close(); ?>
              </div>
            </div>
        </section>
    </div>
</div>