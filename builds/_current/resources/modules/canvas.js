var canvas = document.querySelector("#canvas"),
    ctx = canvas.getContext("2d", { willReadFrequently: true }),
    particles = [],
    amount = 0,
    mouse = { x: 0, y: 0 },
    // radius = 0.4;
    radius = Math.random() * 1.2 + 0.4;

var ww = canvas.width = window.innerWidth,
    wh = canvas.height = window.innerHeight;

var textField = document.querySelector("#text");

// var colors = ["#FFAEE7", "#A18704", "#F2FF3B", "#FF8E4D", "#3D00CA"]; //original
var colors1 = ["#62CBFC", "#454ECF", "#FFDF8F", "#00FFDD", "#05885C"]; //blues
var colors2 = ["#FFEA2E", "#CF7C45", "#B38D12", "#FF0000", "#880E05"]; //reds
var colors = colors1;

function Particle(x, y) {
    this.x = Math.random() * ww;
    this.y = Math.random() * wh;
    this.dest = {
        x: x,
        y: y
    };
    this.r = Math.random() * Math.floor(ww / 200) + Math.floor(ww / 300); //size of particles rand*smallest + biggest
    this.vx = (Math.random() - 0.5) * 20;
    this.vy = (Math.random() - 0.5) * 20;
    this.accX = 0;
    this.accY = 0;
    // this.friction = Math.random() * 0.02 + 0.94;
    this.friction = Math.random() * 0.005 + 0.94;

    this.color = colors[Math.floor(Math.random() * 6)];
}

Particle.prototype.render = function () {

    this.accX = (this.dest.x - this.x) / 500; // /800
    this.accY = (this.dest.y - this.y) / 500;
    this.vx += this.accX;
    this.vy += this.accY;
    this.vx *= this.friction;
    this.vy *= this.friction;

    this.x += this.vx;
    this.y += this.vy;

    ctx.fillStyle = this.color;
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.r, Math.PI * 2, false);
    ctx.fill();

    var a = this.x - mouse.x;
    var b = this.y - mouse.y;

    var distance = Math.sqrt(a * a + b * b);
    if (distance < (radius * 70)) {
        this.accX = (this.x - mouse.x) / 100;
        this.accY = (this.y - mouse.y) / 100;
        this.vx += this.accX;
        this.vy += this.accY;
    }

}

function onMouseMove(e) {
    mouse.x = e.clientX;
    // mouse.x = Math.floor(e.clientX * (1 + (window.innerWidth - canvas.clientWidth) / window.innerWidth) - 45);

    mouse.y = e.clientY;
    // mouse.y = Math.floor(e.clientY * (1 + (window.innerHeight - canvas.clientHeight) / window.innerHeight) - 90);
}

function onTouchMove(e) {
    if (e.touches.length > 0) {
        mouse.x = e.touches[0].clientX;
        mouse.y = e.touches[0].clientY;
    }
}

function onTouchEnd(e) {
    mouse.x = -9999;
    mouse.y = -9999;
}

function initScene() {

    ww = canvas.width = window.innerWidth;
    wh = canvas.height = window.innerHeight;

    ctx.clearRect(0, 0, canvas.width, canvas.height);

    ctx.font = "bold " + (ww / 10) + "px sans-serif"; //standard font
    ctx.textAlign = "center";
    if (textField.value != "") {
        colors = colors2;
        radius = Math.random() * 1.2 + 0.4;
        ctx.fillText(((textField.value.length > 8) ? "Hi, " : "Welcome, ") + textField.value.charAt(0).toUpperCase() + textField.value.slice(1), ww / 2, wh * 80 / 100); // more to the bottom
    } else {
        colors = colors1;
        ctx.fillText("Hi. I am Victor", ww / 2, ww / 15 + 15); //top aligned on font "scale" +offset
    }

    var data = ctx.getImageData(0, 0, ww, wh).data;
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.globalCompositeOperation = "screen";

    particles = [];
    for (var i = 0; i < ww; i += Math.round(ww / 150)) {
        for (var j = 0; j < wh; j += Math.round(ww / 150)) {
            if (data[((i + j * ww) * 4) + 3] > 150) {
                particles.push(new Particle(i, j));
            }
        }
    }
    amount = particles.length;
}

function onMouseClick() {
    // radius++;
    // radius = Math.random() * 1.2 + 0.4;
    radius = (Math.round((Math.random() * 12 + 4) / 2) / 5); // in-increments of 0.2
    if (radius > 1.4) {
        radius = 0;
    }
}

function render(a) {
    requestAnimationFrame(render);
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    for (var i = 0; i < amount; i++) {
        particles[i].render();
    }
};


// textField.addEventListener("keyup", initScene);
// textField .addEventListener("keyup", (e) => { if (e.key === "Enter") { initScene() } });
window.addEventListener("resize", initScene);
canvas.addEventListener("mousemove", onMouseMove);
canvas.addEventListener("click", onMouseClick);
canvas.addEventListener("touchmove", onTouchMove);
canvas.addEventListener("touchend", onTouchEnd);
document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
        textField.value = "";
        initScene();
    };
    textField.focus();
});

textField.addEventListener('keypress', (e) => {
    if (e.key === "Enter") {
        textField.blur();
        initScene()
    }
});
textField.addEventListener('blur', (e) => {
    if (e.value != "") {
        textField.blur();
        initScene()
    }
}, true);

initScene();
requestAnimationFrame(render);
