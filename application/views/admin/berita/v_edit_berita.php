<!-- CKEditor default -->
					<div class="panel panel-flat">
						<legend class="text-bold text-center">
							<h4><?php echo $title;?></h4>		
						</legend>

						<div class="panel-body"> 
							<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo $action;?>" method="POST">
								<div class="form-group">
										<label class="control-label col-lg-2">Judul</label>
										<div class="col-lg-10">
											<input required="required" class="form-control" type="text" name="judul" value="<?php echo $row->judul;?>">
										</div>
									</div>
								<div class="form-group">
										<label class="control-label col-lg-2">Gambar</label>
										<div class="col-lg-10">
											<input class="form-control" type="file" name="gambar" value="<?php echo $row->gambar;?>">
										</div>
									</div>
								<div class="content-group">
									<textarea required="required" name="editor-full" id="editor-full" rows="4" cols="4">
										<?php echo $row->isi;?>
						            </textarea>
					            </div>

					            <div class="text-right">
						            <button type="submit" class="btn bg-teal-400">Submit<i class="icon-arrow-right14 position-right"></i></button>
					            </div>
				            </form>
						</div>
					</div>
					<!-- /CKEditor default -->


					
<script type="text/javascript">
	<?php if ($this->session->flashdata('error')){?>
		toastr.error("<?php echo $this->session->flashdata('error');?>");
	<?php } else if ($this->session->flashdata('success')) {?>
		toastr.success("<?php echo $this->session->flashdata('success');?>");
	<?php }?>
</script>