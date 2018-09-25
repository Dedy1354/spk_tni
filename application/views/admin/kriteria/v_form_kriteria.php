<!-- Form validation -->
<div class="panel panel-flat">
	<legend class="text-bold text-center">
		<h4><?php echo $title;?></h4>		
	</legend>
	<div class="panel-body">
		<form class="form-horizontal form-validate-jquery" action="<?php echo $action;?>" method="POST">
			<fieldset class="content-group">
				<div class="form-group">
					<label class="control-label col-lg-3">ID Kriteria <span class="text-danger">*</span></label>
					<div class="col-lg-9">
						<input type="text" name="id" class="form-control"  <?php echo (isset($row)) ? 'readonly' : 'required'; ?> value="<?php echo (isset($row)) ? $row->id : ''; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-3">Kriteria <span class="text-danger">*</span></label>
					<div class="col-lg-9">
						<input type="text" name="kriteria" class="form-control" <?php echo (isset($row)) ? 'readonly' : 'required'; ?> value="<?php echo (isset($row)) ? $row->kriteria : ''; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-3">Bobot <span class="text-danger">*</span></label>
					<div class="col-lg-9">
						<input type="text" name="bobot" class="form-control" required="required" value="<?php echo (isset($row)) ? $row->bobot : ''; ?>">
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


<!-- List Kriteria Sub-->
<?php
	if($kriteria_sub!=null){
?>

<div class="panel panel-flat">
	<div class="panel-heading">
		<legend class="text-bold"><?php echo $title_kriteria_sub;?></legend>
	</div>

	<div class="panel-body">

	<table class="table datatable-basic table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Kriteria Sub</th>
				<th>Bobot</th>
				<th width ="20%" class="text-center">Actions</th>
			</tr>
		</thead>
		<tbody>
		<?php $no=1;foreach ($kriteria_sub as $data): ?>
			<tr>
				<td><?php echo $no++;?></td>
				<td><?php echo $data->kriteria_sub;?></td>
				<td><?php echo $data->bobot;?></td>
				<td class="text-center">
					<a href="<?php echo $url_update.$data->id; ?>"><button type="button" class="btn btn-primary btn-icon btn-rounded btn-xs"><i class="icon-pencil5"></i></button></a>	
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	</div>
</div>

<?php
}
?>

<script type="text/javascript">
	<?php if ($this->session->flashdata('error')){?>
		toastr.error("<?php echo $this->session->flashdata('error');?>");
	<?php } else if ($this->session->flashdata('success')) {?>
		toastr.success("<?php echo $this->session->flashdata('success');?>");
	<?php }?>
</script>


