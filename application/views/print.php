<body>
<?php foreach ($print as $key) { ?>

<div class="container">
<pre>
	<hr width="100%" height="20%">
	<center><font size="5" face="Arial Black">REMAJA MASJID AL MUTTAQIEN
	DSN.TAMBAKBOYO, DS.TAMBAKRIGADUNG, KEC.TIKUNG<br>KAB.LAMONGAN</font></center>
	<hr width="100%" height="20%">
<br>	
Yang Terhormat<br>
Kepada	: <?php echo $key->kepada ?><br><br><br>

<b>Assalammualaikum</b><br><br>
	Dengan ridho Allah Subhanahu Wa Ta Ala, Kami mengharapkan Kehadiran Saudara<br> untuk menghadiri acara kegiatan remas yang
insya'allah dilakukan pada : <br><br>

	Hari	    : <?php echo $key->hari ?><br>
	Tanggal	 : <?php echo $key->tanggal ?><br>
	Tempat	  : <?php echo $key->tempat ?><br>
	Pukul	   : <?php echo $key->waktu ?><br>
	Acara	   : <?php echo $key->tema ?><br><br>
		Demikian yang dapat kami sampaikan. atas perhatiannya kami sampaikan<br> terima kasih <br><br>
<b>Wassalamualaikum Warohmatullahi Wabarokatuh</b><br><br><br><br><br><br>

<center>
	Ketua Remas <br><br><br>
	TTD <br><br><br>
	Anugrah Wahyu .P.
</center>
</pre>
<?php }	?>	
</div>
</body>
</html>