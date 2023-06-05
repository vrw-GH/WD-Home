<!DOCTYPE html>
<html lang="en">

<?php include_once "admin/config.php";
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

   <title><?= $website['config']['title'] ?>
   </title>

   <style>
   /* generic */
   * {
      background-color: transparent;
      margin: 0;
      padding: 0;
      font-family: <?=$website['config']['font_family'] ?>;
      color: <?=$website['config']['font_color'] ?>;
   }

   body {
      height: calc(99vh - 4rem);
      background-color: <?=$website['config']['body_backcolor'] ?>;
      background-image: url(<?= $website['config']['main_background'] ?>);
      background-attachment: local;
      /* background-repeat: no-repeat; */
      background-repeat: repeat-y;
      background-size: cover;
      max-width: calc(100% - 1rem);
      background-position: top;
      /* border: 1px solid red; */
   }

   a,
   a>* {
      text-decoration: none;
      background: linear-gradient(90deg, transparent, transparent, <?=$website['config']['body_backcolor'] ?>, <?=$website['config']['body_backcolor'] ?>);
      backdrop-filter: blur(10px);
      border: 0px solid transparent;
      border-radius: 4px 0.4rem 0.4rem 4px;
      padding-right: 3px;
   }

   a:focus,
   a>*:focus {
      background: linear-gradient(90deg, <?=$website['config']['font_color'] ?>, transparent, transparent, <?=$website['config']['body_backcolor'] ?>);
      color: <?=$website['config']['highlight_color'] ?>;
   }

   a:hover,
   a>*:hover {
      color: <?=$website['config']['link_color'] ?>;
   }

   small {
      font-size: max(0.5rem, 0.6em, 1.3vw);
      font-weight: 100;
   }
   </style>

   <style>
   /* specific */
   .headlines {
      z-index: 100;
   }

   .headlines:hover {
      color: <?=$website['config']['highlight_color'] ?>;
      cursor: default;
   }

   .hl1 {
      padding: 10px 0 8px 1rem;
      text-shadow: <?=$website['config']['font_color'] ?> 4px 0 10px;
      font-size: min(4rem, 4em, 6vw);
      font-weight: 800;
   }

   .hl2 {
      padding-left: min(0.5rem, 1%);
      cursor: pointer;
      width: 1rem;
      overflow: hidden;
      white-space: nowrap;
      z-index: 100;
      position: absolute;
   }

   .hl2:hover {
      color: <?=$website['config']['highlight_color'] ?> !important;
      width: auto;
      overflow: visible;
      white-space: normal;
      /* backdrop-filter: blur(10px); */
   }

   .hl2:hover>.nav-tags>.dropdown {
      display: block;
      color: <?=$website['config']['highlight_color'] ?>;
   }

   .hl2:focus {
      background-color:
         <?=$website['config']['highlight_color'] ?>;
   }
   </style>

   <style>
   /* layout */
   .row {
      display: flex;
      width: calc(100%);
      height: calc(99% - 1.5rem);
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
   /* navmenus */
   .nav-tags {
      list-style-position: inside;
      list-style-type: none;
      padding: 3px 3px 3px 0;
      /* padding-bottom: 3px; */
      margin-bottom: 1px;
      margin-left: 0;
      border-top-right-radius: 1rem;
      border-bottom-right-radius: 1rem;
      backdrop-filter: invert(30%);
   }

   .nav-tags:hover,
   .nav-tags>b:hover {
      color: <?=$website['config']['highlight_color'] ?>;
      /* color: <?= $website['config']['menu_hover_color'] ?>; */
   }

   .nav-tags * * :hover {
      /* color: <?= $website['config']['highlight_color'] ?>; */
      color: <?=$website['config']['menu_hover_color'] ?>;
      padding-left: 5px;
   }

   .nav-tags>.dropdown {
      display: none;
      list-style-position: inside;
      list-style-type: none;
      padding-top: 3px;
      margin-bottom: 5px;
      /* margin-left: 0; */
      margin-left: 1rem;
      color: <?=$website['config']['menu_hover_color'] ?>;
   }

   .nav-tags>.dropdown:hover {
      display: block;
      color: <?=$website['config']['highlight_color'] ?>;
      /* color: blue; */
   }

   /* .nav-tags>.dropdown>li:hover {
      backdrop-filter: blur(10px);      
   }   */
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
      bottom: 0.4rem;
   }

   /* @media (width < 420px) and (hover) {
         footer {
            bottom: 3rem;
         }
      } */
   </style>

   <?php
   // $viewport_style = 'height:100%; border: 1px solid blue';
   ?>

</head>

