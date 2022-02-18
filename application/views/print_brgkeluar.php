<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th>Kode Barang Keluar</th>
      <th>Tanggal Keluar</th>
			<th>Jumlah</th>
			<th>Lokasi</th>
			<th>Penerima</th>
			<th>Keterangan</th>
		</tr>

		<?php 
    $id_brgkeluar=1;
		foreach($brgkeluar as $bkr) : ?>
			<tr>
				<td><?php echo $id_brgkeluar++ ?></td>
				<td><?php echo $bkr->kd_barang ?></td>
        <td><?php echo $bkr->tgl_keluar ?></td>
				<td><?php echo $bkr->jumlah ?></td>
				<td><?php echo $bkr->lokasi ?></td>
				<td><?php echo $bkr->penerima ?></td>
				<td><?php echo $bkr->keterangan ?></td>
			</tr>
		<?php endforeach; ?>

	</table>
	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>