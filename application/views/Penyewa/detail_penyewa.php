<header class="panel-heading"><center><h1>HAPUS PENYEWA</h1></center></header>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
        <header class="panel-heading"></header>
			<div class="panel-body">
				<div class="form">
					<table class="table table-striped table-bordered">
				      <tbody>
				        <?php
				       foreach($query->result_array() as $row)
				        { ?>
				      <tr>
						<th><i class="icon_lock_alt"></i> ID Penyewa</th>
						<td> : </td>
				        <td><?php echo $row['id_penyewa'] ?></td>
					  </tr>
					  <tr>
						<th><i class="icon_lock_alt"></i> ID Site</th>
						<td> : </td>
				        <td><?php echo $row['id_site'] ?></td>
					  </tr>
					  <tr>
					    <th><i class="icon_profile"></i> Penyewa 1</th>
						<td> : </td>
						<td><?php echo $row['penyewa_1'] ?></td>
					  </tr>
					  <tr>
					    <th><i class="icon_profile"></i> Penyewa 2</th>
						<td> : </td>
						<td><?php echo $row['penyewa_2'] ?></td>
					  </tr>
					  <tr>
					    <th><i class="icon_profile"></i> Penyewa 3</th>
						<td> : </td>
						<td><?php echo $row['penyewa_3'] ?></td>
					  </tr>
					  <?php } ?>
				      </tbody>
				      </table>
 				</div>
				<div align="center">
					  <?php
						echo anchor('Penyewa/hapus/ya/'.$row['id_penyewa'],'<button class="btn btn-danger"><span class="icon_close_alt2 "></span> Yes </button>');
						echo "  ".anchor('Penyewa/daftar_penyewa','<button class="btn btn-primary"><span class="icon_house_alt"></span> Cancel </button>');
					  ?>
				</div>
			</div>
		</section>
		</div>
	</div>