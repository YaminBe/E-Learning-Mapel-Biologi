<html> 
<head> 
<title>Jam Digital</title> 
<script type="text/javascript"> 
// 1 detik = 1000 
window.setTimeout("waktu()",1000); 
function waktu() {
var tanggal = new Date(); 
setTimeout("waktu()",1000); 
 document.getElementById("tanggalku").innerHTML 
= tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds(); 
 } 
 </script> 
 </head>
 <body bgcolor="red" text="black" onLoad="waktu()"> 
 <table align=center style="border:0px solid black" bgcolor="red"><tr><td> 
 <div id="tanggalku"> 
 </div></td></tr> 
 </table> 
 </body> 
 </html>