<!-- CKEditor default -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Info Lanal</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body"> 
							<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo $action;?>" method="POST">
								<div class="form-group">
										<label class="control-label col-lg-2">Judul Berita</label>
										<div class="col-lg-10">
											<input required="required" class="form-control" type="text" name="judul">
										</div>
									</div>
								<div class="form-group">
										<label class="control-label col-lg-2">Default file input</label>
										<div class="col-lg-10">
											<input class="form-control" type="file" name="gambar">
										</div>
									</div>
								<div class="content-group">
									<textarea required="required" name="editor-full" id="editor-full" rows="4" cols="4">
										
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