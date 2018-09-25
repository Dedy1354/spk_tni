<div class="panel panel-flat">
	<div class="panel-heading">
		<legend class="text-bold"><?php echo $title;?></legend>
	</div>

	<div class="panel-body">
		<?php  if ($this->session->flashdata('message')) {
			echo $this->session->flashdata('message');
		};?>
		<a href="<?php echo $url_add; ?>"><button type="button" class="btn bg-teal-400 btn-labeled"><b><i class="icon-plus2"></i></b>Tambah</button></a>
	</div>

	<table class="table datatable-basic table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Kriteria</th>
				<th class="text-center">Actions</th>
			</tr>
		</thead>
		<tbody>
		<?php $no=1;foreach ($data as $data): ?>
			<tr>
				<td><?php echo $no++;?></td>
				<td><?php echo $data->kriteria;?></td>
				<td class="text-center">
					<a href="<?php echo $url_delete.$data->id; ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus ?');"><button type="button" class="btn btn-danger btn-icon"><i class="icon-trash"></i></button></a>
					<a href="<?php echo $url_update.$data->id; ?>"><button type="button" class="btn btn-primary btn-icon"><i class="icon-pencil5"></i></button></a>	
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>