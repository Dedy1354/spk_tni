<!-- Form validation -->
<div class="panel panel-flat">
	<div class="panel-body">
		<?php  if ($this->session->flashdata('message')) {
			echo $this->session->flashdata('message');
		};?>
		<form class="form-horizontal form-validate-jquery" action="<?php echo $action;?>" method="POST">
			<fieldset class="content-group">
				<legend class="text-bold"><?php echo $title;?></legend>

				<!-- Basic text input -->
				<div class="form-group">
					<label class="control-label col-lg-3">ID Kriteria Sub <span class="text-danger">*</span></label>
					<div class="col-lg-9">
						<input type="text" name="id" class="form-control"  <?php echo (isset($row)) ? 'readonly' : 'required'; ?> value="<?php echo (isset($row)) ? $row->id : ''; ?>">
					</div>
				</div>
				<!-- /basic text input -->


				<!-- Basic text input -->
				<div class="form-group">
					<label class="control-label col-lg-3">Kriteria Sub<span class="text-danger">*</span></label>
					<div class="col-lg-9">
						<input type="text" name="kriteria_sub" class="form-control"  <?php echo (isset($row)) ? 'readonly' : 'required'; ?> value="<?php echo (isset($row)) ? $row->kriteria_sub : ''; ?>">
					</div>
				</div>
				<!-- /basic text input -->

				<!-- Basic text input -->
				<div class="form-group">
					<label class="control-label col-lg-3">Bobot<span class="text-danger">*</span></label>
					<div class="col-lg-9">
						<input type="text" name="bobot" class="form-control" required="required" value="<?php echo (isset($row)) ? $row->bobot : ''; ?>">
					</div>
				</div>
				<!-- /basic text input -->

			</fieldset>

			<div class="text-right">
				<button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
				
			</div>

		</form>
		</br>
		<div class="panel-footer">

			<a href="<?php echo $url_back;?>"> <button class="btn btn-success" href="#"><i class="icon-arrow-left13 position-left"></i>Kembali</button></a>
		</div>
	</div>
</div>


