<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
		<tr>
			<th>ID</th>
			<th>Kode Barang Masuk</th>
      <th>Tanggal Masuk</th>
			<th>Jumlah</th>
			<th>Kode Supplier</th>
		</tr>

		<?php 
    $id_brgmasuk=1;
		foreach($brgmasuk as $bmk) : ?>
			<tr>
				<td><?php echo $id_brgmasuk++ ?></td>
				<td><?php echo $bmk->kd_barang ?></td>
        <td><?php echo $bmk->tgl_masuk ?></td>
				<td><?php echo $bmk->jumlah ?></td>
				<td><?php echo $bmk->kd_supplier ?></td>
			</tr>
		<?php endforeach; ?>

	</table>
	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>