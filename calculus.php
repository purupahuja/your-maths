<?php
	session_start();
	$link= mysqli_connect("localhost", "cl13-yourmaths", "password", "cl13-yourmaths");
	$query="SELECT diary FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";
    $result = mysqli_query($link,$query);	
	$row = mysqli_fetch_array($result);
	$diary=$row['diary'];
    $quer="SELECT firstname FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";
    $result = mysqli_query($link,$quer);
	$ro = mysqli_fetch_array($result);	
	$fn=$ro['firstname'];
?>

<html lang="en">
  <head>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculus | YourMaths</title>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic|Raleway:400,400italic,500,500italic,600,600italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="favicon.PNG">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
      <script src="smoothscroll.js"></script>
       <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
      <script src="SmoothScroll.js"></script>
      <link rel="stylesheet" href="main.css">
              <style>
            h1{
                text-align: center;
                align-content: center;
            }
            .result{
                display:none;
                font-size:1.33em;
            }
            .right{
                color: darkgreen;
            }
            .wrong{
                color: darkred;
            }
        </style>
  </head>
<body data-spy="scroll" data-target=".navbar-collapse">
 <div class="container contentContainer" id="topContainer">
  		<div class="row">
  			<div class="col-md-6 col-md-offset-3" id="topRow">
                <h3 class="greet" style="font-family: Open Sans;">Calculus</h3>
                <br><br>
                
 			 </div>
		</div>
<div class="container">
<br><br>
    <script>
        var q1r = Math.floor(10*(Math.random()));
        var q1an = q1r*q1r*12;
                document.write(q1an);
    </script>
<h3 id=" q1">1. Find f'(<i id="q1as"><script>document.write(q1r);</script></i>) of f(x)=4x<sup>3</sup></h3>
            <input type="number" id="a">
    <input type="button" id="ac" name="ac" value="Check" onclick="af()" />
            <br>
            <h3 class="result right" id="ar">Correct!</h3>
    <h3 class="result wrong" id="aw">Incorrect.</h3>
    
            
            <h3>2. Consider the sequence: 87, 83, 79, 75, 71,… which term of the sequence is -297?</h3>
            <input type="number" id="b">
            <button id="bc" onclick="bf()">Check</button>
            <br>
            <h3 class="result right" id="br">Correct!</h3>
            <h3 class="result wrong" id="bw">Incorrect, the answer is 97.</h3>
            
            <h3>3. A sequence is defined by: U<sub>n</sub>= 3n-2. Find the 57<sup>th</sup> term.</h3>
            <input type="number" id="c">
            <button id="cc" onclick="cf()">Check</button>
            <br>
            <h3 class="result right" id="cr">Correct!</h3>
            <h3 class="result wrong" id="cw">Incorrect, the answer is 169</h3>
            
            <h3>4. Find the 6<sub>th</sub> term of the following geometric sequence: 2, 10, 50…</h3>
            <input type="number" id="d">
            <button id="dc" onclick="df()">Check</button>
            <br>
            <h3 class="result right" id="dr">Correct!</h3>
            <h3 class="result wrong" id="dw">Incorrect, the answer is 6250</h3>
            
            <h3>Find k given that the following are consecutive terms of a geometric sequence: k, k+8, 9k</h3>
            <input type="number" id="e">
            <button id="ec" onclick="ef()">Check</button>
            <br>
            <h3 class="result right" id="er">Correct!</h3>
            <h3 class="result wrong" id="ew">Incorrect, the answer is 2</h3>
        </div>
        <script>
            function af(){
                
                if (document.getElementById("a").value == q1an){
                    document.getElementById("ar").style.display = "block";
                    document.getElementById("aw").style.display = "none";
                }
                else{
                    document.getElementById("aw").style.display = "block";
                    document.getElementById("ar").style.display = "none";
                }
            }
            
            function bf(){
                if (document.getElementById("b").value == 97){
                    document.getElementById("br").style.display = "block";
                    document.getElementById("bw").style.display = "none";
                }
                else{
                    document.getElementById("bw").style.display = "block";
                    document.getElementById("br").style.display = "none";
                }
            }
            
            function cf(){
                if (document.getElementById("c").value == 169){
                    document.getElementById("cr").style.display = "block";
                    document.getElementById("cw").style.display = "none";
                }
                else{
                    document.getElementById("cw").style.display = "block";
                    document.getElementById("cr").style.display = "none";
                }
            }
            
            function df(){
                if (document.getElementById("d").value == 6250){
                    document.getElementById("dr").style.display = "block";
                    document.getElementById("dw").style.display = "none";
                }
                else{
                    document.getElementById("dw").style.display = "block";
                    document.getElementById("dr").style.display = "none";
                }
            }
            
             function ef(){
                if (document.getElementById("e").value == 2){
                    document.getElementById("er").style.display = "block";
                    document.getElementById("ew").style.display = "none";
                }
                else{
                    document.getElementById("ew").style.display = "block";
                    document.getElementById("er").style.display = "none";
                }
            }
        </script>
   

        
        
    </div>
</div>
     <br></div>
    </body></html>