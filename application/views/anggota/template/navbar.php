<!-- Page header -->
	<div class="page-header page-header-inverse">

		<!-- Main navbar -->
		<div class="navbar navbar-inverse navbar-transparent">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url();?>anggota/berita">ANGGOTA</a>

				<ul class="nav navbar-nav pull-right visible-xs-block">
					<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-grid3"></i></a></li>
				</ul>
			</div>

			<div>

				<div class="navbar-right">
					<ul class="nav navbar-nav">
						<p class="navbar-text" ><b>PANGKALAN TNI ANGKATAN LAUT BATUPORON</b></p>
						<li class="dropdown dropdown-user">
							<a class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?php echo base_url(); ?>assets/images/user.png" alt="">
								<span><?php echo $this->session->userdata('nama');?></span>
								<i class="caret"></i>
							</a>

							<ul class="dropdown-menu dropdown-menu-right">
								<li><a href="<?php echo base_url();?>anggota/profil/<?php echo $this->session->userdata('personel_id'); ?>"><i class="icon-person"></i> Profil </a></li>
								<li><a href="<?php echo base_url();?>login/action_logout"><i class="icon-switch2"></i> Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /main navbar -->

		<!-- Second navbar -->
		<div class="navbar navbar-inverse navbar-transparent" id="navbar-second">
			<ul class="nav navbar-nav visible-xs-block">
				<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>

			<div class="navbar-collapse collapse" id="navbar-second-toggle">
				<ul class="nav navbar-nav navbar-nav-material">
					<li class="<?php if($this->uri->segment(2) == 'berita') echo 'active'  ?>"><a href="<?php echo base_url();?>anggota/berita">Berita Lanal</a></li>
					<li class="<?php if($this->uri->segment(2) == 'penilaian') echo 'active'  ?>"><a href="<?php echo base_url();?>anggota/penilaian">Hasil Penilaian</a></li>
					
				</ul>

				
			</div>
		</div>
		<!-- /second navbar -->	
	</div>
	<!-- /page header -->