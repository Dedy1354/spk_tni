<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title">Bordered table</h5>
		<div class="heading-elements">
			<ul class="icons-list">
        		<li><a data-action="collapse"></a></li>
        		<li><a data-action="reload"></a></li>
        		<li><a data-action="close"></a></li>
        	</ul>
    	</div>
	</div>

	<div class="panel-body">
		The <code>DataTables</code> is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table. DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function. Searching, ordering, paging etc goodness will be immediately added to the table, as shown in this example. <strong>Datatables support all available table styling.</strong>
	</div>

	<table class="table datatable-basic table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Last Name</th>
				<th>Job Title</th>
				<th>DOB</th>
				<th>Status</th>
				<th class="text-center">Actions</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($data as $data): ?>
			<tr>
				<td>N0</td>
				<td><a href="#">Enright</a></td>
				<td>Traffic Court Referee</td>
				<td>22 Jun 1972</td>
				<td><span class="label label-success">Active</span></td>
				<td class="text-center">
					<ul class="icons-list">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="icon-menu9"></i>
							</a>

							<ul class="dropdown-menu dropdown-menu-right">
								<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
								<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
								<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
							</ul>
						</li>
					</ul>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>