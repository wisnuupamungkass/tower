<head>
	<title>DATA PROVIDER</title>
</head>
<header class="panel-heading"><center><h1>DATA PROVIDER</h1></center></header>
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
											<a href="<?php echo base_url('index.php/Provider/tambah') ?>">
												<button type="button" class="btn btn-primary"><i class="fa fa-fw fa-plus"></i> Tambah Provider</button>
											</a>
											<a href="<?php echo base_url('index.php/Provider/upload') ?>">
												<button type="button" class="btn btn-success"><i class="icon_cloud-upload_alt"></i> Import Excel</button>
											</a>
										</th>
									</tr>
								</table>
								<table id="datatable-buttons" class="table table-striped table-bordered">      
									<thead>  
										<tr>
											<th><i class="icon_lock_alt"></i> ID</th>
											<th><i class="icon_profile"></i> Nama</th>
											<th><i class="icon_profile"></i>Alias</th>
											<th> Alamat Provider</th>
											<th> Telepon</th>
											<th> Fax</th>
											<th><i class="icon_mail_alt"></i> Email</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($cetak->result_array() as $row)
										{ ?>
										<tr>
											<td>
												<?php echo $row['id_provider'] ?>
												<div class="btn-group-vertical">
													<button type="button" class="btn btn-warning"><a href="<?php echo base_url('index.php/Provider/edit/' .$row['id_provider']) ?>"><i class="fa fa-fw fa-edit"></i></a></button>
													<button type="button" class="btn btn-danger" ><a href="<?php echo base_url('index.php/Provider/detail_provider/' .$row['id_provider']) ?>"><i class="icon_close_alt2 "></i></a></button>
												</div>
											</td>
											<td><?php echo $row['nama_provider'] ?></td>
											<td><?php echo $row['alias_provider'] ?></td>
											<td><?php echo $row['alamat_provider'] ?></td>
											<td><?php echo $row['telepon_provider'] ?></td>
											<td><?php echo $row['fax_provider'] ?></td>
											<td><?php echo $row['email_provider'] ?></td>
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