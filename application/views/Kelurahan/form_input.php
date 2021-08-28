<?php
echo validation_errors();
echo form_open_multipart('Kelurahan/tambah');
?>
<head>
  <title>INPUT KELURAHAN</title>
</head>
<header class="panel-heading"><center><h1>INPUT KELURAHAN</h1></header>
<!-- Form Input Kelurahan -->              
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
			<header class="panel-heading"></header>
			<div class="panel-body">
                <div class="form">
					<div class="form-group ">
						 <label for="varchar" class="control-label col-lg-2">ID Kelurahan <span class="required">*</span></label>
						  <div class="col-lg-10">
							  <input type="text" class="form-control" name="id_kelurahan" id="id_kelurahan" placeholder="ID Kelurahan" value="<?php echo set_value('id_kelurahan') ?>" required/>
						  </div>
					</div>
					<br><br>
					<hr>
					<div class="form-group ">
                        <label for="varchar" class="control-label col-lg-2">Nama Kecamatan <span class="required">*</span></label>
                        <div class="col-lg-10">
							<?php
							$option='';
							foreach ($query1->result_array() as $row )
							{
								$option[$row['id_kecamatan']]=$row['nama_kecamatan'];
							}
							echo form_dropdown('id_kecamatan',$option, set_value('id_kecamatan'), 'class="form-control", style="width 100%"');
							?>
                        </div>
                    </div>
					<br><br>
					<hr>
					<div class="form-group ">
						<label for="varchar" class="control-label col-lg-2">Nama Kelurahan <span class="required">*</span></label>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="nama_kelurahan" id="nama_kelurahan" placeholder="Nama Kelurahan" value="<?php echo set_value('nama_Kelurahan') ?>" required/>
						</div>
					</div>
					<br><br>
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
