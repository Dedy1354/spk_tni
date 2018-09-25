<!-- Image grid -->
	<div class="panel panel-flat border-top-xlg border-top-warning">
		<div class="panel-heading">
			<legend class="text-bold text-center">
				<h3> <?php echo $data[0]->judul;?></h3>
			</legend>
		</div>
		<div class="panel-body">
			<div class="row">
				
				<div class="col-lg-12 col-sm-6">
					<center><img src="<?php echo base_url(); ?>uploads/gambar_berita/<?php echo $data[0]->gambar;?>" alt=""></center>
				</div>
				<p><?php echo $data[0]->isi;?></p>
				
			</div>
		</div>
	</div>
					<!-- /image grid -->
