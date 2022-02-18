<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> EDIT DATA BARANG MASUK</h3>

	<?php foreach($brgmasuk as $bkr) : ?>

		<form method="post" action="<?php echo base_url().'data_brgmasuk/update' ?>">

			<div class="for-group">
				<input type="hidden" name="id_brgmasuk" class="form-control" value="<?php echo $bkr->id_brgmasuk ?>">
			</div>

			<div class="for-group">
				<label>Kode Barang</label>
				<input type="text" name="kd_barang" class="form-control" value="<?php echo $bkr->kd_barang ?>">
			</div>

			<div class="for-group">
				<label>Tanggal Masuk</label>
				<input type="date" name="tgl_masuk" class="form-control" value="<?php echo $bkr->tgl_masuk ?>">
			</div>

			<div class="for-group">
				<label>Jumlah</label>
				<input type="text" name="jumlah" class="form-control" value="<?php echo $bkr->jumlah ?>">
			</div>

			<div class="for-group">
				<label>Kode Supplier</label>
				<input type="text" name="kd_supplier" class="form-control" value="<?php echo $bkr->kd_supplier ?>">
			</div>
			 <button type="submit" class="btn btn-primary btn-md mt-3">Simpan</button>
			<button type="submit" class="btn btn-danger btn-md mt-3 ml-1" data-dismiss="modal">Close</button>

		</form>

	<?php endforeach; ?>
</div>