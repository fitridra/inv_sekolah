<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> EDIT DATA SUPPLIER</h3>

	<?php foreach($supplier as $spl) : ?>

		<form method="post" action="<?php echo base_url().'data_supplier/update' ?>">

			<div class="for-group">
				<input type="hidden" name="kd_supplier" class="form-control" value="<?php echo $spl->kd_supplier ?>">
			</div>

			<div class="for-group">
				<label>Nama Supplier</label>
				<input type="text" name="nm_supplier" class="form-control" value="<?php echo $spl->nm_supplier ?>">
			</div>

			<div class="for-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control" value="<?php echo $spl->alamat ?>">
			</div>

			<div class="for-group">
				<label>No Telepon</label>
				<input type="text" name="no_telp" class="form-control" value="<?php echo $spl->no_telp ?>">
			</div>

			 <button type="submit" class="btn btn-primary btn-md mt-3">Simpan</button>
			<button type="submit" class="btn btn-danger btn-md mt-3 ml-1" data-dismiss="modal">Close</button>
		</form>

	<?php endforeach; ?>
</div>