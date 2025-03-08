<!DOCTYPE html>
<html lang="en">

<?php
include_once "admin/config.php";
?>

<head>
   <meta charset="UTF-8">
   <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <meta name="author" content="<?= $app['info']['author'] ?>" />
   <meta name="description" content="<?= $app['info']['description'] ?>" />
   <meta property="og:image" content="https://avatars.githubusercontent.com/u/81757839?v=4" />
   <meta property="og:description" content="<?= $app['info']['description'] ?>" />
   <meta property="og:title" content="<?= $app['info']['name'] ?>" />
   <meta name="twitter:title" content="<?= $app['info']['name'] ?>" />

   <link href="https://vrw-gh.github.io/vrw-GH/" rel="prefetch" as="document" fetchpriority="high" />
   <link href="https://github.com/vrw-GH/" rel="prefetch" as="document" fetchpriority="high" />

   <script>
      master = window.parent.document;
      head = master.getElementsByTagName("head")[0];

      favicon = master.createElement("link");
      favicon.rel = "icon";
      favicon.type = "image/x-icon";
      favicon.href = "resources/images/favicon-vw.png";
      head.appendChild(favicon);

      title = master.getElementsByTagName("title")[0];
      title.text = "<?= $website['config']['title'] ?>";

      $viewport_style = 'height:100%; border: 0px solid blue;';
   </script>

   <style>
      /* generic */
      * {
         background-color: transparent;
         margin: 0;
         padding: 0;
         font-family: <?= $website['config']['font_family'] ?>;
         color: <?= $website['config']['font_color'] ?>;
      }

      /* html { */
      /* backdrop-filter: hue-rotate(<?= rand(1, 180) ?>deg); */
      /* } */

      body {
         background-color: <?= $website['config']['body_backcolor'] ?>;
         background-image: url(<?= $website['config']['main_background'] ?>);
         background-attachment: local;
         background-repeat: repeat-y;
         background-size: cover;
         background-position: top;
         height: calc(99vh - 4rem);
         max-width: calc(100% - 1rem);
         /* border: 1px solid red; */
      }

      a,
      a>* {
         text-decoration: none;
         background: linear-gradient(90deg, transparent, transparent, <?= $website['config']['body_backcolor'] ?>, <?= $website['config']['body_backcolor'] ?>);
         backdrop-filter: blur(10px);
         border: 0px solid transparent;
         border-radius: 4px 0.4rem 0.4rem 4px;
         padding-right: 3px;
      }

      a:focus,
      a>*:focus {
         background: linear-gradient(90deg, <?= $website['config']['font_color'] ?>, transparent, transparent, <?= $website['config']['body_backcolor'] ?>);
         color: <?= $website['config']['highlight_color'] ?>;
      }

      a:hover,
      a>*:hover {
         color: <?= $website['config']['link_color'] ?>;
      }

      small {
         font-size: max(0.5rem, 0.6em, 1.3vw);
         font-weight: 100;
      }

      .smaller {
         font-size: 0.8em;
         font-weight: 100;
      }
   </style>


   <style>
      /* layout */
      .row {
         display: flex;
         width: calc(100%);
         height: calc(99% - 1.5rem);
      }

      .col-left {
         width: max(2rem, 5vw);
         max-width: 50px;
         min-width: 1em;
         background: linear-gradient(90deg, black, transparent);
         /* border: 1px solid greenyellow; */
      }

      .col-right {
         width: calc(100%);
         background-color: transparent;
         overflow: auto;
         /* border: 1px solid yellow; */
      }
   </style>

   <style>
      /* specific */
      .headlines {
         color: <?= $website['config']['highlight_color'] ?>;
         z-index: 100;
         transition: color linear 0.6s;
      }

      .headlines:hover {
         color: <?= $website['config']['menu_hover_color'] ?>;
         cursor: default;
         /* transform: translate3d(0px, 0px, -30px) rotateX(90deg); */
         transition: color linear 0.2s;
      }

      .hl1 {
         padding: 10px 0 8px 1rem;
         text-shadow: <?= $website['config']['font_color'] ?> 4px 0 10px;
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
         color: <?= $website['config']['highlight_color'] ?> !important;
         width: auto;
         overflow: visible;
         white-space: normal;
         /* backdrop-filter: blur(10px); */
      }

      .hl2:hover>.nav-tags>.dropdown {
         display: block;
         color: <?= $website['config']['highlight_color'] ?>;
      }

      .hl2:focus-within {
         background-color:
            <?= $website['config']['highlight_color'] ?>;
      }
   </style>

   <style>
      /* navmenus */
      .nav-tags {
         list-style-position: inside;
         list-style-type: none;
         padding: 3px 3px 3px 0;
         margin-bottom: 1px;
         margin-left: 0;
         border-top-right-radius: 1rem;
         border-bottom-right-radius: 1rem;
         backdrop-filter: invert(30%);
      }

      .nav-tags:hover,
      .nav-tags:hover * {
         color: <?= $website['config']['highlight_color'] ?>;
      }

      .nav-tags * *:hover * {
         color: <?= $website['config']['menu_hover_color'] ?>;
         list-style-type: square;
         /* padding-left: 5px; */
      }

      .nav-tags>.dropdown {
         display: none;
         list-style-position: inside;
         list-style-type: circle;
         padding-top: 3px;
         margin-bottom: 5px;
         margin-left: 1rem;
         color: <?= $website['config']['menu_hover_color'] ?>;
      }

      .nav-tags>.dropdown:hover {
         display: block;
         color: <?= $website['config']['highlight_color'] ?>;
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
         /* backdrop-filter: blur(2px); */
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
         bottom: 2rem;
      }

      /* @media (width < 420px) and (hover: hover) { */
      @media (hover: hover) {
         footer {
            bottom: 0.4rem;
         }
      }
   </style>

