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
         border: 3px solid transparent;
         border-radius: 8px;
         /* background: linear-gradient(90deg, transparent, #ccc, transparent, transparent, transparent); */
      }

      a:focus {
         border: 3px solid #fff;
         color: #fff;
      }

      a:hover {
         color: #fff;
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

      .headline:hover {
         color: #fff;
      }

      .hl1 {
         padding: 10px 0 5px 1rem;
         text-shadow: #ccc 4px 0 10px;
         font-size: min(4rem, 4em, 4vw);
         font-weight: 800;
      }

      .hl2 {
         padding: 0 0 0 1.5rem;
         cursor: pointer;
         width: 5rem;
         overflow: hidden;
         white-space: nowrap;
      }

      .hl2:hover {
         width: auto;
         overflow: visible;
         white-space: normal;
      }
   </style>
</head>

<body>
   <div class="headline hl1">
      Wrights Desk
   </div>
   <div class="headline hl2">
      <span><a href="."><b>≡ Home</b>&emsp;···&emsp; My Digital Workshop</a></span>
   </div>

</body>

</html>