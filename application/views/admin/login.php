<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <base href="http://heymyself.com" />
	<!-- Core CSS - Include with every page -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo $dir_assets_css;?>sb-admin.css" rel="stylesheet">
	
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" id="signinform">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
								<input type="hidden" name="action" value="signin">
                                <button id="signinbtn" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<script>
		$("#signinform").submit(function() {
			var dataString = $("#signinform").serialize();
			$("#signinbtn").addClass("disabled");
			$("#signinbtn").html('Processing...');
			$.ajax({
				type: "POST",
				url: "application/controllers/public/action.php",
				data: dataString,
				success: function(data){
					$("#signinbtn").html('Done!!!');
					switch(data) {
						case 'forgetpwd':
							alert('Password is wrong, contact Admin');
							break;
						
						case 'login':
							window.location.href = 'http://heymyself.com/admin';
							break;
							
						default:
							alert(data);
							break;
					};
				}
			});
			return false;
		});
	</script>
	
    <!-- Core Scripts - Include with every page -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="<?php echo $dir_assets_js;?>plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo $dir_assets_js;?>sb-admin.js"></script>

</body>

</html>
