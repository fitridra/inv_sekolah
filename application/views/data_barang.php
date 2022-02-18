<div class="container-fluid">
	<button class="btn btn-sm btn-primary mt-2" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>

  <a class="btn btn-sm btn-danger mt-2" href=" <?php echo base_url('data_barang/print') ?>"><i class="fa fa-print"></i> Print</a>
  

    <div class="d-inline-block form-inline mb-3 float-right">
    <?php echo form_open('data_barang/search') ?>
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
			<th colspan="2">OPSI</th>
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
				<td><?php echo anchor('data_barang/edit/' .$brg->kd_barang, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
				<td><?php echo anchor('data_barang/hapus/' .$brg->kd_barang, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
			</tr>
		<?php endforeach; ?>

	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT BARANG</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?php echo base_url().'data_barang/tambah_opsi' ?>" method="post" enctype="multipart/form-data" >

      		<div class="form-group">
      			<label>Kode Barang</label>
      			<input type="text" name="kd_barang" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Nama Barang</label>
      			<input type="text" name="nm_barang" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Spesifikasi</label>
      			<input type="text" name="spesifikasi" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Lokasi</label>
      			<input type="text" name="lokasi" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Kondisi</label>
      			<input type="text" name="kondisi" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Stok</label>
      			<input type="text" name="stok" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Sumber Dana</label>
      			<input type="text" name="sumber_dana" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Keterangan</label>
      			<input type="text" name="keterangan" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Jenis Barang</label>
      			<input type="text" name="jns_barang" class="form-control">
      		</div>
      		
      	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      </form>
      
    </div>
  </div>
</div>