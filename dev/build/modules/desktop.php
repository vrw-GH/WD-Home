<!DOCTYPE html>
<html lang="en">

<?php
(@include_once "../admin/config.php") ? null : die("Configuration load error.");
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
   <link href="https://europa.nasa.gov/message-in-a-bottle/check-in?hash=g4L2H%2BxkdeG0c91TSTTKaa0%3D--EB1KdX75rd8N%2BDgS--RKnsXFIJUmrDVtbfmXjhxQ%3D%3D&embed=true" rel="prefetch" as="document" fetchpriority="high" />



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

      html {
      backdrop-filter: hue-rotate(<?= rand(1, 180) ?>deg);
      }

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
         title="App Info:  ◖<?= $app['info']['name'][1];?>◗
             <?= '&#013 Author: '.$app['info']['author'][1];?>
             <?= '&#013 © '.$app['info']['license'][1];?>
             ">
         <?= $website['config']['title'] ?>&nbsp;
         <span style="font-size:1rem;">
             <?= $app['info']['version'][1]; ?>
             <?= ($app['info']['version'][2] == 'beta') ?
             '<a href=".." style="font-size:0.5rem;" target="_parent"><i>' . $app['info']['version'][2] . '</i></a>'
             : ''; ?>
         </span>
      </div>
   </header>

   <nav>
      <ul class="headlines hl2">
         <li class="nav-tags">

            ≡&nbsp;&nbsp;

            <a href="" onclick="{                  
                     $viewport_style = 'height:100%; background:none;';
                     window.open($website['config']['components']['canvas'],'viewport'); // to disable showing the *url
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

            ►<b>&nbsp;&nbsp;Gallery</b>&emsp;··· <small><i>Under Development</i></small>

            <ul class="dropdown">
               <li><a href="https://europa.nasa.gov/message-in-a-bottle/check-in?hash=g4L2H%2BxkdeG0c91TSTTKaa0%3D--EB1KdX75rd8N%2BDgS--RKnsXFIJUmrDVtbfmXjhxQ%3D%3D&embed=true"
                     target="viewport" type="image/jpg" loading="eager" onclick="{
                        $viewport_style = 'height:100%; backdrop-filter: blur(3px);';                     
                        viewport.location.reload();
                        this.blur();                     
                        // viewport.focus();
                     }">
                     NASA - Europa Clipper<i class='smaller'>&emsp;··· Im on Board!</i>
                  </a></li>

<!-- 
<script>
console.log('🛑 -- For DEV use only.',
encodeURIComponent('<span style="display:flex;margin-top:70vh;font-size:3rem;color:#ff09;justify-content:center;background-blend-mode:multiply;">It\'s a Wonderful World!</span>'));
// %3Cbr%3E%3Cbr%3E%3Ch1%20align%3D%22center%22%3EIt%27s%20A%20Wonderful%20World!%3C%2Fh1%3E
</script> 
-->

               <li><a href="data:text/html,