</head>

<body>

   <script>
      window.GPTTConfig = {
         uuid: "34a622f144414a949659a552149ba0ee",
      }
   </script>
   <script src="https://app.gpt-trainer.com/widget-asset.min.js" defer>
   </script>

   <header>
      <div class="headlines hl1"
         title="Author: <?= $app['info']['author'][1] . '&#013' . " " . $app['info']['license'][1] ?>">
         <?= $website['config']['title'] ?>&nbsp;
         <small><small><small><small><small><small>
                           <?= $app['info']['version'][1]; ?>
                           <?= ($app['info']['version'][2] == 'beta') ?
                              '<a href="../"><i>' . $app['info']['version'][2] . '</i></a>'
                              : ''; ?>
                        </small></small></small></small></small></small>
      </div>
   </header>

   <nav>
      <ul class="headlines hl2">
         <li class="nav-tags">
            ≡&nbsp;&nbsp;
            <a href="." onclick="{                  
                     $viewport_style = 'height:100%; background:none;';
                     window.open('modules/canvas/canvas.php','viewport'); // to disable showing the *url
                  this.blur();
                  // viewport.focus();
                  }">
               <b>Home</b><i class='smaller'>&emsp;··· Welcome to my Digital Workshop</i>
            </a>
         </li>
         <li class="nav-tags">
            ►<b>&nbsp;&nbsp;About</b>
            <ul class="dropdown">
               <li><a href="https://vrw-gh.github.io/vrw-GH/" target="viewport" onclick="{
                     $viewport_style = 'height:100%; background:none; background-color:rgba(200,200,200,0.9); scroll:none; backdrop-filter: blur(15px);';
                     // viewport.location.reload();
                     // viewport.location.replace('https\:\/\/vrw-gh.github.io\/vrw-GH');
                     // document.getElementById('phone').focus({focusVisible: true});
                     // this.blur();                  
                     // document.getElementById('phone').mouseover();
                  }">
                     Me<i class='smaller'>&emsp;··· Github Page</i>
                  </a>
               </li>
               <!-- https://vrw-gh.github.io/vrw-GH/resume/cv_vw-en.jpg -->
               <li><a href="data:text/html,%3Cbr%3E%3Cbr%3E%3Ch1%20align%3D%22center%22%3E%3C%2Fh1%3E" target="viewport"
                     onclick="{
                     $viewport_style = 'width:100%; height:130dvw; background: url(\'https:\/\/vrw-gh.github.io/vrw-GH/resume/cv_vw-en.jpg\') center top no-repeat; background-size: 100% auto;';
                     // viewport.location.reload();
                  this.blur();
                  }">
                     Curiculum Vitae
                  </a>
               </li>
               <li><a href="https://github.com/vrw-GH" target="_blank" onclick="{
                     $viewport_style = 'background-color:rgba(255,255,255,0.9); scroll:none; backdrop-filter:blur(15px);';
                     // viewport.location.reload();
                  this.blur();
                  }">
                     On GitHub<i class='smaller'>&emsp;··· new window!</i>
                  </a>
               </li>
            </ul>
         </li>
         <li class="nav-tags">
            <!-- data:text/html,%3Ch1%20align%3D%22center%22%3EHello%2C%20World!%3C%2Fh1%3E -->
            ►<b>&nbsp;&nbsp;Gallery</b>&emsp;··· <small><i>Under Development</i></small>
            <ul class="dropdown">

               <!-- 
         <iframe width="980" height="410" src="https://europa.nasa.gov/message-in-a-bottle/check-in?hash=g4L2H%2BxkdeG0c91TSTTKaa0%3D--EB1KdX75rd8N%2BDgS--RKnsXFIJUmrDVtbfmXjhxQ%3D%3D&embed=true" frameborder="0"></iframe> -->
               <li><a href="https://europa.nasa.gov/message-in-a-bottle/check-in?hash=g4L2H%2BxkdeG0c91TSTTKaa0%3D--EB1KdX75rd8N%2BDgS--RKnsXFIJUmrDVtbfmXjhxQ%3D%3D&embed=true"
                     target="viewport" type="image/jpg" loading="eager" onclick="{
                        $viewport_style = 'height:100%; backdrop-filter: blur(3px);';                     
                        viewport.location.reload();
                        this.blur();                     
                        // viewport.focus();
                     }">
                     <!-- https:\/\/picsum.photos/800/900/?blur=1&random=2 -->
                     <!-- resources/images/tintin-characters.jpg -->
                     NASA - Europa Clipper<i class='smaller'>&emsp;··· Im on Board!</i>
                  </a></li>

               <li><a href="data:text/html,%3Cbr%3E%3Cbr%3E%3Ch1%20align%3D%22center%22%3EIt%27s%20A%20Wonderful%20World!%3C%2Fh1%3E"
                     target="viewport" type="image/jpg" onclick="{
                      $viewport_style = 'height:100%; background: url(\'https:\/\/picsum.photos/700/900\') no-repeat center / contain, url(\'resources/images/tintin-characters.jpg\') scroll; background-size: auto 90%, auto 50%; background-blend-mode: normal ; backdrop-filter: blur(3px);';                     
                  viewport.location.reload();
                  this.blur();
                  // viewport.focus();
                  }">
                     <!-- https:\/\/picsum.photos/800/900/?blur=1&random=2 -->
                     <!-- resources/images/tintin-characters.jpg -->
                     Look<i class='smaller'>&emsp;··· A Random Picture</i>
                  </a></li>
            </ul>
         </li>

         <li class="nav-tags">
            ►<b>&nbsp;&nbsp;Online Projects</b>
            <ul class="dropdown">
               <li><a href="https://sanskara-alpha.netlify.app" target="viewport" onclick="{
                     $viewport_style = 'background-color:rgba(255,255,255,0.9); scroll:none;backdrop-filter: blur(15px);';
                     // viewport.location.reload();
                  this.blur();
                  }">
                     Sanskara<i class='smaller'>&emsp;··· A Landing Page</i>
                  </a>
               </li>
               <li><a href="https://sharemyfood.vercel.app" target="viewport" onclick="{
                     $viewport_style = 'background-color:rgba(255,255,255,0.9); scroll:none;backdrop-filter: blur(15px);';
                     // viewport.location.reload();
                  this.blur();
                  }">
                     SMF<i class='smaller'>&emsp;··· Share My Food App</i>
                  </a>
               </li>
               <li><a href="https://vrwgh-myhackernews.netlify.app" target="viewport" onclick="{
                     $viewport_style = 'background-color:rgba(255,255,255,0.9); scroll:none;backdrop-filter: blur(15px);';
                     // viewport.location.reload();
                  this.blur();
                  }">
                     HN<i class='smaller'>&emsp;··· Hacker News App</i>
                  </a>
               </li>
            </ul>
         </li>

         <li class="nav-tags">
            &emsp14;&iopf;&nbsp;&nbsp;App Info
            <ul class="dropdown">
               <small>
                  <div style="width:40vw;">
                     <?php foreach ($app['info'] as $info) {
                        echo "<p>&emsp;";
                        echo $info[0]  . "<i class='smaller'>";
                        echo $info[1];
                        echo isset($info[2]) ? ' (' . $info[2] . ')' : '';
                        echo "</i></p>";
                     }
                     ?>
                  </div>
               </small>
               <a href="https://www.omnis.com/tracker/affiliates.php?name=BBKCXTE874;adid=omnistogo"><img
                     src="https://www.omnis.com/tracker/image.php?name=BBKCXTE874;adid=omnistogo;image=5" border="0"
                     width="88" height="31"></a>
            </ul>
         </li>

      </ul>
   </nav>

   <row class="row">
      <column class="col-left">
      </column>

      <column class="col-right">
         <iframe name="viewport" class="transitor" src="modules/canvas/canvas.php" loading="eager" frameborder="0"
            srcdocxx="" title="viewport" height="0" onLoad="{
            this.style = $viewport_style;
            this.removeAttribute('srcdocxx');
            window.history.replaceState(null, null, '');
            this.load(this.focus());
            }">
         </iframe>
      </column>
   </row>

   <footer>
      📞 <a id="phone" href="tel:+4917646774278">+49 176 4677 4278</a>
   </footer>


</body>

</html>