<head>
	<title>DATA TOWER</title>
	<script language=Javascript>
	function isNumberKey(evt)
	{
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))

		return false;
		return true;
	}
	</script>
</head>
<header class="panel-heading"><center><h1>DATA TOWER</h1></header>
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
										<a data-toggle="modal" href="#tambah_tower">
											<button class="btn btn-primary"><i class="fa fa-fw fa-plus"></i> Tambah Tower</button>
										</a>
										<a href="<?php echo base_url('index.php/Tower/upload') ?>">
											<button class="btn btn-success"><i class="icon_cloud-upload_alt"></i> Import Excel</button>
										</a>
									</th>
								</tr>
							</table>
							<table id="datatable-buttons" class="table table-striped table-bordered">      
								<thead>  
									<tr>
										<th><i class="icon_lock_alt"></i> ID Site</th>
										<th> Tipe Menara</th>
										<th> Tinggi Menara</th>
										<th> Eksisting Antena</th>
										<th> Tinggi Antena</th>
										<th> Foto</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach($cetak->result_array() as $row)
								{ ?>
									<tr>
										<td align="left">
											<div class="btn-group">
												<button type="button" class="btn btn-warning"><a href="<?php echo base_url('index.php/Tower/edit/' .$row['id_site']) ?>"><i class="fa fa-fw fa-edit"></i></a></button>
												<button type="button" class="btn btn-danger" ><a href="<?php echo base_url('index.php/Tower/detail_tower/' .$row['id_site']) ?>"><i class="icon_close_alt2 "></i></a></button>
											</div>
											<?php echo $row['id_site'] ?>
										</td>
										<td><?php echo $row['tipe_menara'] ?></td>
										<td><?php echo $row['tinggi_menara']." meter" ?></td>
										<td><?php echo $row['eksisting_antena']." buah" ?></td>
										<td><?php echo $row['tinggi_antena']." meter" ?></td>
										<td><img src="<?php echo base_url('images/thumbnails/Tower/'.$row['thumb']);?>"></td>
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

<!-- Modal Input Tower-->
<div class="modal fade" id="tambah_tower" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
 		<div class="modal-content">
        	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            	<h4 class="modal-title"></h4>
          	</div>
          	<div class="modal-body">
				<?php
					echo validation_errors();
					echo form_open_multipart('Tower/tambah');
				?>
				<div><header class="panel-heading"><center><h1>TAMBAH TOWER</h1></header></div>
<!-- Form Tambah Tower --> 
<div class="row">
  <div class="col-lg-12">
	  <section class="panel">
		  <header class="panel-heading"></header>
		  <div class="panel-body">
			  <div class="alert alert-info fade in">
					  <div class="form-group ">
						 <label for="varchar" class="control-label col-lg-2"> ID Site <span class="required">*</span></label>
						  <div class="col-lg-9">
							  <input type="text" class="form-control" name="id_site" id="id_site" placeholder="ID Site" value="<?php echo set_value('id_site') ?>" required/>
						  </div>
					  </div>
					  <br>
					  <br>
					  <hr>
					  <div class="form-group ">
						 <label for="varchar" class="control-label col-lg-2">Tipe Menara<span class="required">*</span></label>
						  <div class="col-lg-9">
							<select  id="tipe_menara" name="tipe_menara" class="form-control" name="<?php echo set_value('tipe_menara') ?>" required/>    
								<option value="">-----Silahkan Pilih-----</option>    
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
						  <label for="varchar" class="control-label col-lg-2">Tinggi Menara<span class="required">*</span></label>
						  <div class="col-lg-9">
							  <input type="text" class="form-control" name="tinggi_menara" onkeypress="return isNumberKey(event)" id="tinggi_menara" placeholder="Tinggi Menara (Meter)" value="<?php echo set_value('tinggi_menara') ?>" required/>
						  </div>
					  </div>
					  <br>
					  <br>
					  <hr>
					  <div class="form-group ">
						  <label for="varchar" class="control-label col-lg-2">Eksisting Antena<span class="required">*</span></label>
						  <div class="col-lg-9">
							  <input type="text" class="form-control" name="eksisting_antena" onkeypress="return isNumberKey(event)" id="eksisting_antena" placeholder="Eksisting Antena (Buah)" value="<?php echo set_value('eksisting_antena') ?>" required/>
						  </div>
					  </div>
					  <br>
					  <br>
					  <hr>
					  <div class="form-group ">
						  <label for="varchar" class="control-label col-lg-2">Tinggi Antena<span class="required">*</span></label>
						  <div class="col-lg-9">
							  <input type="text" class="form-control" name="tinggi_antena" onkeypress="return isNumberKey(event)" id="tinggi_antena" placeholder="Tinggi Antena (Meter)" value="<?php echo set_value('tinggi_antena') ?>" required/>
						  </div>
					  </div>
					  <br>
					  <br>
					  <hr>
					  <div class="form-group ">
						  <label for="varchar" class="control-label col-lg-2">Foto <span class="required">*</span></label>
						  <div class="col-lg-9">
                            <input type="file" name="userfile" class="form-control" value= "<?php echo set_value('foto_menara');?>" size="50" required/>
                        </div>
					  </div>
					  <br>
					  <br>
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
<!--modal-->