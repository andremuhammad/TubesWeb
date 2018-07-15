<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
  <center><h2><b>DATA INFORMASI</b></h2></center>
  <hr />
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
		<th><h3>Acara</h3></th>
		<th><h3>Kepada</h3></th>
		<th><h3>Tempat</h3></th>
		<th><h3>Waktu</h3></th>
		<th><h3>Hari</h3></th>
		<th><h3>Tanggal</h3></th>
		<th><h3>Preview</h3></th>
		<th><h3>Aksi</h3></th>
	</tr>
	</thead>
			<?php foreach ($pengumuman as $key) { ?>
				<tr>
				<td><?php echo $key->tema ?></td>
				<td><?php echo $key->kepada ?></td>
				<td><?php echo $key->tempat ?></td>
				<td><?php echo $key->waktu ?></td>
				<td><?php echo $key->hari ?></td>
				<td><?php echo $key->tanggal ?></td>
				<td><a href="" target="_blank" Onclick="window.open('<?=site_url()?>/Remas_view/preview/<?php echo $key->no ?>','sub','100','200' )">Preview</a></td>
				<td><a href="<?=site_url()?>/Remas/deletePengumuman/<?php echo $key->no ?>">Hapus</a></td>
				</tr>
			<?php } ?>
			</tbody>
			</table>
			<div class="form-group">
                    <a href="<?php echo base_url('index.php/Remas/tambahPengumuman')?>" class="btn btn-success btn-block">Tambah</a>
            </div>
			
		<div class="alert-success">
		<h1 class="w3-xxxlarge w3-text-green"><b>Buat Pengumuman Baru</b></h1>
		<hr style="width:50px;border:5px solid green" class="w3-round">

		 <?php echo form_open_multipart('Remas/tambahPengumuman'); ?>		
			<?php echo validation_errors(); ?>
			
				<div class="form-group">
					<label for="">Tema </label>
					<input type="text" class="form-control"  name="tema" placeholder="">
				</div>	

				<div class="form-group">
				  <label for="">Tanggal</label>
				  <input type="date" class="form-control"  name="tanggal" placeholder="">
				</div>

				<div class="form-group">
					<label for="">Hari </label>
					<input type="text" class="form-control"  name="hari" placeholder="">
				</div>

				<div class="form-group">
					<label for="">Tempat </label>
					<input type="text" class="form-control"  name="tempat" placeholder="">
				</div>

				<div class="form-group">
					<label for="">Waktu </label>
					<input type="text" class="form-control"  name="waktu" placeholder="">
				</div>

				<div class="form-group">
				  <label for="status">Kepada</label>
				  <select class="form-control" name="kepada">
				    <option>Pengurus Remas</option>
				    <option>Anggota Remas</option>
				    <option>Semua Masyarakat</option>
				  </select>
				</div>
			<div>
			<button type="submit" class="btn btn-primary btn-block">Simpan dan Publish</button>
			</div>
			</div>
			<?php echo form_close(); ?>
	</div>
</div>
</body>
</html>