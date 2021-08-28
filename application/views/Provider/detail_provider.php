<header class="panel-heading"><center><h1>HAPUS PROVIDER</h1></center></header>
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
							<th> ID Provider</th>
							<td> : </td>
							<td><?php echo $row['id_provider'] ?></td>
						  </tr>
						  <tr>
							<th> Nama Provider</th>
							<td> : </td>
							<td><?php echo $row['nama_provider'] ?></td>
						  </tr>
						  <tr>
							<th> Alias Provider</th>
							<td> : </td>
							<td><?php echo $row['alias_provider'] ?></td>
						  </tr>
						  <tr>
						   <th> Alamat Provider</th>
						   <td> : </td>
							<td><?php echo $row['alamat_provider'] ?></td>
						  </tr>
						  <tr>
							<th> Telepon Provider</th>
							<td> : </td>
							<td><?php echo $row['telepon_provider'] ?></td>
						  </tr>
						  <tr>
							<th> Fax Provider</th>
							<td> : </td>
							<td><?php echo $row['fax_provider'] ?></td>
						  </tr>
						  <tr>
							<th> Email Provider</th>
							<td> : </td>
							<td><?php echo $row['email_provider'] ?></td>
						  </tr>
						<?php } ?>
						</tbody>
					</table>
					</div>
					<div align="center">
						  <?php
							echo anchor('Provider/hapus/ya/'.$row['id_provider'],'<button class="btn btn-danger"><span class="icon_close_alt2 "></span> Yes </button>');
							echo "  ".anchor('Provider/daftar_provider','<button class="btn btn-primary"><span class="icon_house_alt"></span> Cancel </button>');
						  ?>
					</div>
			</div>
		</div>