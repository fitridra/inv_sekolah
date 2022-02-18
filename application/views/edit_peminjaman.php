<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> EDIT DATA PEMINJAMAN</h3>

	<?php foreach($peminjaman as $pjm) : ?>

		<form method="post" action="<?php echo base_url().'data_peminjaman/update' ?>">

			<div class="for-group">
				<input type="hidden" name="kd_peminjaman" class="form-control" value="<?php echo $pjm->kd_peminjaman ?>">
			</div>

			<div class="for-group">
				<label>Nama Peminjam</label>
				<input type="text" name="nm_peminjam" class="form-control" value="<?php echo $pjm->nm_peminjam ?>">
			</div>

			<div class="for-group">
				<label>Kode Barang</label>
				<input type="text" name="kd_barang" class="form-control" value="<?php echo $pjm->kd_barang ?>">
			</div>

			<div class="for-group">
				<label>Jumlah</label>
				<input type="text" name="jumlah" class="form-control" value="<?php echo $pjm->jumlah ?>">
			</div>

			<div class="for-group">
				<label>Kondisi</label>
				<input type="text" name="kondisi" class="form-control" value="<?php echo $pjm->kondisi ?>">
			</div>

			<div class="for-group">
				<label>Tanggal Pinjam</label>
				<input type="date" name="tgl_pinjam" class="form-control" value="<?php echo $pjm->tgl_pinjam ?>">
			</div>

			<div class="for-group">
				<label>Tanggal Kembali</label>
				<input type="date" name="tgl_kembali" class="form-control" value="<?php echo $pjm->tgl_kembali ?>">
			</div>

			<div class="for-group">
				<label>Status</label>
				<input type="text" name="status" class="form-control" value="<?php echo $pjm->status ?>">
			</div>

			 <button type="submit" class="btn btn-primary btn-md mt-3">Simpan</button>
			<button type="submit" class="btn btn-danger btn-md mt-3 ml-1" data-dismiss="modal">Close</button>

		</form>

	<?php endforeach; ?>
</div>