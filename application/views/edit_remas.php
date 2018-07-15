<?php $this->load->view('boot'); ?>
<?php $this->load->view('header_admin'); ?>
<div>
	<legend>Edit Remas</legend> 
	<?php echo validation_errors(); ?>
	<?php echo form_open_multipart('Remas/update/'.$this->uri->segment(3)); ?>
			<div class="form-group">
				<label for="">Nama </label>
				<input type="text" class="form-control"  name="nama" placeholder="Input Nama" value="<?php echo $anggota[0]->nama ?>">
			</div>	

			<div class="form-group">
				<label for="">Gender </label><br>
				<label class="radio-inline"><input type="radio" name="kelamin" value="laki laki" value="<?php echo $anggota[0]->kelamin ?>">Laki Laki</label>
				<label class="radio-inline"><input type="radio" name="kelamin" value="perempuan" value="<?php echo $anggota[0]->kelamin ?>">Perempuan</label>
			</div>

				<div class="form-group">
					<label for="ttl">TTL</label>
					<input type="date" name="ttl" class="form-control" placeholder="Input tanggal" value="<?php echo $anggota[0]->ttl ?>">
				</div>

				<div class="form-group">
				  <label for="status">Status</label>
				  <select class="form-control" name="status" value="<?php echo $anggota[0]->status ?>">
				    <option>Pelajar</option>
				    <option>Mahasiswa</option>
				    <option>Bekerja</option>
				    <option>Dll</option>
				  </select>
				</div>

				<div class="form-group">
				<label for="">Instansi </label>
				<input type="text" class="form-control"  name="instansi" placeholder="isikan nama sekolah,perguruan tinggi,perusahaan dan lain lain" value="<?php echo $anggota[0]->instansi ?>">
				</div>

				<div class="form-group">
				  <label for="comment">Motto</label>
				  <textarea class="form-control" rows="5" name="motto" value="<?php echo $anggota[0]->motto ?>"></textarea>
				</div>

				<div class="form-group">
				<label for="">password</label>
				<input type="text" class="form-control"  name="password" value="<?php echo $anggota[0]->password ?>">
				</div>
				
				<div class="form-group">
				<label for="">foto</label><br>
				<img src=<?=base_url("assets/upload")."/".$anggota[0]->foto?>>
				<input type="file" class="form-control"  name="foto" >
				</div>
	
				<div>
					<button type="submit" class="btn btn-primary btn-block">Simpan pembaruan</button>
					<?php echo form_close(); ?>
				</div>
</div>
