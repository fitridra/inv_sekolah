<div class="container-fluid">
	<button class="btn btn-sm btn-primary mt-2" data-toggle="modal" data-target="#tambah_peminjaman"><i class="fas fa-plus fa-sm"></i> Tambah Peminjaman</button>

  <a class="btn btn-sm btn-danger mt-2" href=" <?php echo base_url('data_peminjaman/print') ?>"><i class="fa fa-print"></i> Print</a>
  

    <div class="d-inline-block form-inline mb-3 float-right">
    <?php echo form_open('data_peminjaman/search') ?>
    <input type="text" name="keyword" class="form-control pull-right" placeholder="Search">
    <button type="submit" class="btn btn-primary"><i class="fas fa-search fa-sm"></i></button>
    <?php echo form_close() ?>
    </div>

	<table class="table table-bordered">
		<tr>
			<th>Kode Peminjaman</th>
			<th>Nama Peminjam</th>
			<th>Kode Barang</th>
			<th>Jumlah</th>
			<th>Kondisi</th>
			<th>Tanggal Pinjam</th>
			<th>Tanggal Kembali</th>
			<th>Status</th>
			<th colspan="2">OPSI</th>
		</tr>

		<?php 
		foreach($peminjaman as $pjm) : ?>
			<tr>
				<td><?php echo $pjm->kd_peminjaman ?></td>
				<td><?php echo $pjm->nm_peminjam ?></td>
				<td><?php echo $pjm->kd_barang ?></td>
				<td><?php echo $pjm->jumlah ?></td>
				<td><?php echo $pjm->kondisi ?></td>
				<td><?php echo $pjm->tgl_pinjam ?></td>
				<td><?php echo $pjm->tgl_kembali ?></td>
				<td><?php echo $pjm->status ?></td>
				<td><?php echo anchor('data_peminjaman/edit/' .$pjm->kd_peminjaman, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
				<td><?php echo anchor('data_peminjaman/hapus/' .$pjm->kd_peminjaman, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
			</tr>
		<?php endforeach; ?>

	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_peminjaman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PEMINJAMAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?php echo base_url().'data_peminjaman/tambah_opsi' ?>" method="post" enctype="multipart/form-data" >

      		<div class="form-group">
      			<label>Kode Peminjaman</label>
      			<input type="text" name="kd_peminjaman" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Nama Peminjam</label>
      			<input type="text" name="nm_peminjam" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Kode Barang</label>
      			<input type="text" name="kd_barang" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Jumlah</label>
      			<input type="text" name="jumlah" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Kondisi</label>
      			<input type="text" name="kondisi" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Tanggal Pinjam</label>
      			<input type="date" name="tgl_pinjam" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Tanggal Kembali</label>
      			<input type="date" name="tgl_kembali" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Status</label>
      			<input type="text" name="status" class="form-control">
      		</div>
      	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      </form>
      
    </div>
  </div>
</div>