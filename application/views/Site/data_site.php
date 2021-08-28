<html>
<head>
	<title>DETAIL SITE</title>
</head>
<header class="panel-heading"><center><h1>DETAIL SITE</h1></header>
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
									<a href="<?php echo base_url('index.php/Site/tambah') ?>">
										<button type="button" class="btn btn-primary"><i class="fa fa-fw fa-plus"></i> Tambah Site</button>
									</a>
									<a href="<?php echo base_url('index.php/Site/upload') ?>">
										<button type="button" class="btn btn-success"><i class="icon_cloud-upload_alt"></i> Import Excel</button>
									</a>
								</th>
							</tr>
						</table>
						<table id="datatable-buttons" class="table table-striped table-bordered">      
							<thead>  
								<tr>
									<th> ID Site </th>
									<th> Pemilik Menara</th>
									<th> Alamat</th>
									<th> Kelurahan</th>
									<th> Kecamatan</th>
									<th> Latitude</th>
									<th> Longitude</th>
									<th> Lahan</th>
								</tr>
							</thead>
							<tbody>
							<?php
								foreach($cetak->result_array() as $row)
								{ ?>
							  <tr>
								<td align="left">
									<div class="btn-group">
										<button type="button" class="btn btn-warning"><a href="<?php echo base_url('index.php/Site/edit/' .$row['id_site']) ?>"><i class="fa fa-fw fa-edit"></i></a></button>
										<button type="button" class="btn btn-danger" ><a href="<?php echo base_url('index.php/Site/detail_site/' .$row['id_site']) ?>"><i class="icon_close_alt2 "></i></a></button>
									</div>
									<?php echo $row['id_site'] ?>
								</td>
								<td><?php echo $row['nama_provider'] ?></td>								
								<td><?php echo $row['alamat'] ?></td>
								<td><?php echo $row['kelurahan'] ?></td>
								<td><?php echo $row['kecamatan'] ?></td>
								<td><?php echo $row['latitude'] ?></td>
								<td><?php echo $row['longitude'] ?></td>								
								<td><?php echo $row['lahan'] ?></td>
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