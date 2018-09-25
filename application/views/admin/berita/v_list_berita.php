<!-- Media library -->
<div class="panel panel-white">
	<legend class="text-bold text-center">
		<h4><?php echo $title;?></h4>		
	</legend>
	
	<div class="panel-body">	
		<div class="panel-body">
			<a href="<?php echo $url_add; ?>"><button type="button" class="btn bg-teal-400 btn-labeled "><b><i class="icon-plus2"></i></b>Tambah</button></a>
		</div>
		<table class="table datatable-basic table-bordered" id="mytable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Preview</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Tanggal Buat</th>
                    <th  width="15%" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php $no=1;foreach ($data as $data): ?>
                <tr>
                	<td><?php echo $no++;?></td>
                    <td>
                        <a href="<?php echo base_url(); ?>uploads/gambar_berita/<?php echo $data->gambar;?>" data-popup="lightbox">
	                        <img src="<?php echo base_url(); ?>uploads/gambar_berita/<?php echo $data->gambar;?>" alt="" class="img-rounded img-preview">
                        </a>
                    </td>
                    <td><a href="<?php echo $url_detail.$data->id; ?>"><?php echo substr($data->judul,0,20) ; ?></a></td>
                    <td><?php echo substr($data->isi,0,100) ; ?></td>
                    <td><?php echo $data->created_at; ?></td>
                    <td class="text-center">
                        <a href="<?php echo $url_delete.$data->id; ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus ?');"><button type="button" class="btn btn-danger btn-icon btn-rounded btn-xs"><i class="icon-trash"></i></button></a>
                        <a href="<?php echo $url_update.$data->id; ?>"><button type="button" class="btn btn-primary btn-icon btn-rounded btn-xs"><i class="icon-pencil5"></i></button></a>  
                    </td>
                    
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
                    <!-- /media library -->





<script type="text/javascript">
	<?php if ($this->session->flashdata('error')){?>
		toastr.error("<?php echo $this->session->flashdata('error');?>");
	<?php } else if ($this->session->flashdata('success')) {?>
		toastr.success("<?php echo $this->session->flashdata('success');?>");
	<?php }?>
</script>