<?php
$cur_dir = str_replace('_', '', basename(getcwd()));

/* app_info */
$app['info']['version'] = [
   "Ver: ",
   "2.1.0", $cur_dir
]; // make sure "beta" is always a subdir because "onclick" will go ../
// if ($cur_dir == "beta") $app['info']['version'][2] = "beta";
$app['info']['name'] = [
   "App: ",
   "The Wright's Desk"
];
$app['info']['description'] = [
   "",
   "The Wright's Desk is an online showcase for all our blogs, articles, news, development projects, galleries, and other stuff."
];
$app['info']['author'] = [
   "Author: ",
   "Victor Wright"
];
$app['info']['license'] = [
   "License: ",
   "Private. ©Victor R Wright (2023)"
];
$app['info']['contact'] = [
   "Contact: ",
   "victor.wright@outlook.de / +49 176 4677 4278"
];


/* configuration */
$website['config']['title'] = "Wright's Desk";
$website['config']['www'] = "www.wrightsdesk.com";
$website['config']['main_background'] = "resources/images/_92e566b6-5988-4edc-9d50-2fe7019f18cd.jpg";
$website['config']['body_backcolor'] = "#111";
$website['config']['font_family'] = "Verdana, Geneva, Tahoma, sans-serif";
$website['config']['font_color'] = "#ccc";
$website['config']['highlight_color'] = "#fff";
$website['config']['link_color'] = "red";
$website['config']['menu_hover_color'] = "yellow";

// include_once "../.localDevOnly/dev-definitions.php";

echo '<script language="javascript">';
echo 'console.log("config loaded")';
echo '</script>';
