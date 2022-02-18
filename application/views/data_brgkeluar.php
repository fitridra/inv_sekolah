<div class="container-fluid">
	<button class="btn btn-sm btn-primary mt-2" data-toggle="modal" data-target="#tambah_brgkeluar"><i class="fas fa-plus fa-sm"></i> Tambah Barang Keluar</button>

  <a class="btn btn-sm btn-danger mt-2" href=" <?php echo base_url('data_brgkeluar/print') ?>"><i class="fa fa-print"></i> Print</a>
  

    <div class="d-inline-block form-inline mb-3 float-right">
    <?php echo form_open('data_brgkeluar/search') ?>
    <input type="text" name="keyword" class="form-control pull-right" placeholder="Search">
    <button type="submit" class="btn btn-primary"><i class="fas fa-search fa-sm"></i></button>
    <?php echo form_close() ?>
    </div>

	<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th>Kode Barang Keluar</th>
      <th>Tanggal Keluar</th>
			<th>Jumlah</th>
			<th>Lokasi</th>
			<th>Penerima</th>
			<th>Keterangan</th>
			<th colspan="2">OPSI</th>
		</tr>

		<?php 
    $id_brgkeluar=1;
		foreach($brgkeluar as $bkr) : ?>
			<tr>
				<td><?php echo $id_brgkeluar++ ?></td>
				<td><?php echo $bkr->kd_barang ?></td>
        <td><?php echo $bkr->tgl_keluar ?></td>
				<td><?php echo $bkr->jumlah ?></td>
				<td><?php echo $bkr->lokasi ?></td>
				<td><?php echo $bkr->penerima ?></td>
				<td><?php echo $bkr->keterangan ?></td>
				<td><?php echo anchor('data_brgkeluar/edit/' .$bkr->id_brgkeluar, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
				<td><?php echo anchor('data_brgkeluar/hapus/' .$bkr->id_brgkeluar, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
			</tr>
		<?php endforeach; ?>

	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_brgkeluar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT BARANG KELUAR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?php echo base_url().'data_brgkeluar/tambah_opsi' ?>" method="post" enctype="multipart/form-data" >

      		<div class="form-group">
      			<label>Kode Barang Keluar</label>
      			<input type="text" name="kd_brgkeluar" class="form-control">
      		</div>

          <div class="form-group">
            <label>Tanggal Keluar</label>
            <input type="date" name="tgl_keluar" class="form-control">
          </div>

      		<div class="form-group">
      			<label>Jumlah</label>
      			<input type="text" name="jumlah" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Lokasi</label>
      			<input type="text" name="lokasi" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Penerima</label>
      			<input type="text" name="penerima" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Keterangan</label>
      			<input type="text" name="keterangan" class="form-control">
      		</div>
      	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      </form>
      
    </div>
  </div>
</div>