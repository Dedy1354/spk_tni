<!-- Form validation -->
<div class="panel panel-flat">
	<legend class="text-bold text-center">
		<h4><?php echo $title;?></h4>		
	</legend>
	<div class="panel-body">
		<form class="form-horizontal form-validate-jquery" action="<?php echo $action;?>" method="POST">
			<fieldset class="content-group">
				<div class="form-group">
					<label class="control-label col-lg-3">Username <span class="text-danger">*</span></label>
					<div class="col-lg-9">
						<input type="text" name="username" class="form-control" required="required" value="<?php echo (isset($row)) ? $row->username : ''; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-3">Password <span class="text-danger">*</span></label>
					<div class="col-lg-9">
						<input type="text" name="password" class="form-control" required="required" value="<?php echo (isset($row)) ? $row->password : ''; ?>">
					</div>
				</div>
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