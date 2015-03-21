<?php require_once $dir_admin_requires.'header.php';?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Profile</h1>
			<form class="form-horizontal text-center" role="form" id="profileform">
				<div class="form-group">
					<label for="inputName3" class="col-sm-3 control-label">Name</label>
					<div class="col-sm-6">
						<input type="text" name="name" class="form-control" id="inputName3" placeholder="Your Name" value="<?php echo $user->name;?>">
					</div>
				</div>
				
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label">Email</label>
					<div class="col-sm-6">
						<input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" value="<?php echo $user->email;?>">
					</div>
				</div>
				
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-3 control-label">Change Password</label>
					<div class="col-sm-6">
						<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="New Password" value="" autocomplete="off">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input type="hidden" name="action" value="saveprofile">
						<button type="submit" id="savebtn" class="btn btn-default">Save</button>
					</div>
				</div>
			</form>
        </div>
    </div>
</div>

<script>
$("#profileform").submit(function() {
	var dataString = $("#profileform").serialize();
	$("#savebtn").html('Processing...');
	$.ajax({
		type: "POST",
		url: "application/controllers/admin/action.php",
		data: dataString,
		success: function(data){
			$("#savebtn").html('Save');
			bootbox.alert('Saved Successfully');
		}
	});
	return false;
});
</script>
<?php require_once $dir_admin_requires.'footer.php';?>