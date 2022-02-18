<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
		<tr>
			<th>Kode Supplier</th>
			<th>Nama Supplier</th>
			<th>Alamat</th>
			<th>No Telepon</th>
		</tr>

		<?php 
		foreach($supplier as $spl) : ?>
			<tr>
				<td><?php echo $spl->kd_supplier ?></td>
				<td><?php echo $spl->nm_supplier ?></td>
				<td><?php echo $spl->alamat ?></td>
				<td><?php echo $spl->no_telp ?></td>
			</tr>
		<?php endforeach; ?>

	</table>
	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>