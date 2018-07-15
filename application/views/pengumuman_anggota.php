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
  <center><h2><b>INFORMASI</b></h2></center>
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
				</tr>
			<?php } ?>
			</tbody>
			</table>
</div>
</div>
</body>
