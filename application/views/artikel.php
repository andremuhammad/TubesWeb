<body >
	<div class="w3-container" style="margin-top:60px" id="showcase">
		    <h1><center><font color="white"><b>Kumpulan Artikel</b></h1></font></center>
		    <hr/>
		</div>

		<table class="table">
    
		<?php foreach ($remas_artikel as $key) { ?>
			<table class="table" border="5">
			<tbody>
			<tr>
			<th><h2><font color="white"><?php echo $key->judul ?></font></h2></th>
			</tr>
			<tr class="navbar-default">
			<td>
			<div class="content-section-a">
		        <div class="container">
		            <div class="row">
		                <div class="col-lg-12 col-sm-7 ">
		                    <!--hr class="section-heading-spacer"-->
		                    <div class="clearfix"></div>
		                    <p class="lead"><?php echo $key->artikel ?></p>
		                </div>
		                <br><br>
		            </div>
		        </div>
		        <!-- /.container -->
		    </div>
		    </td>
		    </tr>
		    </tbody>
		    </table>
	
		<?php } $this->load->view('footer'); ?>

</body>