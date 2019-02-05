<!DOCTYPE html>
<html >
  <head>
    <title></title>


  </head>
  <body>
  <form method="GET" action="#">
First name: <input type="text" name="firstname" value="Mickey"><br>
  <input type="submit" value="Submit">
<br>
<p id="demo"></p> 
<br>
<br>
<p id="demo1"></p> 
<br>
<p id="demo2"></p> 
<br>
<p id="demo3"></p> 
<br>
<p id="demo4"></p> 
</form>
 <p>Heelo </p>

<input type="text" id="txtBox">
<input type="button" value="process" onclick="processString()">
<textarea id="txt" ></textarea>
<script>
console.log('file name');
var filename3=window.location.href;
console.log(window.location.href.match(/[^/]+$/));
var filename=window.location.href.match(/[^/]+$/);
var filename2=window.location.href.match(/[^=]+$/);

console.log('filename= '+ filename[0]);
console.log('filename2= '+ filename2[0]);

document.getElementById("demo").innerHTML = 
"The full URL of this page is:<br>" + window.location.href;
document.getElementById("demo1").innerHTML = 
"Page hostname is: " + window.location.hostname;
document.getElementById("demo2").innerHTML =
"Page path is: " + window.location.pathname;
document.getElementById("demo3").innerHTML =
"The page protocol is: " + window.location.protocol; 

let url = new URL(filename3);
let searchParams = new URLSearchParams(url.search);  // get in function
console.log(searchParams.get('firstname'));  

document.getElementById("demo4").innerHTML = 
"The page variable is: " + searchParams.get('firstname'); 
 
var filename4=searchParams.get('firstname');

function processString(){
var input=document.getElementById("txtBox").value;
var result=input.match(/\d/);   //show 9, if i write in textbox mark-9 76
var result2=input.match(/\d/g); //show 9,7,6
if(result2!=null){
for(var i=0;i<result2.length;i++){
document.getElementById("txt").value+=result2[i]+"\r\n";

}

}

alert(result);
alert(result2);
}

</script>

<?php
echo $a="<script>document.write(filename4)</script>";
?>

  </body>
</html>
