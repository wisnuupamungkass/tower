<header class="panel-heading"><center><h1>HAPUS SITE</h1></center></header>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
        <header class="panel-heading"></header>
			<div class="panel-body">
				<div class="form">
					<table class="table table-striped table-bordered">
					  <tbody>
						<?php foreach($query->result_array() as $row) { ?>
						  <tr>
							<th> ID Site</th>
							<td> : </td>
							<td><?php echo $row['id_site'] ?></td>
						  </tr>
						  <tr>
							<th> Pemilik Menara</th>
							<td> : </td>
							<td><?php echo $row['nama_provider'] ?></td>
						  </tr>
						  <tr>
							<th> Alamat</th>
							<td> : </td>
							<td><?php echo $row['alamat'] ?></td>
						  </tr>
						  <tr>
							<th> Kelurahan</th>
							<td> : </td>
							<td><?php echo $row['kelurahan'] ?></td>
						  </tr>
						  <tr>
							<th> Kecamatan</th>
							<td> : </td>
							<td><?php echo $row['kecamatan'] ?></td>
						  </tr>
						  <tr>
							<th> Latitude</th>
							<td> : </td>
							<td><?php echo $row['latitude'] ?></td>
						  </tr>
						  <tr>
							<th> Longitude</th>
							<td> : </td>
							<td><?php echo $row['longitude'] ?></td>
						  </tr>
						  <tr>
							<th> Lahan</th>
							<td> : </td>
							<td><?php echo $row['lahan'] ?></td>
						  </tr>
					  <?php } ?>
					</tbody>
				</table>
			</div>
			<div align="center">
				  <?php
					echo anchor('Site/hapus/ya/'.$row['id_site'],'<button type="button" class="btn btn-danger"><span class="icon_close_alt2 "></span> Yes </button>');
					echo "  ".anchor('Site/daftar_site','<button type="button" class="btn btn-primary"><span class="icon_house_alt"></span> Cancel </button>');
				  ?>
			</div>
		</div>
	</div>
</div>