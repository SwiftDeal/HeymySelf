<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>

    <base href="<?php echo $baseUrl;?>" />
    <!-- Core CSS - Include with every page -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>

    <!-- Page-Level Plugin CSS - Blank -->
    <link href="<?php echo $dir_assets_css.'plugins/dataTables/dataTables.bootstrap.css';?>" rel="stylesheet">
    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo $dir_assets_css.'sb-admin.css';?>" rel="stylesheet">
    <script src="http://tinymce.cachefly.net/4.0/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home"><i class="fa fa-globe fa-lg"></i> heymyself</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $session->name;?>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
						<li><a href="admin"><i class="fa fa-gear fa-fw"></i> Dashboard</a></li>
                        <li><a href="admin/profile"><i class="fa fa-thumbs-up fa-fw"></i> Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>

        </nav>

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li><a href="admin/"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                    <li><a href="admin/profile"><i class="fa fa-user fa-fw"></i> Profile</a></li>
                    <li><a href="admin/messages"><i class="fa fa-envelope fa-fw"></i> Messages</a></li>
                </ul>
            </div>
        </nav>