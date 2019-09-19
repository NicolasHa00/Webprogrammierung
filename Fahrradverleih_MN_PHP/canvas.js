var c = document.getElementById("Canvas");
var ctx = c.getContext("2d");
ctx.fillStyle="#000000";

ctx.beginPath();
ctx.rect(2.5,2.5,45,45);
ctx.stroke();
ctx.rect(0,0,50,50);
ctx.stroke();

ctx.moveTo(5,45);
ctx.lineTo(5,5);
ctx.stroke();
ctx.lineTo(15,20);
ctx.stroke();
ctx.lineTo(25,5)
ctx.stroke();
ctx.lineTo(25,45);
ctx.stroke();

ctx.moveTo(27.5,45);
ctx.lineTo(27.5,5);
ctx.stroke();
ctx.lineTo(45,45);
ctx.stroke();
ctx.lineTo(45,5);
ctx.stroke();

