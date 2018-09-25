<!-- Image grid -->
	<div class="panel panel-flat border-top-xlg border-top-warning">
		<div class="panel-heading">
			<legend class="text-bold text-center">
				<h3>INFO LANAL </h3>
			</legend>
		</div>
		<div class="panel-body">
			<div class="row">
				<?php foreach ($data as $data): ?>
				<div class="col-lg-3 col-sm-6">
					<div class="thumbnail">
						<div class="thumb">
							<a href="<?php echo $url_detail.$data->id; ?>"><img src="<?php echo base_url(); ?>uploads/gambar_berita/<?php echo $data->gambar;?>" alt="" width="550px" height="550px"></a>
							
						</div>

						<div class="caption">
							<h6 class="no-margin-top text-semibold"><a href="<?php echo $url_detail.$data->id; ?>" ><?php echo substr($data->judul,0,20) ; ?></a> </h6>
							<?php echo substr($data->isi,0,100) ; ?>
						</div>
					</div>
				</div>

				<?php endforeach ?>
			</div>
		</div>
	</div>
					<!-- /image grid -->
