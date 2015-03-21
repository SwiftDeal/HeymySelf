<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>hey myself</title>
	<base href="<?php echo $baseUrl;?>" />
    <!--  Bootstrap Style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!--  Font-Awesome Style -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!--  Custom Style -->
    <link href="assets/css/style.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php echo $dir_assets_css;?>jquery.datetimepicker.css" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	<style type="text/css">
		@font-face {
			font-family: Roundhand;
			src: url('http://static.wix.com/services/third-party/fonts/user-site-fonts/fonts/efbfc170-aaf0-4472-91f4-dbb5bc2f4c59.woff');
		}
		@font-face {
			font-family: Sacramento;
			src: url('assets/fonts/Sacramento-Regular.ttf');
		}
		@font-face {
			font-family: Segoe;
			src: url('assets/fonts/SEGOEUIL.ttf');
		}
		#divDisp {
			font-family: Roundhand;
		}
		#homediv{
			padding-left: 100px;
			font-family: Sacramento, cursive;
		}
	</style>
</head>
<body>
    <div id="pre-div">
        <div id="loader"></div>
    </div>
    <!--/. PRELOADER END -->
	<script>
	  window.fbAsyncInit = function() {
		FB.init({
		  appId      : '280014175543076',
		  xfbml      : true,
		  version    : 'v2.1'
		});
	  };

	  (function(d, s, id){
		 var js, fjs = d.getElementsByTagName(s)[0];
		 if (d.getElementById(id)) {return;}
		 js = d.createElement(s); js.id = id;
		 js.src = "//connect.facebook.net/en_US/sdk.js";
		 fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>
    <div class="navbar navbar-default navbar-fixed-top move-me ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href=""></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="messages"><span class="btn btn-success">Public Message</span></a></li>
					<li><a href="#port-folio"><span class="btn btn-info">How it Works?</span></a></li>
                </ul>
            </div>

        </div>
    </div>
    <!--./ NAV BAR END -->
