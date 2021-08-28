<head>
	<title>DATA ADMIN</title>
</head>
<header class="panel-heading"><center><h1>DATA ADMIN</h1></center></header>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
		<header class="panel-heading"></header>
<div class="panel-body text-center">	
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_content">
				<table align="left">
					<tr>
						<th>
							<a data-toggle="modal" href="#tambah">
								<button class="btn btn-primary"><i class="fa fa-fw fa-plus"></i> Tambah Admin</button>
							</a>
							<a href="<?php echo base_url('index.php/Menara/upload') ?>">
								<button class="btn btn-success"><i class="icon_cloud-upload_alt"></i> Import Excel</button>
							</a>
						</th>
					</tr>
				</table>
                <table id="datatable-buttons" class="table table-striped table-bordered">      
					<thead >  
                        <tr>
                          <th><i class="icon_lock_alt"></i> ID</th>
                          <th><i class="icon_profile"></i> Nama</th>
                          <th><i class="icon_mail_alt"></i> Email</th>
                          <th><i class="icon_profile"></i> Username</th>
						  <th><i class="icon_profile"></i> Photo</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
						foreach($cetak->result_array() as $row)
					{ ?>
					  <tr>
						<td align="left">
							<div class="btn-group">
								<button type="button" class="btn btn-warning"><a href="<?php echo base_url('index.php/Menara/edit/' .$row['id_user']) ?>"><i class="fa fa-fw fa-edit"></i></a></button>
								<button type="button" class="btn btn-danger" ><a data-toggle="modal" href="<?php echo base_url('index.php/Menara/detail_admin/' .$row['id_user']) ?>"><i class="icon_close_alt2 "></i></a></button>
							</div>
							<?php echo $row['id_user'] ?>
						</td>
						<td><?php echo $row['nama'] ?></td>
						<td><?php echo $row['email'] ?></td>
						<td><?php echo $row['username'] ?></td>
						<td><img src="<?php echo base_url('images/thumbnails/Admin/'.$row['thumb']);?>"></td>
					  </tr>
					 	 <?php } ?>
         				</tbody>
                    </table>
                  </div>
                </div>
              </div>
			</div>
		</section>
	</div>
</div>

<!-- Modal Input Admin-->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
 		<div class="modal-content">
        	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            	<h4 class="modal-title"></h4>
          	</div>
          	<div class="modal-body">
				<?php
				$this->simple_login->cek_login();

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
                       <label for="varchar" class="control-label col-lg-2">Nama</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" value="<?php echo set_value('nama') ?>" required/>
                        </div>
                    </div>
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
						<label for="varchar" class="control-label col-lg-2">Username<span class="required">*</span></label>
						<div class="col-lg-9">
						  <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo set_value('username') ?>" required/>
						</div>
					</div>
					<br>
					<br>
					<hr>
					<div class="form-group ">
                        <label for="varchar" class="control-label col-lg-2">Password<span class="required">*</span></label>
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
                            <input type="file" name="userfile" class="btn btn-default" value= "<?php echo set_value('upload_gambar');?>" size="50" required/>
                        </div>
                    </div>
				  	<br>
				  	<br>
				<?php echo form_close(); ?>
                </div>
                <div class="form-group">
                  	<button class="btn btn-success" type="submit" value="Simpan"><span class="fa fa-fw fa-check"></span> Save </button>
                  	<a href="<?php echo base_url('index.php/Menara/daftar_admin') ?>">
                    	<button class="btn btn-primary" type="button" value="Batal"><span class="fa fa-home"></span> Cancel </button>
                 	 </a>
                </div>
            </div>
        </section>
    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- modal -->