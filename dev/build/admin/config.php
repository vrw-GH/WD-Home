<?php

#$cur_dir = getcwd();
$cur_dir = dirname(dirname($_SERVER['SCRIPT_FILENAME']));
$cur_dir = str_replace('_', '', basename($cur_dir));

/* app_info */
$app['info']['version'] = [
   "Ver: ",
   "2.1.0 ", $cur_dir
]; // make sure "beta" is always a subdir because "onclick" will go "../"
$app['info']['name'] = [
   "App: ",
   "WrightsDesk"
];
$app['info']['description'] = [
   "",
   "The Wright's Desk is an online showcase for all blogs, articles, news, development projects, galleries, and other stuff."
];
$app['info']['author'] = [
   "Author: ",
   "Victor Wright"
];
$app['info']['license'] = [
   "License: ",
   "Private. WrightsDesk (".date('Y').")"
];
$app['info']['phone'] = [
   "Phone: ",
   "<a href='https://wa.me/+4917646774278'>+49(176)4677-4278</a>"
];
$app['info']['emaiil'] = [
   "Email: ",
   "<a href='mailto:victor.wright@outlook.de'>victor.wright@outlook.de</a>"
];



define("APP_MODE", "DEV");
define("APP_NAME", $app['info']['name'][1]);
define("APP_VER", $app['info']['version'][1]);


/* configuration */
$website['config']['title'] = "Wright's Desk";
$website['config']['www'] = "www.wrightsdesk.com";
$website['config']['main_background'] = "../resources/images/lorem.png";
$website['config']['body_backcolor'] = "#111";
$website['config']['font_family'] = "Verdana, Geneva, Tahoma, sans-serif";
$website['config']['font_color'] = "#ccc";
$website['config']['highlight_color'] = "#fff";
$website['config']['link_color'] = "red";
$website['config']['menu_hover_color'] = "yellow";
$website['config']['components']['canvas'] = "../components/canvas/canvas.php";
$website['config']['resources'] = "../resources/";


echo "<script> console.log('config loaded'); ";
echo (include_once "../.localDevOnly/dev-definitions.php")
      ? " alert('DevDefinitions Loaded');" : null;
echo "</script>";

