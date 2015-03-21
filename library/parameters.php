<?php

$dir_root = '/home/cloudstech/public_html/';
$dir_site = 'http://heymyself.com/';
$baseUrl = 'http://heymyself.com/';
$dir_uploads = $dir_root.'assets/uploads/';
$cdn = "http://heymyself.com/assets/";

$dir_app = $dir_root.'application/';
$dir_scripts = $dir_root.'scripts/';
$dir_db = $dir_root.'db/';
$dir_library = $dir_root.'library/';
$dir_tmp = $dir_root.'tmp/';

//models directory
$dir_models = $dir_app.'models/';
$dir_config = $dir_root.'config/';
$dir_class = $dir_models;
$dir_functions = $dir_scripts.'functions/';

//view directory
$dir_assets = $dir_site.'assets/';
$dir_assets_css = $dir_assets.'css/';
$dir_assets_js = $dir_assets.'js/';
$dir_assets_img = $dir_assets.'img/';

$dir_views = $dir_app.'views/';

$dir_public = $dir_views.'public/';
$dir_public_requires = $dir_public.'requires/';
$dir_public_modal = $dir_public.'modal/';

$dir_admin = $dir_views.'admin/';
$dir_admin_requires = $dir_admin.'requires/';
$dir_admin_modal = $dir_admin.'modal/';


$title = "hey myself";
$description = "Schedule a message to yourself";
$photograph = "http://www.heymyself.com/assets/img/flat-logo.png";

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$time = strftime("%Y-%m-%d %H:%M:%S", time()+60*330);

?>