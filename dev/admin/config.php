<?php

/* app_info */
$cur_dir = str_replace('_', '', basename(getcwd()));
$app['info']['version'] = ["Ver", "2.0.3", $cur_dir]; // make sure "beta" is always a subdir because "onclick" will go ../
// if ($cur_dir == "beta") $app['info']['version'][2] = "beta";
$app['info']['name'] = ["App", "Wright's Desk"];
$app['info']['author'] = ["Author", "Victor Wright"];
$app['info']['license'] = ["License", "Private. ©Victor R Wright (2023)"];
$app['info']['contact'] = ["Email", "victor.wright@outlook.de"];

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