<?php $this->load->view('header'); ?>
<body>
<div class="container">
  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
    <?php echo form_open('LoginAnggota/cekLoginAnggota'); ?>
    <br><br><br><br><br><br><br><br><br>
        <div class="panel panel-default">
          <div class="panel-heading">
            <strong><legend><center class="panel-title">LOGIN PAGE</center></legend></strong>
        
            <?php echo validation_errors(); ?>
            
                <div class="form-group">
                    <a href="<?php echo base_url('index.php/Remas_view/userAnggota')?>" class="btn btn-lg btn-primary btn-block">Login Anggota</a>
                </div>
                
                <div class="form-group">
                    <a href="<?php echo base_url('index.php/Remas_view/userAdmin' )?>" class="btn btn-lg btn-info btn-block">Login Admin</a>
                </div>
                
                <div class="form-group">
                    <a href="<?php echo base_url('index.php/Remas_view/tambahAnggota' )?>" class="btn btn-lg btn-success btn-block">Daftar</a>
                </div>
                <!--a href="<?php echo base_url('index.php/Login/register') ?>" class="btn btn-lg btn-success btn-block">REGISTER</a-->
    
</div>
</div>




<!--body background="<?php echo base_url();?>images/allah.jpg">
<style type="text/css">
	h1{
		color: white;
	}
</style>
</body>
 <!-- Header -->
  <!--div class="w3-container" style="margin-top:60px" id="showcase">
 <center>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>ASSALAMMUALAIKUM</h1>
                        <br><br><br><br><br><br><br><br><br>
                        <h1>Login Sebagai</h1>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="<?=base_url()?>index.php/Remas_view/userAnggota" class="btn btn-default btn-lg"> <span class="network-name">Saya Anggota</span></a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>index.php/Remas_view/userAdmin" class="btn btn-default btn-lg"> <span class="network-name">Saya Admin</span></a>
                            </li>
                            <li>
                                <a href="" target="_blank" Onclick="window.open('<?=base_url()?>index.php/Remas_view/tambahAnggota','sub','100','200' )" class="btn btn-default btn-lg"> <span class="network-name">Saya Mendaftar</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
     	</div></center>
        <!-- /.container -->
