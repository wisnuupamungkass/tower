<head>
	<title>DATA KECAMATAN</title>
</head>
<header class="panel-heading"><center><h1>DATA KECAMATAN</h1></header>
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
									<a href="<?php echo base_url('index.php/Kecamatan/tambah') ?>">
										<button class="btn btn-primary"><i class="fa fa-fw fa-plus"></i> Tambah Kecamatan</button>
									</a>
									<a href="<?php echo base_url('index.php/Kecamatan/upload') ?>">
										<button class="btn btn-success"><i class="icon_cloud-upload_alt"></i> Import Excel</button>
									</a>
								</th>
							</tr>
						</table>
						<table id="datatable-buttons" class="table table-striped table-bordered">      
							<thead>  
								<tr>
									<th><i class="icon_lock_alt"></i> ID Kecamatan</th>
									<th><i class="icon_profile"></i> Nama Kecamatan</th>
								</tr>
							</thead>
							<tbody>
							<?php
								foreach($cetak->result_array() as $row)
								{ ?>
							  <tr>
								<td align="left">
									<div class="btn-group">
										<button type="button" class="btn btn-warning"><a href="<?php echo base_url('index.php/Kecamatan/edit/' .$row['id_kecamatan']) ?>"><i class="fa fa-fw fa-edit"></i></a></button>
										<button type="button" class="btn btn-danger" ><a href="<?php echo base_url('index.php/Kecamatan/detail_kecamatan/' .$row['id_kecamatan']) ?>"><i class="icon_close_alt2 "></a></i></button>
									</div>
									<?php echo $row['id_kecamatan'] ?>
								</td>
								<td align="left"><?php echo $row['nama_kecamatan'] ?></td>
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