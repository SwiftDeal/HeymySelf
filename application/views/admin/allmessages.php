<?php require_once $dir_admin_requires.'header.php';?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Messages</h1>
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>From</th>
							<th>Created</th>
							<th>Scheduled</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="allmessage">
					<?php
						$property = 'message';
						foreach ($allmessages as $message) {
							$message = Message::find_by_id('id', $message->id);
							echo '<tr id="'.$message->id.'">
									<td>'.$message->email.'</td>
									<td>'.datetime_to_text($message->created).'</td>
									<td>'.datetime_to_text($message->scheduled).'</td>
									<td>';
									switch($message->validity){
										case '0':
											echo '<span class="label label-warning">Not Verified</span>&nbsp;<span class="label label-info">'.$message->type.'</span>';
											break;
											
										case '1':
											echo '<span class="label label-success">Verified</span>&nbsp;<span class="label label-info">'.$message->type.'</span>';
											break;
									}
							echo '</td>
									<td class="center">
										<a class="btn btn-danger btn-sm delete_message" id="'.$message->id.'"><i class="fa fa-trash-o fa-fw"></i></a>&nbsp;
										<a class="btn btn-default btn-sm show_message" id="'.$message->id.'"><i class="fa fa-envelope-o fa-fw"></i></a>&nbsp;';
										switch($message->is_show){
											case '0':
												echo '<a class="btn btn-default btn-sm togglevisibility" id="'.$message->id.'"><i class="fa fa-eye fa-fw"></i></a>&nbsp;';
												break;
											
											case '1':
												echo '<a class="btn btn-default btn-sm togglevisibility" id="'.$message->id.'"><i class="fa fa-eye-slash fa-fw"></i></a>&nbsp;';
												break;
										}
							echo '</td>
								</tr>';
						}
					?>
					</tbody>
				</table>
			</div>
        </div>
    </div>
</div>
<script>
	$(".delete_message").click(function() {
		var id = $(this).attr('id');
		alert(id);
		//delete_item('message', id);
	});
	function delete_item(property, property_id){
		var action = 'delete_item';
		$.ajax({
			type: "POST",
			url: "application/controllers/admin/action.php",
			data: {action: action, property: property, property_id: property_id},
			success: function(data){
				alert(data);
				$("#allmessage tr[id="+property_id+"]").hide();
			}
		});
		return false;
	}
	
	$(".togglevisibility").click(function() {
		var id = $(this).attr('id');
		var action = 'togglevisibility';
		$.ajax({
			type: "POST",
			url: "application/controllers/admin/action.php",
			data: {action: action, message_id: id},
			success: function(data){
				alert(data);
			}
		});
		return false;
	});
	
	$(".show_message").click(function() {
		var id = $(this).attr('id');
		var action = 'viewmessage';
		$.ajax({
			type: "POST",
			url: "application/controllers/admin/action.php",
			data: {action: action, message_id: id},
			success: function(data){
				alert(data);
			}
		});
		return false;
	});
</script>
<?php require_once $dir_admin_requires.'footer.php';?>