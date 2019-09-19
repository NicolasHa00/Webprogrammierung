var c = document.getElementById("Canvas");
var ctx = c.getContext("2d");
ctx.fillStyle="#000000";

ctx.beginPath();
ctx.rect(5,5,90,90);
ctx.stroke();
ctx.rect(0,0,100,100);
ctx.stroke();

ctx.moveTo(10,90);
ctx.lineTo(10,10);
ctx.stroke();
ctx.lineTo(30,40);
ctx.stroke();
ctx.lineTo(50,10)
ctx.stroke();
ctx.lineTo(50,90);
ctx.stroke();

ctx.moveTo(55,90);
ctx.lineTo(55,10);
ctx.stroke();
ctx.lineTo(90,90);
ctx.stroke();
ctx.lineTo(90,10);
ctx.stroke();

