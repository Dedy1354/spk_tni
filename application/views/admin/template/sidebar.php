<div class="sidebar sidebar-main">
	<div class="sidebar-content">
		<!-- User menu -->
		<div class="sidebar-user">
			<div class="category-content">
				<div class="media">
					<a href="#" class="media-left"><img src="<?php echo base_url(); ?>assets/images/user.png" class="img-circle img-sm" alt=""></a>
					<div class="media-body">
						<span class="media-heading text-semibold"><?php echo $this->session->userdata('nama');?></span>
						<div class="text-size-mini text-muted">
							<i class="icon-user text-size-small"></i> <?php echo $this->session->userdata('username');;?>
						</div>
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
					<li class="<?php if($this->uri->segment(2) == 'berita') echo 'active'  ?>"><a href="<?php echo base_url();?>admin/berita"><i class="icon-office"></i> <span>Dashboard</span></a></li>
					<li class="<?php if($this->uri->segment(2) == 'kriteria') echo 'active'  ?>"><a href="<?php echo base_url();?>admin/kriteria"><i class="icon-city"></i> <span>Kriteria</span></a></li>
					<li class="<?php if($this->uri->segment(2) == 'personel') echo 'active'  ?>"><a href="<?php echo base_url();?>admin/personel"><i class="icon-user"></i> <span>Personel</span></a></li>
					<li class="<?php if($this->uri->segment(2) == 'penilaian') echo 'active'  ?>"><a href="<?php echo base_url();?>admin/penilaian"><i class="icon-library2"></i> <span>Hasil Penilaian</span></a></li>
					<li class="<?php if($this->uri->segment(2) == 'users') echo 'active'  ?>"><a href="<?php echo base_url();?>admin/users"><i class="icon-city"></i> <span>Users</span></a></li>
					
					
				</ul>
			</div>
		</div>
		<!-- /main navigation -->
	</div>
</div>
