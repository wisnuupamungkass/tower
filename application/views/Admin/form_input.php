<?php
echo validation_errors();
echo form_open_multipart('Menara/tambah');
?>
<div><header class="panel-heading"><center><h1>TAMBAH ADMIN</h1></header></div>
<!-- Form Tambah Admin -->              
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading"></header>
            <div class="panel-body">
                <div class="alert alert-info fade in">
									  <div class="form-group ">
                       <label for="varchar" class="control-label col-lg-2">Nama Lengkap</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" value="<?php echo set_value('nama') ?>" required/>
                        </div>
                    </div>
									  <br>
									  <br>
									  <hr>
									  <div class="form-group ">
                       <label for="varchar" class="control-label col-lg-2">Email</label>
                        <div class="col-lg-9">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo set_value('email') ?>" required/>
                        </div>
                    </div>
									  <br>
									  <br>
									  <hr>
									  <div class="form-group ">
                      <label for="varchar" class="control-label col-lg-2">Username <span class="required">*</span></label>
                      <div class="col-lg-9">
                          <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo set_value('username') ?>" required/>
                      </div>
									  </div>
									  <br>
									  <br>
									  <hr>
									  <div class="form-group ">
                        <label for="varchar" class="control-label col-lg-2">Password <span class="required">*</span></label>
                        <div class="col-lg-9">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo set_value('password') ?>" required/>
                        </div>
                    </div>
									  <br>
									  <br>
									  <hr>
									  <div class="form-group ">
                        <label for="varchar" class="control-label col-lg-2">Foto <span class="required">*</span></label>
                        <div class="col-lg-9">
                            <input type="file" name="userfile" class="form-control" value= "<?php echo set_value('upload_gambar');?>" size="50">
                        </div>
                    </div>
									  <br>
									  <br>
								<?php echo form_close(); ?>
                </div>
                <div class="form-group" align="left">
                  <button class="btn btn-success" type="submit" value="Simpan"><span class="fa fa-fw fa-check"></span> Save </button>
                  <a href="<?php echo base_url('index.php/Menara/daftar_admin') ?>">
                    <button class="btn btn-primary" type="button" value="Batal"><span class="fa fa-home"></span> Cancel </button>
                  </a>
                </div>
            </div>
        </section>
    </div>
</div>
