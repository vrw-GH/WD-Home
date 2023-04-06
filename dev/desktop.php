<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Wrights Desk</title>

   <style>

   * {
      background-color: transparent;
      margin: 0;
      padding: 0;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      color: #ccc;
   }

   a {
      text-decoration: none;
      border: 0px solid transparent;
      /* border-radius: 8px; */
   }

   a:focus {
      /* border: 2px solid transparent; */
      background: linear-gradient(90deg, #ccc, transparent, transparent, transparent);
      color: #fff;
   }

   a:hover {
      /* color: #fff; */
      color: red;
   }

   body {
      height: 100vh;
      background-color: #111;
      background-image: url("resources/images/nikita-kachanovsky-OVbeSXRk_9E-unsplash.jpg");
      background-attachment: local;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: bottom;
   }

   .headlines {
      z-index: 100;
   }

   .headlines:hover {
      color: #fff;
   }

   .hl1 {
      padding: 10px 0 5px 1rem;
      text-shadow: #ccc 4px 0 10px;
      font-size: min(4rem, 4em, 6vw);
      font-weight: 800;
   }

   .hl2 {
      padding: 0 0 0 1.5rem;
      cursor: pointer;
      width: 3.5rem;
      overflow: hidden;
      white-space: nowrap;
   }

   .hl2:hover {
      color: #fff;
      width: auto;
      overflow: visible;
      white-space: normal;
   }

   .row {
      display: flex;
      width: calc(100% - 2rem - 10px);
      margin-left: 1.5rem;
   }

   .col-left {
      width: max(1em, 10vw);
      max-width: 200px;
      background-color: transparent;
   }

   .col-right {
      margin-right: 2rem;
      width: calc(100%);
      height: 80vh;
      /* background-color: green; */
      background-color: transparent;
   }
   </style>

   <style>
   .dropdown {
      display: none
   }

   .navbar-list li:focus>.dropdown {
      display: block;
      color: #fff;
   }

   .navbar-tags {
      padding: 0;
      list-style-type: none;
   }
   </style>

   <style>
   iframe[name=viewport] {
      width: 100%;
      border: none;
      height: calc(100% - 2rem);
      /* border-radius: 200px 200px 0 0; */
   }

   iframe[name=viewport]:hover {
      backdrop-filter: blur(4px);
      backdrop-filter: brightness(20%);
   }

   iframe[name=viewport]:has(body) {
      border: 2px solid red;
   }
   </style>
</head>

<body>

   <div class="headlines hl1">
      Wrights Desk
   </div>
   <!-- <div class="headline hl2">
      <span><a href="."><b>≡ Home</b>&emsp;···&emsp; My Digital Workshop</a></span>
   </div> -->
   <ul class="headlines hl2 navbar-list ">
      <li class="navbar-tags"><span><a href="about:blank" target="viewport"><b>Home</b>&emsp;···&emsp; The Wright's
               Digital Workshop</a></span>
         <ul class="dropdown">
            <li><a href="#me">Me</a></li>
         </ul>
         <ul class="dropdown">
            <li><a href="">Gallery</a></li>
         </ul>
      </li>
      <li class="navbar-tags"><span><a href="https://vrw-gh.github.io/vrw-GH"
               target="viewport"><b>About</b>&emsp;···&emsp; About Me</a></span>
      </li>
   </ul>
   <row class="row">
      <column class="col-left">

      </column>
      <column class="col-right">
         <iframe name="viewport" src="" frameborder="0" title="viewport" height="0">
            <!-- onload="this.Set(height='500')" -->
         </iframe>
      </column>
   </row>

</body>

</html>