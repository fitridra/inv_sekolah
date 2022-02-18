<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<table>
		<tr>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Spesifikasi</th>
			<th>Lokasi</th>
			<th>Kondisi</th>
			<th>Stok</th>
			<th>Sumber Dana</th>
			<th>Keterangan</th>
			<th>Jenis Barang</th>
		</tr>

		<?php 
		foreach($barang as $brg) : ?>
			<tr>
				<td><?php echo $brg->kd_barang ?></td>
				<td><?php echo $brg->nm_barang ?></td>
				<td><?php echo $brg->spesifikasi ?></td>
				<td><?php echo $brg->lokasi ?></td>
				<td><?php echo $brg->kondisi ?></td>
				<td><?php echo $brg->stok ?></td>
				<td><?php echo $brg->sumber_dana ?></td>
				<td><?php echo $brg->keterangan ?></td>
				<td><?php echo $brg->jns_barang ?></td>
			</tr>
		<?php endforeach; ?>

	</table>

	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>