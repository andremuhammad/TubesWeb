<title>Create New</title>
<body>
<div class="container">
<div class="w3-container" style="margin-top:10px" id="showcase">
		    <h1 class="w3-xxxlarge w3-text-red" align="left"><b>Tambahkan Anggota Baru</b></h1>
		    <hr style="width:1100px;border:10px solid blue" class="w3-round">
</div>
			<?php echo form_open_multipart('Remas/create'); ?>
			<?php echo validation_errors(); ?>
			<div class="form-group">
				<label for="">Nama </label>
				<input type="text" class="form-control"  name="nama" placeholder="Input Nama">
			</div>

			<div class="form-group">
				<label for="">Gender </label><br>
				<label class="radio-inline"><input type="radio" name="kelamin" value="laki laki">Laki Laki</label>
				<label class="radio-inline"><input type="radio" name="kelamin" value="perempuan">Perempuan</label>
			</div>

				<div class="form-group">
					<label for="ttl">TTL</label>
					<input type="date" name="ttl" class="form-control" placeholder="Input tanggal">
				</div>

				<div class="form-group">
				  <label for="status">Status</label>
				  <select class="form-control" name="status">
				    <option>Pelajar</option>
				    <option>Mahasiswa</option>
				    <option>Bekerja</option>
				    <option>Dll</option>
				  </select>
				</div>

				<div class="form-group">
				<label for="">Instansi </label>
				<input type="text" class="form-control"  name="instansi" placeholder="isikan nama sekolah,perguruan tinggi,perusahaan dan lain lain">
				</div>

				<div class="form-group">
				  <label for="comment">Motto</label>
				  <textarea class="form-control" rows="5" name="motto"></textarea>
				</div>

				<div class="form-group">
				<label for="">foto</label>
				<input type="file" class="form-control"  name="foto">
				</div>

			<div>
			<button type="submit" class="btn btn-primary btn-block">Tambahkan Anggota</button>
			</div>
			<?php echo form_close(); ?>
</div>
</body>
