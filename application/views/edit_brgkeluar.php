<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> EDIT DATA BARANG KELUAR</h3>

	<?php foreach($brgkeluar as $bkr) : ?>

		<form method="post" action="<?php echo base_url().'data_brgkeluar/update' ?>">

			<div class="for-group">
				<input type="hidden" name="id_brgkeluar" class="form-control" value="<?php echo $bkr->id_brgkeluar ?>">
			</div>

			<div class="for-group">
				<label>Kode Barang</label>
				<input type="text" name="kd_barang" class="form-control" value="<?php echo $bkr->kd_barang ?>">
			</div>

			<div class="for-group">
				<label>Tanggal Keluar</label>
				<input type="date" name="tgl_keluar" class="form-control" value="<?php echo $bkr->tgl_keluar ?>">
			</div>

			<div class="for-group">
				<label>Jumlah</label>
				<input type="text" name="jumlah" class="form-control" value="<?php echo $bkr->jumlah ?>">
			</div>

			<div class="for-group">
				<label>Lokasi</label>
				<input type="text" name="lokasi" class="form-control" value="<?php echo $bkr->lokasi ?>">
			</div>

			<div class="for-group">
				<label>Penerima</label>
				<input type="text" name="penerima" class="form-control" value="<?php echo $bkr->penerima ?>">
			</div>

			<div class="for-group">
				<label>Keterangan</label>
				<input type="text" name="keterangan" class="form-control" value="<?php echo $bkr->keterangan ?>">
			</div>

			 <button type="submit" class="btn btn-primary btn-md mt-3">Simpan</button>
			<button type="submit" class="btn btn-danger btn-md mt-3 ml-1" data-dismiss="modal">Close</button>

		</form>

	<?php endforeach; ?>
</div>