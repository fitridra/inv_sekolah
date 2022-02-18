<div class="container-fluid">
	<button class="btn btn-sm btn-primary mt-2" data-toggle="modal" data-target="#tambah_brgmasuk"><i class="fas fa-plus fa-sm"></i> Tambah Barang Masuk</button>

  <a class="btn btn-sm btn-danger mt-2" href=" <?php echo base_url('data_brgmasuk/print') ?>"><i class="fa fa-print"></i> Print</a>
  

    <div class="d-inline-block form-inline mb-3 float-right">
    <?php echo form_open('data_brgmasuk/search') ?>
    <input type="text" name="keyword" class="form-control pull-right" placeholder="Search">
    <button type="submit" class="btn btn-primary"><i class="fas fa-search fa-sm"></i></button>
    <?php echo form_close() ?>
    </div>

	<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th>Kode Barang Masuk</th>
      <th>Tanggal Masuk</th>
			<th>Jumlah</th>
			<th>Kode Supplier</th>
			<th colspan="2">OPSI</th>
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
				<td><?php echo anchor('data_brgmasuk/edit/' .$bmk->id_brgmasuk, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
				<td><?php echo anchor('data_brgmasuk/hapus/' .$bmk->id_brgmasuk, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
			</tr>
		<?php endforeach; ?>

	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_brgmasuk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT BARANG MASUK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?php echo base_url().'data_brgmasuk/tambah_opsi' ?>" method="post" enctype="multipart/form-data" >

      		<div class="form-group">
      			<label>Kode Barang Masuk</label>
      			<input type="text" name="kd_brgmasuk" class="form-control">
      		</div>

          <div class="form-group">
            <label>Tanggal Masuk</label>
            <input type="date" name="tgl_masuk" class="form-control">
          </div>

      		<div class="form-group">
      			<label>Jumlah</label>
      			<input type="text" name="jumlah" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Kode Supplier</label>
      			<input type="text" name="kd_supplier" class="form-control">
      		</div>
      	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      </form>
      
    </div>
  </div>
</div>