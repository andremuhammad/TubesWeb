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
  <center><h2><b>DATA ARTIKEL</b></h2></center>
  <hr />
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
		<th><h3>Judul</h3></th>
		<th><h3>Artikel</h3></th>
		<th><h3>Aksi</h3></th>
	</tr>
</thead>

		<?php foreach ($remas_artikel as $key) { ?>
			<tr>
			<td><?php echo $key->judul ?></td>
			<td><?php echo $key->artikel ?></td>
			<td><a href="<?=site_url()?>/Remas/deleteArtikel/<?php echo $key->no ?>" onclick="javascript:return confirm(\'Anda yakin?\');">Hapus</a></td>
			</tr>
		<?php } ?>
		</tbody>
		</table>
	</div>
</div>
</body>
</html>