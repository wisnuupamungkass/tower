<?php
echo validation_errors();
echo form_open_multipart('Provider/tambah');
?>
<div><header class="panel-heading"><center><h1>TAMBAH PROVIDER</h1></header></div>
<!-- Form Input Provider -->              
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading"></header>
                <div class="panel-body">
                	<div class="alert alert-info fade in">
						<div class="form-group ">
							<label for="varchar" class="control-label col-lg-2"> ID Provider </label>
							<div class="col-lg-9">
                                <input type="text" class="form-control" name="id_provider" id="id_provider" placeholder="ID Provider" value="<?php echo $id_provider; ?>" disabled>
                            </div>
                        </div>
						<br><br>
						<hr>
						<div class="form-group ">
							<label for="varchar" class="control-label col-lg-2"> Nama Provider <span class="required">*</span></label>
							<div class="col-lg-9">
                                <input type="text" class="form-control" name="nama_provider" id="nama_provider" placeholder="Nama Provider" value="<?php echo set_value('nama_provider') ?>" required/>
                            </div>
                        </div>
						<br><br>
						<hr>
						<div class="form-group ">
                            <label for="varchar" class="control-label col-lg-2">Alias Provider <span class="required">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="alias_provider" id="alias_provider" placeholder="Alias Provider" value="<?php echo set_value('alias_provider') ?>" required/>
                            </div>
                        </div>
						<br><br>
						<hr>
						<div class="form-group ">
                            <label for="varchar" class="control-label col-lg-2">Alamat Provider <span class="required">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="alamat_provider" id="alamat_provider" placeholder="Alamat Provider" value="<?php echo set_value('alamat_provider') ?>" required/>
                            </div>
						</div>
						<br><br>
						<hr>
						<div class="form-group ">
                            <label for="varchar" class="control-label col-lg-2">Telepon Provider<span class="required">*</span></label>
                            <div class="col-lg-9">
								<input type="text" class="form-control" name="telepon_provider" id="telepon_provider" placeholder="Telepon Provider" value="<?php echo set_value('telepon_provider') ?>" required/>
                            </div>
                        </div>
						<br><br>
						<hr>
						<div class="form-group ">
                            <label for="varchar" class="control-label col-lg-2">Fax Provider</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="fax_provider" id="fax_provider" placeholder="Fax Provider" value="<?php echo set_value('fax_provider') ?>" />
							</div>
                        </div>
						<br><br>
						<hr>
						<div class="form-group ">
                            <label for="varchar" class="control-label col-lg-2">Email Provider<span class="required">*</span></label>
                            <div class="col-lg-9">
                                <input type="email" class="form-control" name="email_provider" id="email_provider" placeholder="Email Provider" value="<?php echo set_value('email_provider') ?>" required/>
                            </div>
                        </div>
						<br><br>
						<?php echo form_close(); ?>
                   </div>
                    <div class="form-group" align="left">
                        <button class="btn btn-success" type="submit" value="Simpan"><span class="fa fa-fw fa-check"></span> Save </button>
							<a href="<?php echo base_url('index.php/Provider/daftar_provider') ?>">
								<button class="btn btn-primary" type="button" value="Batal"><span class="fa fa-home"></span> Cancel </button>
							</a>
                    </div>
                  </div>
        </section>
    </div>
</div>
