<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
	<tr>
			<th>Kode peminjaman</th>
			<th>Nama peminjam</th>
			<th>Kode Barang</th>
			<th>Jumlah</th>
			<th>Kondisi</th>
			<th>Tanggal Pinjam</th>
			<th>Tanggal Kembali</th>
			<th>Status</th>
		</tr>

		<?php 
		foreach($peminjaman as $pjm) : ?>
			<tr>
				<td><?php echo $pjm->kd_peminjaman ?></td>
				<td><?php echo $pjm->nm_peminjam ?></td>
				<td><?php echo $pjm->kd_barang ?></td>
				<td><?php echo $pjm->jumlah ?></td>
				<td><?php echo $pjm->kondisi ?></td>
				<td><?php echo $pjm->tgl_pinjam ?></td>
				<td><?php echo $pjm->tgl_kembali ?></td>
				<td><?php echo $pjm->status ?></td>
			</tr>
		<?php endforeach; ?>

	</table>
		<script type="text/javascript">
		window.print();
	</script>
</body>
</html>