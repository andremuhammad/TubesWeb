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
  <center><h2><b>DATA ANGGOTA REMAJA MASJID AL-AKBAR </b></h2></center>
  <hr />
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
      	<td>No</td>
		<td>Nama</td>
		<td>TTL</td>
		<td>Kelamin</td>
		<td>Status</td>
		<td>Instansi</td>
		<td>Aksi</td>
	</tr>
</thead>
<?php foreach ($anggota as $key) { ?>
				<tr>
				<td><?php echo $key->no ?></td>
				<td><?php echo $key->nama ?></td>
				<td><?php echo $key->ttl ?></td>
				<td><?php echo $key->kelamin ?></td>
				<td><?php echo $key->status ?></td>
				<td><?php echo $key->instansi ?></td>
				<td>
					<!--a href="<?=site_url()?>/Remas/update/'+data["no"]+'">Edit</a-->
                <a href="<?=site_url()?>/Remas/update/<?php echo $key->no ?>" class="btn btn-sm btn-info">Edit</a>
				<a href="<?=base_url()?>index.php/Remas/delete/<?php echo $key->no ?>" class="btn btn-sm btn-danger">Hapus</a></td>
              </td>	
				</tr>
			<?php } ?>
</table>
<a href="<?=base_url()?>index.php/Remas_view/tambahAnggota/">
<!--a href="" target="_blank" Onclick="window.open('<?=base_url()?>index.php/Remas_view/tambahAnggota','sub','100','200' )"-->
		 <button type="button" class="btn btn-success btn-block" >Tambah Anggota Baru</button>
		 </a>
</div>
</div>
	
</body>
</html>