<!DOCTYPE html>
<html lang="en">

<?php include_once "resources/site_data.php";
?>

<head>
   <meta charset="UTF-8">
   <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
      padding-left: min(1.5rem, 3%);
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
      margin-left: 0.5rem;
      margin-right: 1.0rem;
   }

   .col-left {
      width: max(1rem, 5vw);
      max-width: 200px;
      min-width: 2em;
      background-color: transparent;
   }

   .col-right {
      margin-right: 0.1rem;
      width: calc(100%);
      height: calc(90vh - 3rem);
      background-color: transparent;
      /* border: 1px solid green; */
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
   $viewport_style = 'height:0';
   ?>

   <div class="headlines hl1">
      <?= $site_title ?>
   </div>
   <row class="row">
      <column class="col-left">
         <div>
            <ul class="headlines hl2 navbar-list ">
               <li class="navbar-tags">
                  <span><a href="about:blank" target="viewport" onclick="$viewport_style = 'height:0;'">
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
                        onclick="$viewport_style = 'height:100%;background-color:rgba(255,255,255,0.9); scroll:none'">
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
         <iframe name="viewport" src="about:blank" frameborder="0" title="viewport" height="0"
            onLoad="this.style=$viewport_style">
         </iframe>
      </column>
   </row>

   <footer>
      🤙 <a href="tel:+4917646774278">+49 176 4677 4278</a>
   </footer>


</body>

</html>