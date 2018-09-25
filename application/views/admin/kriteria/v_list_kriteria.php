
<div class="panel panel-flat">
	<legend class="text-bold text-center">
		<h4><?php echo $title;?></h4>		
	</legend>
	<!--
	<div class="panel-heading">
		<legend class="text-bold">
			
			<a href="<?php echo $url_add; ?>"><button type="button" class="btn bg-teal-400 btn-labeled "><b><i class="icon-plus2"></i></b>Tambah</button></a>
			
		</legend>
	</div>
	-->
	<div class="panel-body">
		<table class="table datatable-basic table-bordered" id="mytable">
			<thead>
				<tr>
					<th>No</th>
					<th>Kriteria</th>
					<th>Bobot</th>
					<th width="20%" class="text-center">Actions</th>
				</tr>
			</thead>
			<tbody>
			<?php $no=1;foreach ($data as $data): ?>
				<tr>
					<td><?php echo $no++;?></td>
					<td ><?php echo $data->kriteria;?></td>
					<td ><?php echo $data->bobot;?></td>
					<td class="text-center">
						<!-- <a href="<?php echo $url_delete.$data->id; ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus ?');"><button type="button" class="btn btn-danger btn-icon btn-rounded btn-xs"><i class="icon-trash"></i></button></a> -->
						<a href="<?php echo $url_update.$data->id; ?>"><button type="button" class="btn btn-primary btn-icon btn-rounded btn-xs"><i class="icon-pencil5"></i></button></a>	
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">
	<?php if ($this->session->flashdata('error')){?>
		toastr.error("<?php echo $this->session->flashdata('error');?>");
	<?php } else if ($this->session->flashdata('success')) {?>
		toastr.success("<?php echo $this->session->flashdata('success');?>");
	<?php }?>
</script>