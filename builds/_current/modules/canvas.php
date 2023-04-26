<!-- <link href="canvas.css" rel="stylesheet"> -->
<style>
* {
   margin: 0;
   padding: 0;
}

html {
   width: 99%;
   height: 99%;

   /* border: 1px solid green; */
}

canvas {
   cursor: crosshair;
   display: block;
   /* position         : relative; */
   width: 100%;
   /* height: calc(100% - 2.2rem); */

   /* border: 1px solid blue; */
}

input {
   width: 250px;
   height: 2rem;
   line-height: 40px;
   position: absolute;
   bottom: 3px;
   left: calc(50% - 125px);
   color: transparent;
   font-size: 2rem;
   font-family: arial;
   text-align: center;
   border: none;
   background: none;

   /* border                    : 1px solid white; */
}

input::placeholder {
   border: none;
}

input:focus {
   border: none;
   color: lightgray
}

input:blank {
   border: none;
}

input:placeholder-shown {
   border: none;
}

input:read-write {
   border: none;
}
</style>
<script src="canvas.js" defer></script>

<canvas id='canvas'>Canvas is not supported in your browser.</canvas>
<input id='text' type='text' value='' placeholder='Type your name' maxlength='12' tabindex="1" autofocus='autofocus' />
<p id="test" style="color:grey; font-size:small; position:absolute; top:0;right:0">Test</p>