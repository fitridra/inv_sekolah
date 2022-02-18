<div class="container-fluid">
	
	<a class="btn btn-danger" href=" <?php echo base_url('user/data_peminjaman_user/print') ?>"><i class="fa fa-print"></i> Print</a>
	
		<div class="d-inline-block form-inline mb-3 float-right">
		<?php echo form_open('user/data_peminjaman_user/search') ?>
		<input type="text" name="keyword" class="form-control pull-right" placeholder="Search">
		<button type="submit" class="btn btn-primary"><i class="fas fa-search fa-sm"></i></button>
		<?php echo form_close() ?>

	</div>

	<table class="table table-bordered">
		<tr>
			<th>Kode peminjaman</th>
			<th>Nama peminjam</th>
			<th>Kode peminjaman</th>
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
				<td><?php echo $pjm->kd_peminjaman ?></td>
				<td><?php echo $pjm->jumlah ?></td>
				<td><?php echo $pjm->kondisi ?></td>
				<td><?php echo $pjm->tgl_pinjam ?></td>
				<td><?php echo $pjm->tgl_kembali ?></td>
				<td><?php echo $pjm->status ?></td>
			</tr>
		<?php endforeach; ?>

	</table>
</div>