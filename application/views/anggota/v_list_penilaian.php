
<div class="panel panel-flat border-top-xlg border-top-info">
	<div class="panel-heading">
		<legend class="text-bold text-center">
			<h3>HASIL PENILAIAN </h3>
		</legend>
	</div>

	<div class="panel-body">
		<table class="table datatable-basic table-bordered" id="mytable">
			<thead>
				<tr>
					<th>Rangking</th>
					<th>Nama</th>
					<th>Skor</th>
				</tr>
			</thead>
			<tbody>
			<?php $no=1;foreach ($data as $data): ?>
				<tr>
					<td><?php echo $no++;?></td>
					<?php 
						if($data->id == $this->session->userdata('personel_id')){
							echo "<td> <a href=".$url_detail.$data->id."><i>".$data->nama."</i></a> </td>";
						}else{
							echo "<td >".$data->nama."</td>";
						}
					?>
					
					<td ><?php echo $data->skor;?></td>
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
