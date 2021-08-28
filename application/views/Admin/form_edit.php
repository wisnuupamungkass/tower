<?php
$this->simple_login->cek_login();

echo validation_errors();
echo form_open_multipart('Menara/edit/'.$id_user);
?>
<div><header class="panel-heading"><center><h1>EDIT ADMIN</h1></header></div>
<!-- Form Edit Admin -->              
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
			<header class="panel-heading"></header>
            <div class="panel-body">
            <div class="alert alert-info fade in">
                <div class="form">
					<div class="form-group ">
                        <label for="varchar" class="control-label col-lg-2">ID Admin</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="id_user" id="id_user" value="<?php echo $id_user; ?>" disabled>
                        </div>
                    </div>
					<br><br>
					<hr>
					<div class="form-group ">
                        <label for="varchar" class="control-label col-lg-2">Nama Lengkap <span class="required">*</span></label>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" value="<?php echo $nama; ?>" required/>
						</div>
                    </div>
					<br><br>
					<hr>
					<div class="form-group ">
                        <label for="varchar" class="control-label col-lg-2">Email</label>
                        <div class="col-lg-9">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" required/>
                        </div>
                    </div>
					<br><br>
					<hr>
					<div class="form-group ">
                        <label for="varchar" class="control-label col-lg-2">Username <span class="required">*</span></label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" required/>
                        </div>
					</div>
					<br><br>
					<hr>
					<div class="form-group ">
                        <label for="varchar" class="control-label col-lg-2">Password <span class="required">*</span></label>
                        <div class="col-lg-9">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" required/>
                        </div>
                    </div>
					<br><br>
					<hr>
					<div class="form-group ">
                        <label for="varchar" class="control-label col-lg-2">Foto </label>
						<div class="col-lg-9">
                            <img width="20%" height="20%" src="<?php echo base_url('images/Admin/'.$foto);?>"><br><br>
							<input class="btn btn-default" class="icon_cloud-upload_alt" type="file" name="userfile" value= "<?php echo $foto;?>" size="50">
						</div>
                    </div>
					<br><br><br><br><br><br><br><br><br><br><br><br>
					<?php echo form_close(); ?>
                </div>
                </div>
             	<div class="form-group" align="left">
                    <button class="btn btn-success" type="submit" value="Simpan"><span class="fa fa-fw fa-check"></span> Save </button>
					<a href="<?php echo base_url('index.php/Menara/daftar_admin') ?>">
						<button class="btn btn-primary" type="button" value="Batal"><span class="fa fa-home"></span> Cancel</button>
					</a>
                </div>
            </div>
        </section>
    </div>
</div>
