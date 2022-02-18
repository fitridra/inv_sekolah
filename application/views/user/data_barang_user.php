<div class="container-fluid">

	<a class="btn btn-danger" href=" <?php echo base_url('user/data_barang_user/print') ?>"><i class="fa fa-print"></i> Print</a>
	

		<div class="d-inline-block form-inline mb-3 float-right">
		<?php echo form_open('user/data_barang_user/search') ?>
		<input type="text" name="keyword" class="form-control pull-right" placeholder="Search">
		<button type="submit" class="btn btn-primary"><i class="fas fa-search fa-sm"></i></button>
		<?php echo form_close() ?>

	</div>

	<table class="table table-bordered">
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
</div>