<body>

   <span>
      <div class="headlines hl1"
         title="Author: <?= $app['info']['author'][1] . '&#013' . $app['info']['license'][1] ?>">
         <?= $website['config']['title'] ?>&nbsp;
         <small><small><small><small><small><small>
                           <?= $app['info']['version'][1] ?>
                        </small></small></small></small></small></small>
      </div>
   </span>

   <div>
      <ul class="headlines hl2">
         <li class="nav-tags">
            <a href="." onclick="{
                     $viewport_style = 'height:100%; background:none;';
                     window.open('modules/canvas.php','viewport'); // to disable showing the *url
                     viewport.focus();
                     }">
               ≡<b>&nbsp;&nbsp;Home</b>&emsp;··· My Digital Workshop
            </a>
         </li>
         <li class="nav-tags">
            ►<b>&nbsp;&nbsp;About</b>
            <ul class="dropdown">
               <li><a href="https://vrw-gh.github.io/vrw-GH" target="viewport" onclick="{
                     $viewport_style = 'background-color:rgba(255,255,255,0.9); scroll:none;backdrop-filter: blur(15px);';
                     // viewport.location.reload();
                     // viewport.location.replace('https\:\/\/vrw-gh.github.io\/vrw-GH');
                     // viewport.focus();
                     }">
                     ○&nbsp;Me&emsp;··· <small>The Developer</small>
                  </a>
               </li>
               <li><a href="https://github.com/vrw-gh" target="viewport" onclick="{
                     $viewport_style = 'background-color:rgba(255,255,255,0.9); scroll:none;backdrop-filter: blur(15px);';
                     // viewport.location.reload();
                     }">
                     ○&nbsp;On GitHub
                     <!-- &emsp;··· <small>GitHub Profile</small> -->
                  </a>
               </li>
            </ul>
         </li>
         <li class="nav-tags">
            <!-- data:text/html,%3Ch1%20align%3D%22center%22%3EHello%2C%20World!%3C%2Fh1%3E -->
            ►<b>&nbsp;&nbsp;Gallery</b>&emsp;··· <small><i>Under Development</i></small>
            <ul class="dropdown">
               <li><a href="data:text/html,%3Cbr%3E%3Cbr%3E%3Ch1%20align%3D%22center%22%3EIt%27s%20A%20Wonderful%20World!%3C%2Fh1%3E"
                     target="viewport" type="image/jpg" onclick="{
                      $viewport_style = 'height:100%; background: url(\'https:\/\/picsum.photos/700/900\') no-repeat center / contain, url(\'resources/images/tintin-characters.jpg\') scroll; background-size: auto 90%, auto 50%; background-blend-mode: normal ; backdrop-filter: blur(3px);';                     
                     viewport.location.reload();
                     // viewport.focus();
                     }">
                     <!-- https:\/\/picsum.photos/800/900/?blur=1&random=2 -->
                     <!-- resources/images/tintin-characters.jpg -->
                     ○&nbsp;Look&emsp;··· <small>A Random Picture</small>
                  </a></li>
            </ul>
         </li>
         <li class="nav-tags">
            ►<b>&nbsp;&nbsp;Live Projects</b>
            <ul class="dropdown">
               <li><a href="https://sanskara-alpha.netlify.app" target="viewport" onclick="{
                     $viewport_style = 'background-color:rgba(255,255,255,0.9); scroll:none;backdrop-filter: blur(15px);';
                     // viewport.location.reload();
                     }">
                     ○&nbsp;Sanskara&emsp;··· <small>A Landing Page</small>
                  </a>
               </li>
               <li><a href="https://sharemyfood.vercel.app" target="viewport" onclick="{
                     $viewport_style = 'background-color:rgba(255,255,255,0.9); scroll:none;backdrop-filter: blur(15px);';
                     // viewport.location.reload();
                     }">
                     ○&nbsp;SMF&emsp;··· <small>Share My Food App</small>
                  </a>
               </li>
               <li><a href="https://vrwgh-myhackernews.netlify.app" target="viewport" onclick="{
                     $viewport_style = 'background-color:rgba(255,255,255,0.9); scroll:none;backdrop-filter: blur(15px);';
                     // viewport.location.reload();
                     }">
                     ○&nbsp;HN&emsp;··· <small>Hacker News App</small>
                  </a>
               </li>
            </ul>
         </li>

         <li class="nav-tags">
            ►&nbsp;&nbsp;App Info
            <ul class="dropdown">
               <small><?php
                        foreach ($app['info'] as $info) {
                           echo "<li>&emsp;$info[0]: <i>$info[1]</i></li>";
                        }
                        ?></small>
            </ul>
         </li>

      </ul>
   </div>

   <row class="row">
      <column class="col-left">
      </column>

      <column class="col-right">
         <iframe name="viewport" class="transitor" src="modules/canvas.php" frameborder="0" title="viewport" height="0"
            onLoad="{
            this.style = $viewport_style;
            this.removeAttribute('srcdoc2');
            window.history.replaceState(null, null, '');            
            }">
            <!-- this.className='transitor'; -->
         </iframe>
      </column>
   </row>

   <footer>
      📞 <a href="tel:+4917646774278">+49 176 4677 4278</a>
   </footer>

</body>

</html>