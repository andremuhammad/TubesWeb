<div class="container">
  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
	<?php echo form_open('LoginAnggota/cekLoginAnggota'); ?>
	<br><br><br><br><br><br><br><br><br>
		<div class="panel panel-default">
          <div class="panel-heading">
			<strong><legend><center class="panel-title">LOGIN ANGGOTA</center></legend></strong>
		
			<?php echo validation_errors(); ?>
			
				<div class="form-group">
					<label for="">Username</label>
					<input type="text" class="form-control"  name="username" placeholder="Input field">
				</div>
				
				<div class="form-group">
					<label for="">Password</label>
					<input type="password" class="form-control"  name="password"  placeholder="Input field">
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">Login</button>
				
			</div>
	<?php echo form_close(); 
	?>
</div>
</div>