%3Cspan%20style%3D%22display%3Aflex%3Bmargin-top%3A70vh%3Bfont-size%3A3rem%3Bcolor%3A%23ff09%3Bjustify-content%3Acenter%3Bmix-blend-mode%3Alighten%3B%22%3EIt's%20a%20Wonderful%20World!%3C%2Fspan%3E
                     "
                     target="viewport" type="image/jpg" onclick="{
                      $viewport_style = 'height:100%; background: url(\'<?=$website['config']['resources'];?>/images/wonderful.jpg\') no-repeat 97% 8% / contain, url(\'https:\/\/picsum.photos/1600/1200\') scroll center center; background-size: auto 60%, auto 100%; background-blend-mode: luminosity ; backdrop-filter: blur(3px);';
                  viewport.location.reload();
                  this.blur();
                  // viewport.focus();
                  }">
                     Look<i class='smaller'>&emsp;··· A Random Picture</i>
                  </a></li>
            </ul>
         </li>

         <li class="nav-tags">

            ►<b>&nbsp;&nbsp;Projects Portfolio</b>

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
                  <div style="width:40vw; font-size: 0.8rem;">
                     <?php foreach ($app['info'] as $info) {
                        echo "<p class='smaller'>&emsp;";
                        echo "<span style=\"color:grey;\">$info[0]</span>";
                        echo "<span>";
                        echo nl2br($info[1]);
                        echo isset($info[2]) ? ' (' . $info[2] . ')' : '';
                        echo "</span>";
                        echo "</p>";
                     }
                     ?>
                  </div>
               </small>
               <div style="margin: 10px;">
               <p style="position:absolute;z-index:10;left:40%;bottom:1px;color:#ff38;font-size:10px;">
                  Sponsors</p>
               <a href="https://www.omnis.com/tracker/affiliates.php?name=BBKCXTE874;adid=omnistogo" target="_blank">
                  <img src="https://www.omnis.com/tracker/image.php?name=BBKCXTE874;adid=omnistogo;image=<?=rand(2,3)?>" border="0" width="88" >
               </a>
               <a href="https://www.netcup.com"><img src="https://www.netcup.com/uploads/netcup_set_C_234x60_51f4bb2f8c.png" width="234" height="60" alt="netcup.com" />
               </a>
               <a href="https://www.omnis.com/tracker/affiliates.php?name=BBKCXTE874;adid=omnistogo" target="_blank">
                  <img src="https://www.omnis.com/tracker/image.php?name=BBKCXTE874;adid=omnistogo;image=<?=rand(5,5)?>" border="0" width="88" >
               </a>
               </div>
            </ul>
         </li>

      </ul>
   </nav>

   <row class="row">
      <column class="col-left">
      </column>

      <column class="col-right">
         <iframe name="viewport" class="transitor" src="<?=$website['config']['components']['canvas'];?>" loading="eager" frameborder="0"  
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

      <span style="display:flex;align-items: center;font-size: 0.8rem; background-color:#0008;border-radius:5px;"> &nbsp;
      <img  src="data:image/svg+xml;base64,PHN2ZyBmaWxsPSJ3aGl0ZSIgcm9sZT0iaW1nIiB2aWV3Qm94PSIwIDAgMjQgMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHRpdGxlPldoYXRzQXBwPC90aXRsZT48cGF0aCBkPSJNMTcuNDcyIDE0LjM4MmMtLjI5Ny0uMTQ5LTEuNzU4LS44NjctMi4wMy0uOTY3LS4yNzMtLjA5OS0uNDcxLS4xNDgtLjY3LjE1LS4xOTcuMjk3LS43NjcuOTY2LS45NCAxLjE2NC0uMTczLjE5OS0uMzQ3LjIyMy0uNjQ0LjA3NS0uMjk3LS4xNS0xLjI1NS0uNDYzLTIuMzktMS40NzUtLjg4My0uNzg4LTEuNDgtMS43NjEtMS42NTMtMi4wNTktLjE3My0uMjk3LS4wMTgtLjQ1OC4xMy0uNjA2LjEzNC0uMTMzLjI5OC0uMzQ3LjQ0Ni0uNTIuMTQ5LS4xNzQuMTk4LS4yOTguMjk4LS40OTcuMDk5LS4xOTguMDUtLjM3MS0uMDI1LS41Mi0uMDc1LS4xNDktLjY2OS0xLjYxMi0uOTE2LTIuMjA3LS4yNDItLjU3OS0uNDg3LS41LS42NjktLjUxLS4xNzMtLjAwOC0uMzcxLS4wMS0uNTctLjAxLS4xOTggMC0uNTIuMDc0LS43OTIuMzcyLS4yNzIuMjk3LTEuMDQgMS4wMTYtMS4wNCAyLjQ3OSAwIDEuNDYyIDEuMDY1IDIuODc1IDEuMjEzIDMuMDc0LjE0OS4xOTggMi4wOTYgMy4yIDUuMDc3IDQuNDg3LjcwOS4zMDYgMS4yNjIuNDg5IDEuNjk0LjYyNS43MTIuMjI3IDEuMzYuMTk1IDEuODcxLjExOC41NzEtLjA4NSAxLjc1OC0uNzE5IDIuMDA2LTEuNDEzLjI0OC0uNjk0LjI0OC0xLjI4OS4xNzMtMS40MTMtLjA3NC0uMTI0LS4yNzItLjE5OC0uNTctLjM0N20tNS40MjEgNy40MDNoLS4wMDRhOS44NyA5Ljg3IDAgMDEtNS4wMzEtMS4zNzhsLS4zNjEtLjIxNC0zLjc0MS45ODIuOTk4LTMuNjQ4LS4yMzUtLjM3NGE5Ljg2IDkuODYgMCAwMS0xLjUxLTUuMjZjLjAwMS01LjQ1IDQuNDM2LTkuODg0IDkuODg4LTkuODg0IDIuNjQgMCA1LjEyMiAxLjAzIDYuOTg4IDIuODk4YTkuODI1IDkuODI1IDAgMDEyLjg5MyA2Ljk5NGMtLjAwMyA1LjQ1LTQuNDM3IDkuODg0LTkuODg1IDkuODg0bTguNDEzLTE4LjI5N0ExMS44MTUgMTEuODE1IDAgMDAxMi4wNSAwQzUuNDk1IDAgLjE2IDUuMzM1LjE1NyAxMS44OTJjMCAyLjA5Ni41NDcgNC4xNDIgMS41ODggNS45NDVMLjA1NyAyNGw2LjMwNS0xLjY1NGExMS44ODIgMTEuODgyIDAgMDA1LjY4MyAxLjQ0OGguMDA1YzYuNTU0IDAgMTEuODktNS4zMzUgMTEuODkzLTExLjg5M2ExMS44MjEgMTEuODIxIDAgMDAtMy40OC04LjQxM1oiLz48L3N2Zz4=" width=20 height=20>
        &nbsp;<?=$app['info']['phone'][1]?>
      </span>

   </footer>

</body>

</html>