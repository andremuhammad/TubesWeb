<!DOCTYPE html>
<html>
<head>
<title>Pengumuman</title>
<?php $this->load->view('boot'); ?>
</head>
<body>
<?php foreach ($preview as $key) { ?>

<div class="container">
<p style="text-align: center"><a href="<?=site_url()?>/cetak/cetakPdf/<?php echo $key->no ?>"><button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-print"></span>   Download Undangan</button></a></p>
<pre>

	<center><font size="5" face="Arial Black">REMAJA MASJID AL MUTTAQIEN
	DSN.TAMBAKBOYO, DS.TAMBAKRIGADUNG, KEC.TIKUNG<br>KAB.LAMONGAN</font></center>
	<hr width="100%" height="20%">
<br>	
Yang Terhormat
Kepada	: <?php echo $key->kepada ?><br>

<b>Assalammualaikum</b><br>
	Dengan ridho Allah Subhanahu Wa Ta Ala, Kami mengharapkan Kehadiran Saudara untuk menghadiri acara kegiatan remas yang
insya'allah dilakukan pada :

	Hari	: <?php echo $key->hari ?><br>
	Tanggal	: <?php echo $key->tanggal ?><br>
	Tempat	: <?php echo $key->tempat ?><br>
	Pukul	: <?php echo $key->waktu ?><br>
	Acara	: <?php echo $key->tema ?><br>
		Demikian yang dapat kami sampaikan. atas perhatiannya kami sampaikan terima kasih
<b>Wassalamualaikum Warohmatullahi Wabarokatuh</b>

<center>
	Ketua Remas
	TTD
	Anugrah Wahyu .P.
</center>
</pre>
<?php }	?>	
</div>
</body>
</html>