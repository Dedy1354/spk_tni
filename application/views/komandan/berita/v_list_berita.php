<!-- Image grid -->
	<div class="panel panel-flat border-top-xlg border-top-warning">
		<legend class="text-bold text-center">
		<h4><?php echo $title;?></h4>		
	</legend>
	
	<div class="panel-body">
			<div class="row">
				<?php foreach ($data as $data): ?>
				<div class="col-lg-3 col-sm-6">
					<div class="thumbnail">
						<div class="thumb">
							<img src="<?php echo base_url(); ?>uploads/gambar_berita/<?php echo $data->gambar;?>" alt="">
							<div class="caption-overflow">
								<span>
									<a href="<?php echo base_url(); ?>uploads/gambar_berita/<?php echo $data->gambar;?>" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
									
								</span>
							</div>
						</div>

						<div class="caption">
							<h6 class="no-margin-top text-semibold"><a href="<?php echo $url_detail.$data->id; ?>" class="text-default"><?php echo substr($data->judul,0,20) ; ?></a> </h6>
							<?php echo substr($data->isi,0,100) ; ?>
						</div>
					</div>
				</div>

				<?php endforeach ?>
			</div>
		</div>
	</div>
					<!-- /image grid -->
