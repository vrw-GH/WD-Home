<!DOCTYPE html>
<html lang="en">

<?php include_once "admin/site_data.php";
?>

<head>
   <meta charset="UTF-8">
   <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <meta name="author" content="Victor Wright" />
   <meta name="description"
      content="The Wright's Desk is an online showcase for all our blogs, articles, news, development projects, galleries, and other stuff." />
   <meta property="og:image" content="https://avatars.githubusercontent.com/u/81757839?v=4" />
   <meta property="og:description"
      content="The Wright's Desk is an online showcase for all our blogs, articles, news, development projects, galleries, and other stuff." />
   <meta property="og:title" content="The Wright's Desk" />
   <meta name="twitter:title" content="The Wright's Desk" />

   <link href="resources/images/vw-favicon.png" rel="icon" type="image/png"> <!-- image/x-icon -->
   <link href="https://vrw-gh.github.io/vrw-GH" rel="prefetch" as="document" fetchpriority="high" />

   <title><?= $site_title ?></title>

   <style>
   * {
      background-color: transparent;
      margin: 0;
      padding: 0;
      font-family: <?=$font_family ?>;
      color: <?=$font_color ?>;
   }

   body {
      height: calc(100vh);
      background-color: <?=$body_backcolor ?>;
      background-image: url(<?= $main_background ?>);
      background-attachment: local;
      background-repeat: no-repeat;
      background-size: cover;
      max-width: calc(100% - 1.5rem);
      max-height: 100vh;
      background-position: top;
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
   </style>

   <style>
   .headlines {
      z-index: 100;
   }

   .headlines:hover {
      color: <?=$highlight_color ?>;
   }

   .hl1 {
      padding: 10px 0 8px 1rem;
      text-shadow: <?=$font_color ?> 4px 0 10px;
      font-size: min(4rem, 4em, 6vw);
      font-weight: 800;
   }

   .hl2 {
      padding-left: min(0.5rem, 1%);
      cursor: pointer;
      width: 0.66em;
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
   </style>

   <style>
   .row {
      display: flex;
      width: calc(100%);
      height: calc(95vh - 3.3rem);
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
      margin-bottom: 5px;
      margin-left: 0;

   }

   .navbar-tags>.dropdown {
      display: none;
   }

   .navbar-tags>li:hover>.dropdown {
      display: block;
      /* color: <?= $highlight_color ?>; */
      color: blue;
   }
   </style>

   <style>
   iframe {
      display: flex;
      z-index: 0;
      height: 100%;
      width: 100%;
      border: none;
      border-radius: 6px;
   }

   .transitor {
      transition-duration: 1.0s;
      transition-timing-function: ease-in-out;
      transition-property: all;
   }
   </style>

   <style>
   footer {
      display: flex;
      justify-content: left;
      width: 100%;
      position: absolute;
      bottom: 0.5rem;

   }
   </style>
   <?php
   $viewport_style = 'height:100%; border: 1px solid blue';
   ?>

</head>

<body>

   <div class="headlines hl1">
      <?= $site_title ?>
   </div>

   <div>
      <ul class="headlines hl2 ">
         <li class="navbar-tags">
            <span><a href="modules/canvas.php" target="viewport" onclick="{
                     $viewport_style = 'height:100%;';                                        
                     viewport.focus();
                     }">
                  <b>≡&nbsp;Home</b>&emsp;··· My Digital Workshop
               </a></span>
            <ul class="dropdown">
               <li><a href="#me">Me</a></li>
            </ul>
            <ul class="dropdown">
               <li><a href="">Gallery</a></li>
            </ul>
         </li>
         <li class="navbar-tags">
            <span><a href="https://vrw-gh.github.io/vrw-GH" target="viewport" onclick="{
                     $viewport_style = 'background-color:rgba(255,255,255,0.9); scroll:none;backdrop-filter: blur(15px);';
                     viewport.location.reload();
                     // viewport.focus();
                     }">
                  <b>•&nbsp;About</b>&emsp;··· About Me
               </a></span>
         </li>
         <li class="navbar-tags">
            <!-- data:text/html,%3Ch1%20align%3D%22center%22%3EHello%2C%20World!%3C%2Fh1%3E -->
            <span><a href="data:text/html,%3Ch1%20align%3D%22center%22%3EIt%27s%20A%20Wonderful%20World!%3C%2Fh1%3E"
                  target="viewport" type="image/jpg" onclick="{
                      $viewport_style = 'height:100%; background: url(\'https:\/\/picsum.photos/700/900\') no-repeat center / contain, url(\'resources/images/tintin-characters.jpg\') scroll; background-size: auto 90%, auto 50%; backdrop-filter: blur(3px);';
                     viewport.location.reload();
                     // viewport.focus();
                     }">
                  <!-- https:\/\/picsum.photos/800/900/?blur=1&random=2 -->
                  <!-- resources/images/tintin-characters.jpg -->
                  <b>•&nbsp;Other</b>&emsp;··· Random Picture
               </a></span>
         </li>
      </ul>
   </div>

   <row class="row">
      <column class="col-left">
      </column>
      <column class="col-right">

         <iframe name="viewport" src="modules/canvas.php" frameborder="0" title="viewport" height="0" onLoad="{
            this.style = $viewport_style ;
            this.className='transitor' ;
            this.removeAttribute('srcdoc2');
            
            }">
            <!-- this.style = '<?= $viewport_style ?>' ; -->
            <!-- this.focus(); -->
         </iframe>

      </column>
   </row>

   <footer>
      📞 <a href="tel:+4917646774278">+49 176 4677 4278</a>
   </footer>

</body>

</html>