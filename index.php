<!doctype html><html><head> 
  <title>Divs Mind Game</title> 
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
 <style type="text/css" id="dcoder_stylesheet">body {
    text-align:center;
    margin:0;
    width:100vw;
    height:100vh;
    background-color:#efefef;
    overflow:hidden;
    font-weight:bolder;
    color:#5555FF;
    font-family:"Roboto";
}
div#load{
    background-color:black;
    display:flex;
    text-align:center;
    justify-content:center;
    align-items:center;
    width:100vw;
    height:100vh;
    position:fixed;
    top:0;
    left:0;
    z-index:10770;
    color:#ededed;
    overflow:hidden;
}
div#load div{
    padding:10vmin;
    font-size:7vmin;
}
button{
    background:none;
    width:80vmin;
    font-size:5vmin;
    height:24vmin;
    border:none;
    border-radius:2vmin;
    outline:none;
    padding:2vmin;
    color:#5555FF;
    font-weight:bolder;
    box-shadow:inset 2vmin 2vmin 5vmin #ffffff,
               inset -2vmin -2vmin 5vmin #dfdfdf,
               2vmin 2vmin 5vmin #dedede;
}
button:active{
    color:red;
    box-shadow:inset 2vmin 2vmin 5vmin #dfdfdf,
               inset -2vmin -2vmin 5vmin #ffffff;
}
span#num{
    min-width:25vmin;
    background-color:#108810;
    padding:4vmin;
    border-radius:2vmin;
    color:white;
    box-shadow:inset 2vmin 2vmin 5vmin #006600,
               inset -2vmin -2vmin 5vmin #20A820;
}
div#attempts{
    padding:4vmin;
}
span.attempt{
    transition:0.5s;
    color:red;
}
span#question{
    position:fixed;
    top:10px;
    left:10px;
    font-size:10vmin;
}
div#bingo{
    background-color:rgba(0,0,0,.8);
    display:none;
    text-align:center;
    justify-content:center;
    align-items:center;
    width:100vw;
    height:100vh;
    position:fixed;
    top:0;
    left:0;
    z-index:10770;
    color:#ededed;
    overflow:hidden;
    font-size:7vmin;
}</style></head> 
 <body> 
  <span id="question"></span> 
  <div id="load"> 
   <div>
    <h1>Welcome to Divya Pundhir's Magic World</h1><br>
    Think<i>any</i> number between<span> 0</span> and <span>1000</span>.<br> The computer will try to correctly guess it in 
    <i>no more</i> than 
    <i>ten</i> attempts. <br>Simply answer the questions correctly! <br>
    <h4>Touch to continue...</h4> 
   </div> 
  </div> 
  <div id="bingo">
    Yes you are right.
   <br>Do you want to play again?
   <br>Pick another number.
   <br> 
   <br>Touch to continue... 
  </div> 
  <h1 id="text">Is your number? </h1> <br><br>
  <h1><span id="num"> </span></h1> 
  <div> 
   <button id="small">"No, my number is bigger than that."</button> 
   <button id="right">"Yes! That is correct!" </button> 
   <button id="big">"No, my number is smaller than that."</button> 
  </div> 
  <div id="attempts"> 
   <span class="attempt">●</span> 
   <span class="attempt">●</span> 
   <span class="attempt">●</span> 
   <span class="attempt">●</span> 
   <span class="attempt">●</span> 
   <span class="attempt">●</span> 
   <span class="attempt">●</span> 
   <span class="attempt">●</span> 
   <span class="attempt">●</span> 
   <span class="attempt">●</span> 
  </div> 
 
<script type="text/javascript" id="dcoder_script">function id(n){
    return document.getElementById(n);
}
window.onload = function(){
    id("load").addEventListener("click", function(){this.style.display="none";});
   
id("bingo").addEventListener("click", function(){this.style.display="none";});
       id("question").addEventListener("click",function(){id("load").style.display="flex";});
    var dots = document.getElementsByClassName("attempt");
    var a = 0;
    var upLim = 1000;
    var loLim = 0;
    var ans = 500;
    id("small").addEventListener("click", Small);
    id("right").addEventListener("click", bingo);
    id("big").addEventListener("click", big);
    id("num").innerHTML = ans;  
    dots[a].style.color = "#dddddd";
    a++;
function Small(){
    loLim = ans;
    ans = Math.ceil((loLim+upLim)/2);
    id("num").innerHTML = ans;
    if(a==9){id("text").innerHTML = "Your number is:";
    dots[a].style.color = "#dddddd";
    loLim = ans;
    upLim = ans;}
    else{dots[a].style.color = "#dddddd";
    a++;}
}
function big(){
    upLim = ans;
    ans = Math.floor((loLim+upLim)/2);
    id("num").innerHTML = ans;
    if(a==9){id("text").innerHTML = "Your number is:";
    dots[a].style.color = "#dddddd";
    loLim = ans;
    upLim = ans;}
    else{dots[a].style.color = "#dddddd";
    a++;}
}
function bingo(){
    id("bingo").style.display = "flex";
    upLim = 1000;
    loLim = 0;
    ans = 500;
    id("num").innerHTML = ans;
    id("text").innerHTML = "Is your number ";
    a = 1;
    for(i=1;i<dots.length;i++){
        dots[i].style.color = "red";
    }
}
}</script></body></html>
