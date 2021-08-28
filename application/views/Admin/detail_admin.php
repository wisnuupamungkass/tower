<header class="panel-heading"><center><h1>HAPUS ADMIN</h1></center></header>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
        <header class="panel-heading"></header>
			<div class="panel-body">
				<div class="form">
					<table class="table table-striped table-bordered">
						<tbody >
						<?php foreach($query->result_array() as $row) { ?>
						  <tr>
							<th> ID Admin</th>
							<td> : </td>
							<td ><?php echo $row['id_user'] ?></td>
						  </tr>
						  <tr>
							<th> Nama Lengkap</th>
							<td> : </td>
							<td><?php echo $row['nama'] ?></td>
						  </tr>
						  <tr>
						   <th> Email</th>
						   <td> : </td>
							<td><?php echo $row['email'] ?></td>
						  </tr>
						  <tr>
							<th> Username</th>
							<td> : </td>
							<td><?php echo $row['username'] ?></td>
						  </tr>
						  <tr>
							<th> Foto</th>
							<td> : </td>
							<td><img width="50%" src="<?php echo base_url('images/Admin/'.$row['foto']);?>"></td>
						  </tr>
						  <?php } ?>
						</tbody>
					</table>
				</div>
				<div align="center">
					<?php
						echo anchor('Menara/hapus/ya/'.$row['id_user'],'<button class="btn btn-danger"><span class="icon_close_alt2 "></span> Yes </button>');
						echo "  ".anchor('Menara/daftar_admin','<button class="btn btn-primary"><span class="icon_house_alt"></span> Cancel </button>');
					?>
				</div>
			</div>
		</div>