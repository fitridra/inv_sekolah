<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> EDIT DATA BARANG</h3>

	<?php foreach($barang as $brg) : ?>

		<form method="post" action="<?php echo base_url().'data_barang/update' ?>">

			<div class="for-group">
				<input type="hidden" name="kd_barang" class="form-control" value="<?php echo $brg->kd_barang ?>">
			</div>

			<div class="for-group">
				<label>Nama Barang</label>
				<input type="text" name="nm_barang" class="form-control" value="<?php echo $brg->nm_barang ?>">
			</div>

			<div class="for-group">
				<label>Spesifikasi</label>
				<input type="text" name="spesifikasi" class="form-control" value="<?php echo $brg->spesifikasi ?>">
			</div>

			<div class="for-group">
				<label>Lokasi</label>
				<input type="text" name="lokasi" class="form-control" value="<?php echo $brg->lokasi ?>">
			</div>

			<div class="for-group">
				<label>Kondisi</label>
				<input type="text" name="kondisi" class="form-control" value="<?php echo $brg->kondisi ?>">
			</div>

			<div class="for-group">
				<label>Stok</label>
				<input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
			</div>

			<div class="for-group">
				<label>Sumber Dana</label>
				<input type="text" name="sumber_dana" class="form-control" value="<?php echo $brg->sumber_dana ?>">
			</div>

			<div class="for-group">
				<label>Keterangan</label>
				<input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
			</div>
			
			<div class="for-group">
				<label>Jenis Barang</label>
				<input type="text" name="jns_barang" class="form-control" value="<?php echo $brg->jns_barang ?>">
			</div>

			<button type="submit" class="btn btn-primary btn-md mt-3">Simpan</button>
			<button type="submit" class="btn btn-danger btn-md mt-3 ml-1" data-dismiss="modal">Close</button>

		</form>

	<?php endforeach; ?>
</div>