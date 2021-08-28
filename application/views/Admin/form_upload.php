<?php echo form_open_multipart('Menara/do_upload');?>
<header class="panel-heading"><center><h1><i class="icon_cloud-upload_alt"></i> UPLOAD FILE EXCEL <i class="icon_cloud-upload_alt"></i></h1></center></header>
<!-- Form Upload -->              
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
        <header class="panel-heading"></header>
			<div class="panel-body">
				<div class="form">
					<div class="form-group ">
						<label for="varchar" class="control-label col-lg-2"><h4>Choose File XLS *</h4></label>
                        <div class="col-lg-10">
                            <input type="file" class="btn btn-default" id="file_upload" name="userfile" size="20" required/>
						</div>
                    </div>
					<br>
					<br>
					<hr>
                    <div class="form-group" align="left">
                        <button class="btn btn-success" type="submit" value="Upload"><span class="icon_cloud-upload_alt"></span> Upload</button>
							<a href="<?php echo base_url('index.php/Menara/daftar_admin') ?>">
								<button class="btn btn-primary" type="button" value="Batal"><span class="fa fa-home"></span> Cancel</button>
							</a>
                    </div>
					<?php echo form_close(); ?>
                </div>
            </div>
        </section>
    </div>
</div>			  