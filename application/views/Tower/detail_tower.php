<header class="panel-heading"><center><h1>HAPUS TOWER</h1></center></header>
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
						<th> ID Site</th>
						<td> : </td>
						<td><?php echo $row['id_site'] ?></td>
					  </tr>
					  <tr>
						<th> Tipe Menara</th>
						<td> : </td>
						<td><?php echo $row['tipe_menara'] ?></td>
					  </tr>
					  <tr>
					   <th> Tinggi Menara</th>
					   <td> : </td>
						<td><?php echo $row['tinggi_menara'] ?></td>
					  </tr>
					  <tr>
						<th> Eksisting Antena</th>
						<td> : </td>
						<td><?php echo $row['eksisting_antena'] ?></td>
					  </tr>
					  <tr>
						<th> Tinggi Antena</th>
						<td> : </td>
						<td><?php echo $row['tinggi_antena'] ?></td>
					  </tr>
					  <tr>
						<th> Foto Tower</th>
						<td> : </td>
						<td><img width="50%" src="<?php echo base_url('images/Tower/'.$row['foto_menara']);?>"></td>
					  </tr>
					  <?php } ?>
					</tbody>
				</table>
			</div>
			<div align="center">
				  <?php
					echo anchor('Tower/hapus/ya/'.$row['id_site'],'<button class="btn btn-danger"><span class="icon_close_alt2 "></span> Yes </button>');
					echo "  ".anchor('Tower/daftar_tower','<button class="btn btn-primary"><span class="icon_house_alt"></span> Cancel </button>');
				  ?>
			</div>
		</div>
	</div>