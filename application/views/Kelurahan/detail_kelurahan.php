<header class="panel-heading"><center><h1>HAPUS KELURAHAN</h1></center></header>
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
							<th align ="center"><i class="icon_lock_alt"></i> ID Kecamatan</th>
							<td> : </td>
							<td><?php echo $row['nama_kecamatan'] ?></td>
						  </tr>
						  <tr>
							<th align ="center"><i class="icon_lock_alt"></i> ID Kelurahan</th>
							<td> : </td>
							<td><?php echo $row['id_kelurahan'] ?></td>
						  </tr>
						  <tr>
							<th><i class="icon_profile"></i> Nama Kelurahan</th>
							<td> : </td>
							<td><?php echo $row['nama_kelurahan'] ?></td>
						  </tr>
						  <?php } ?>
						 </tbody>
					</table>
				</div>
				<div align="center">
					  <?php
						echo anchor('Kelurahan/hapus/ya/'.$row['id_kelurahan'],'<button type="button" class="btn btn-danger"><span class="icon_close_alt2 "></span> Yes </button>');
						echo "  ".anchor('Kelurahan/daftar_kelurahan','<button type="button" class="btn btn-primary"><span class="icon_house_alt"></span> Cancel </button>');
					  ?>
				</div>
			</div>
	</div>
</div>