<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
  <a href="<?=base_url()?>index.php/Remas_view/Anggota" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-user"></span> Anggota Remas</a>
  <a href="<?=base_url()?>index.php/Remas_view/tambahArtikel" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-book"></span> Artikel </a>
  <a href="<?=base_url()?>index.php/Remas_view/pengumumanAnggota" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-bullhorn"></span> Informasi</a>
  <a href="<?=base_url()?>index.php/LoginAdmin/logout" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
</div>

<!-- Page Content -->
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
  <div class="w3-container">
    <h1>HALAMAN ANGGOTA </h1>
  </div>
</div>

<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
     
</body>
</html>