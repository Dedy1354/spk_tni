<!-- Main navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo base_url();?>komandan/berita">KOMANDAN</a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

				
			</ul>

			<p class="navbar-text" ><b>PANGKALAN TNI ANGKATAN LAUT BATUPORON</b></p>
			<ul class="nav navbar-nav navbar-right">
				

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?php echo base_url(); ?>assets/images/user.png" alt="">
						<span><?php echo $this->session->userdata('nama');?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
					<li><a href="<?php echo base_url();?>komandan/personel/profil/<?php echo $this->session->userdata('personel_id'); ?>"><i class="icon-person"></i> Profil </a></li>
						<li><a href="<?php echo base_url();?>login/action_logout"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->
<!--
<div class="navbar navbar-inverse ">
	<div class="navbar-header">
		<ul class="nav navbar-nav visible-xs-block">
			<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
		</ul>
	</div>

	<div class="navbar-collapse collapse" id="navbar-mobile">
		<ul class="nav navbar-nav">
			<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown dropdown-user">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<img src="<?php echo base_url();?>assets/images/placeholder.jpg" alt="">
					<span><?php echo $this->session->userdata('username');?></span>
					<i class="caret"></i>
				</a>

				<ul class="dropdown-menu dropdown-menu-right">
					<li><a href="<?php echo base_url();?>index.php/login/action_logout"><i class="icon-switch2"></i> Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>

-->