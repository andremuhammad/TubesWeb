<body>

<div class="w3-container" style="margin-top:60px" id="showcase">

		    <center><font color="grey"><h1><b>Keanggotaan</b></h1></font></center>
		    <hr />
</div><br>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading">Daftar Anggota Remaja Masjid Al-Akbar Surabaya</div>
<div class="panel-body">
<table class="table table-hover" id="remas">
<thead>
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>TTL</td>
		<td>Kelamin</td>
		<td>Status</td>
		<td>Instansi</td>
		<td>Foto</td>
	</tr>
</thead>
<tbody>
</tbody>
</table>
</div>
</div>
</div>
<div class="form-group">
                     <a href="<?php echo base_url('index.php/Remas_view/tambahAnggota')?>" class="btn btn-success btn-block">Tambah Anggota Remas</a>
            </div>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
			<script src="<?=base_url()?>assets/DataTables/datatables.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function()
				{
			$('#remas').DataTable({
			"processing":true,
			"serverSide":true,
			"lengthMenu":[[5,10,20,-1],[5,10,15,"All"]],
			"ajax":{
				url : "<?php echo site_url('Remas/data_server') ?>",
				type : "POST"
			},
			"columnDefs":
			[
				{
					"targets":0,
					"data":"no",
				},
				{
					"targets":1,
					"data":"nama",
				},
				{
					"targets":2,
					"data":"ttl",
				},
				{
					"targets":3,
					"data":"kelamin",
				},
				{
					"targets":4,
					"data":"status",
				},
				{
					"targets":5,
					"data":"instansi",
				},
				{
					"targets":6,
					"data":"foto",
					"render":function(data,type,full,meta){
						return '<img src="<?=base_url()?>assets/upload/'+data+'">';
					}
				},
				
			]
			});
		});
	</script>

<?php $this->load->view('footer'); ?>
</body>