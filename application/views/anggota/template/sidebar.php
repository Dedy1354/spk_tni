<div class="sidebar sidebar-main">
	<div class="sidebar-content">
		<!-- User menu -->
		<div class="sidebar-user">
			<div class="category-content">
				<div class="media">
					<a href="#" class="media-left"><img src="<?php echo base_url(); ?>assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
					<div class="media-body">
						<span class="media-heading text-semibold">Victoria Baker</span>
						<div class="text-size-mini text-muted">
							<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
						</div>
					</div>

					<div class="media-right media-middle">
						<ul class="icons-list">
							<li>
								<a href="#"><i class="icon-cog3"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /user menu -->

		<!-- Main navigation -->
		<div class="sidebar-category sidebar-category-visible">
			<div class="category-content no-padding">
				<ul class="navigation navigation-main navigation-accordion">
					<!-- Main -->
					<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
					<li class="<?php if($this->uri->segment(2) == 'provinsi') echo 'active'  ?>"><a href="<?php echo base_url();?>index.php/admin/provinsi"><i class="icon-office"></i> <span>Provinsi</span></a></li>
					<li class="<?php if($this->uri->segment(2) == 'kriteria') echo 'active'  ?>"><a href="<?php echo base_url();?>index.php/admin/kriteria"><i class="icon-city"></i> <span>Kriteria</span></a></li>
					<li class="<?php if($this->uri->segment(2) == 'kecamatan') echo 'active'  ?>"><a href="<?php echo base_url();?>index.php/admin/kecamatan"><i class="icon-city"></i> <span>Kecamatan</span></a></li>
					<li class="<?php if($this->uri->segment(2) == 'desa') echo 'active'  ?>"><a href="<?php echo base_url();?>index.php/admin/desa"><i class="icon-city"></i> <span>Desa</span></a></li>
					<li class="<?php if($this->uri->segment(2) == 'lksa') echo 'active'  ?>"><a href="<?php echo base_url();?>index.php/admin/lksa"><i class="icon-library2"></i> <span>LKSA</span></a></li>
					
				</ul>
			</div>
		</div>
		<!-- /main navigation -->
	</div>
</div>
