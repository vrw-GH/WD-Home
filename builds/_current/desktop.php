<!DOCTYPE html>
<html lang="en">

<?php include_once "resources/site_data.php";
?>

<head>
   <meta charset="UTF-8">
   <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <meta name="author" content="Victor Wright" />
   <meta name="description"
      content="The Wright's website is an online showcase for all our blogs, articles, news, development projects, galleries, and other stuff." />
   <meta property="og:image" content="https://avatars.githubusercontent.com/u/81757839?v=4" />
   <meta property="og:description"
      content="The Wright's website is an online showcase for all our blogs, articles, news, development projects, galleries, and other stuff." />
   <meta property="og:title" content="The Wright's Desk" />
   <meta name="twitter:title" content="The Wright's Desk" />

   <script src="resources/script.js" defer></script>

   <link href="resources/favicon.ico" rel="icon" type="image/x-icon">
   <link href="resources/style.css" rel="stylesheet">
   <link href="https://vrw-gh.github.io/vrw-GH" rel="preload" as="document" type="text/html" crossorigin="anonymous"
      fetchpriority="high" />

   <title><?= $site_title ?></title>

   <style>
   * {
      background-color: transparent;
      margin: 0;
      padding: 0;
      font-family: <?=$font_family ?>;
      color: <?=$font_color ?>;
   }

   a {
      text-decoration: none;
      background: linear-gradient(90deg, transparent, <?=$body_backcolor ?>, <?=$body_backcolor ?>);
      border: 0px solid transparent;
   }

   a:focus {
      background: linear-gradient(90deg, <?=$font_color ?>, transparent, transparent, <?=$body_backcolor ?>);
      color: <?=$highlight_color ?>;
   }

   a:hover {
      color: <?=$link_color ?>;
   }

   body {
      height: 100vh;
      background-color: <?=$body_backcolor ?>;
      background-image: url(<?= $main_background ?>);
      background-attachment: local;
      background-repeat: no-repeat;
      background-size: cover;
      max-width: calc(100% - 1.5rem);
      background-position: top;
   }

   .headlines {
      z-index: 100;
   }

   .headlines:hover {
      color: <?=$highlight_color ?>;
   }

   .hl1 {
      padding: 10px 0 5px 1rem;
      text-shadow: <?=$font_color ?> 4px 0 10px;
      font-size: min(4rem, 4em, 6vw);
      font-weight: 800;
   }

   .hl2 {
      padding-left: min(0.5rem, 1%);
      cursor: pointer;
      width: 0.7em;
      overflow: hidden;
      white-space: nowrap;
      z-index: 100;
      position: absolute;
   }

   .hl2:hover {
      color: <?=$highlight_color ?>;
      width: auto;
      overflow: visible;
      white-space: normal;
   }

   .hl2:focus {
      background-color: <?=$highlight_color ?>;
   }

   .row {
      display: flex;
      width: calc(100%);
      height: calc(90vh - 3rem);
      margin-left: 0.5rem;
      margin-right: 1.0rem;
      /* border: 1px solid red; */
   }

   .col-left {
      width: max(2rem, 5vw);
      max-width: 50px;
      min-width: 1em;
      background-color: transparent;
      /* border: 1px solid greenyellow; */
   }

   .col-right {
      width: calc(100%);
      /* height: calc(90vh - 3rem);       */
      background-color: transparent;
      overflow: auto;
      /* border: 1px solid yellow; */
   }
   </style>

   <style>
   .navbar-tags {
      list-style-position: inside;
      list-style-type: none;
      padding-top: 3px;
      margin-left: 0;

   }

   .navbar-tags>.dropdown {
      display: none
   }

   .navbar-tags>li:focus>.dropdown {
      display: block;
      color: <?=$highlight_color ?>;
   }
   </style>

   <style>
   iframe[name=viewport] {
      display: flex;
      z-index: 0;
      width: 100%;
      border: none;
      border-radius: 6px;
      backdrop-filter: blur(4px);
   }

   iframe[name=viewport]:hover {
      /* background-color: white; */
   }
   </style>

   <style>
   footer {
      display: flex;
      justify-content: left;
      width: 100%;
      position: absolute;
      bottom: 5px;

   }
   </style>
</head>

<body>

   <?php
   $viewport_style = 'height:0;';
   $canvas_style = 'height:100%;';
   ?>

   <div class="headlines hl1">
      <?= $site_title ?>
   </div>
   <row class="row">
      <column class="col-left">
         <div>
            <ul class="headlines hl2 navbar-list ">
               <li class="navbar-tags">
                  <span><a href="about:blank" target="viewport"
                        onclick="{$viewport_style = 'height:0;';$canvas_style = 'height:100;'}">
                        <b>≡&nbsp;Home</b>&emsp;··· The Wright's Digital Workshop
                     </a></span>
                  <ul class="dropdown">
                     <li><a href="#me">Me</a></li>
                  </ul>
                  <ul class="dropdown">
                     <li><a href="">Gallery</a></li>
                  </ul>
               </li>
               <li class="navbar-tags">
                  <span><a href="https://vrw-gh.github.io/vrw-GH" target="viewport"
                        onclick="{$viewport_style = 'height:100%; background-color:rgba(255,255,255,0.9); scroll:none';$canvas_style = 'height:10;'}">
                        <b>•&nbsp;About</b>&emsp;··· About Me
                     </a></span>
               </li>
               <li class="navbar-tags">
                  <span><a href="resources/images/tintin-characters.jpg" target="viewport" type="image/jpg"
                        onclick="$viewport_style = 'height:100%;'">

                        <b>•&nbsp;Other</b>&emsp;··· Other Stuff
                     </a></span>
               </li>
            </ul>
         </div>


      </column>
      <column class="col-right">

         <iframe name="viewport" src="" frameborder="0" title="viewport" height="0" onLoad="{
            this.style=$viewport_style;
            canvas.style='height:20%;';
            }">

         </iframe>

         <?php
         if ($viewport_style === 'height:0;') {
            // if ($canvas_style = 'height:100%;') {
            echo '<canvas id="canvas" style="$canvas_style">Canvas is not supported in your browser.</canvas>';
            echo '<input id="text" type="text" value="" placeholder="Type your name" maxlength="12" autofocus="autofocus" />';
         } else {
         }
         ?>




      </column>
   </row>

   <footer>
      🤙 <a href="tel:+4917646774278">+49 176 4677 4278</a>
   </footer>

</body>

</html>