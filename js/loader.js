
const loader = document.querySelector(".loadercon");
const win = document.querySelector("#winner"); 
const cards = document.querySelector("#cards");


var ctx = document.getElementById('circularLoader').getContext('2d');
var al = 0;
var start = 4.72;
var cw = ctx.canvas.width;
var ch = ctx.canvas.height; 
var diff;
var sim ;

var myModal = new bootstrap.Modal(document.getElementById('modal'), {
  keyboard: false 
});

function progressSim(){
    diff = ((al / 100) * Math.PI*2*10).toFixed(2);
    ctx.clearRect(0, 0, cw, ch);
    ctx.lineWidth = 17;
    ctx.fillStyle = '#4285f4';
    ctx.strokeStyle = "#4285f4";
    ctx.textAlign = "center";
    ctx.font="28px monospace";
    ctx.fillText(al+'%', cw*.52, ch*.5+5, cw+12);
    ctx.beginPath();
    ctx.arc(100, 100, 75, start, diff/10+start, false);
    ctx.stroke();

if(al >= 100){
    clearInterval(sim); // وقف الـ interval صح
    loader.style.display ='none'; // اخفاء اللودر
    myModal.show(); // عرض المودال
}
    
    al++;
}

win.addEventListener('click', function() {
    al = 0; // ✅ عشان يبتدي من 0 كل مرة
    loader.style.display ='block';
    sim = setInterval(progressSim, 20);
});
