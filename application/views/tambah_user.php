<?php $this->load->view('header'); ?>
<div class="container">
  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
	<?php echo form_open('LoginAdmin/register'); ?>
	<br><br><br><br><br><br><br><br><br>
	<div class="panel panel-default">
          <div class="panel-heading">
			<strong><legend><center class="panel-title">REGISTER PAGE</center></legend></strong>
		
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
					<button type="submit" class="btn btn-primary btn-block">Register</button>
				</div>
			</div>
	<?php echo form_close(); 
	?>
</div>
</div>

