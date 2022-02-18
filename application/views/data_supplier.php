<div class="container-fluid">
	<button class="btn btn-sm btn-primary mt-2" data-toggle="modal" data-target="#tambah_supplier"><i class="fas fa-plus fa-sm"></i> Tambah Supplier</button>

  <a class="btn btn-sm btn-danger mt-2" href=" <?php echo base_url('data_supplier/print') ?>"><i class="fa fa-print"></i> Print</a>
  

    <div class="d-inline-block form-inline mb-3 float-right">
    <?php echo form_open('data_supplier/search') ?>
    <input type="text" name="keyword" class="form-control pull-right" placeholder="Search">
    <button type="submit" class="btn btn-primary"><i class="fas fa-search fa-sm"></i></button>
    <?php echo form_close() ?>
    </div>

	<table class="table table-bordered">
		<tr>
			<th>Kode Supplier</th>
			<th>Nama Supplier</th>
			<th>Alamat</th>
			<th>No Telepon</th>
			<th colspan="2">OPSI</th>
		</tr>

		<?php 
		foreach($supplier as $spl) : ?>
			<tr>
				<td><?php echo $spl->kd_supplier ?></td>
				<td><?php echo $spl->nm_supplier ?></td>
				<td><?php echo $spl->alamat ?></td>
				<td><?php echo $spl->no_telp ?></td>
				<td><?php echo anchor('data_supplier/edit/' .$spl->kd_supplier, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
				<td><?php echo anchor('data_supplier/hapus/' .$spl->kd_supplier, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
			</tr>
		<?php endforeach; ?>

	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_supplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT SUPPLIER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?php echo base_url().'data_supplier/tambah_opsi' ?>" method="post" enctype="multipart/form-data" >

      		<div class="form-group">
      			<label>Kode Supplier</label>
      			<input type="text" name="kd_supplier" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Nama Supplier</label>
      			<input type="text" name="nm_supplier" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Alamat</label>
      			<input type="text" name="alamat" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>No Telepon</label>
      			<input type="text" name="no_telp" class="form-control">
      		</div>
      	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      </form>
      
    </div>
  </div>
</div>