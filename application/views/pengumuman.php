<body>
<div class="container">
<div class="w3-container" style="margin-top:60px" id="showcase">
		    <center><font color="white"><h1><b>Informasi</b></h1></font></center>
		    <hr />
</div>

<?php foreach ($pengumuman as $key) { ?>
<pre>
	<center><font size="5" face="Arial Black">REMAJA MASJID AL - AKBAR 
	SURABAYA</font></center>
	
	<hr color="black" width="75%" height="10%">

Yang Terhormat,
Kepada	: <?php echo $key->kepada ?><br>

<b>Assalammualaikum</b><br>
	Dengan ridho Allah Subhanahu Wa Ta Ala, Kami mengharapkan Kehadiran Saudara untuk menghadiri acara kegiatan remas yang
insya'allah dilakukan pada :

	Hari	: <?php echo $key->hari ?><br>
	Tanggal	: <?php echo $key->tanggal ?><br>
	Tempat	: <?php echo $key->tempat ?><br>
	Pukul	: <?php echo $key->waktu ?><br>
	Acara	: <?php echo $key->tema ?><br>
		Demikian yang dapat kami sampaikan. atas perhatiannya kami sampaikan terima kasih<br>
<b>Wassalamualaikum Warohmatullahi Wabarokatuh</b>

<center>
	Ketua Remas<br>
	TTD<br>
	Sulaiman Faruk H.
</center>
</pre>
<?php } $this->load->view('footer'); ?>
<!--?php }	?-->
</div>

</body>

