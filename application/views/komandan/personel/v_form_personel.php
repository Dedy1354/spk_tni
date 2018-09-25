<!-- Form validation -->
<div class="panel panel-flat">
	<legend class="text-bold text-center">
		<h4><?php echo $title;?></h4>		
	</legend>
	<div class="panel-body">
		<form class="form-horizontal form-validate-jquery" action="<?php echo $action;?>" method="POST">
			<fieldset class="content-group">
				
				<div class="form-group">
					<label class="control-label col-lg-3">ID Personel <span class="text-danger">*</span></label>
					<div class="col-lg-9">
						<input type="text" name="id" class="form-control"  <?php echo (isset($row)) ? 'readonly' : 'required'; ?> value="<?php echo (isset($row)) ? $row->id : ''; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-3">Nama <span class="text-danger">*</span></label>
					<div class="col-lg-9">
						<input type="text" name="nama" class="form-control" required="required" value="<?php echo (isset($row)) ? $row->nama : ''; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-3">Pangkat <span class="text-danger">*</span></label>
					<div class="col-lg-9">
						<input type="text" name="pangkat" class="form-control" required="required" value="<?php echo (isset($row)) ? $row->pangkat : ''; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-3">Keterangan <span class="text-danger">*</span></label>
					<div class="col-lg-9">
						<select class="select" name="keterangan" class="form-control" required="required" >
							<?php 
								if(isset($row)){
									if($row->keterangan == "Komandan"){
										echo "<option value='Komandan' selected='selected' >Komandan</option>";
										echo "<option value='Anggota'  >Anggota</option>";
									}else if($row->keterangan == "Anggota"){
										echo "<option value='Komandan' >Komandan</option>";	
										echo "<option value='Anggota' selected='selected' >Anggota</option>";
									}
								}else{
									echo "<option value='Komandan' >Komandan</option>";
									echo "<option value='Anggota' >Anggota</option>";
								}
							?>
										
						</select>
						
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


<script type="text/javascript">
	
	<?php if ($this->session->flashdata('error')){?>
		toastr.error("<?php echo $this->session->flashdata('error');?>");
	<?php } else if ($this->session->flashdata('success')) {?>
		toastr.success("<?php echo $this->session->flashdata('success');?>");
	<?php }?>
</script>


