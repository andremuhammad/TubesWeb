 <body>
 	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="w3-container">
		    <h2><b>Artikel</b></h2>
		    <hr/>
		 
			<?php echo form_open_multipart('Remas/tambahArtikel'); ?>
			<?php echo validation_errors(); ?>
			<div class="alert-success"-->
				<div class="form-group">
					<label for="">Judul&nbsp&nbsp:</label>
					<input type="text" class="form-control" name="judul" placeholder="Judul Artikel">
				</div>
			<br>
				<div class="form-group">
				  	<label for="">Artikel&nbsp:</label>
				  	<textarea class="form-control" rows="5" name="artikel" placeholder="Isi Artikel"></textarea>
				</div>
			<br>
			<div>
			<button type="submit" class="btn btn-primary btn-block">Publish Artikel</button>
			</div>
			</div>
			<?php echo form_close(); ?>
</div>
</div>
</body>
