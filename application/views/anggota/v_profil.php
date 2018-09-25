<!-- 2 columns form -->
<form class="form-horizontal" action="<?php echo $action;?>" method="POST">
	<div class="panel panel-flat border-top-xlg border-top-success">
	<div class="panel-body">
		<div class="row">
			<div class="col-md-6">
				<fieldset>
					<legend class="text-semibold"><i class="icon-person position-left"></i> Data Diri</legend>

					<div class="form-group">
						<label class="col-lg-5 control-label">ID Personel  </label>
						<div class="col-lg-7">
							<input  type="text" readonly class="form-control" value="<?php echo $data[0]->id;?>">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-5 control-label">Nama  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $data[0]->nama;?>">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-5 control-label">Pangkat  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $data[0]->pangkat;?>">
						</div>
					</div>
				</fieldset>
			</div>
			
			<div class="col-md-6">
				<fieldset>
					<form class="form-horizontal form-validate-jquery" action="<?php echo $action;?>" method="POST">
                	<legend class="text-semibold"><i class="icon-reading position-left"></i> Ganti Password</legend>
                		<div class="form-group">
							<label class="col-lg-5 control-label">Password Lama</label>
							<div class="col-lg-7">
								<input name= "password_lama" type="password"  required="required"class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-5 control-label">Password Baru</label>
							<div class="col-lg-7">
								<input name= "password_baru" type="password" required="required" class="form-control">
							</div>
						</div>
						<div class="text-right">
								<button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
						</div>

					</form>
				</fieldset>
			</div>
		</div>
	</div>
</form>
<!-- /2 columns form -->

<script type="text/javascript">
	
	<?php if ($this->session->flashdata('error')){?>
		toastr.error("<?php echo $this->session->flashdata('error');?>");
	<?php } else if ($this->session->flashdata('success')) {?>
		toastr.success("<?php echo $this->session->flashdata('success');?>");
	<?php }?>
</script>