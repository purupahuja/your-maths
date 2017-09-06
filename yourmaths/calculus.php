
	session_start();
	$link= mysqli_connect("localhost", "cl13-yourmaths", "password", "cl13-yourmaths");
	$query="SELECT diary FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";
    $result = mysqli_query($link,$query);	
	$row = mysqli_fetch_array($result);
	$diary=$row['diary'];
    $quer="SELECT firstname FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";
    $result = mysqli_query($link,$quer);
	$ro = mysqli_fetch_array($result);	
	$currentCalculus=$ro['calculus'];



<?php
    // creates a variable for connecting to databse with corresponding username, password, server name
    $link= mysqli_connect("localhost", "cl13-yourmaths", "password", "cl13-yourmaths");
    // checks if "check" button is clicked
    if ($_POST['submit']=="Check") {
        // creates a query variable to update the calculus score cell value for current user
        $query = "UPDATE `users` SET calculus=".mysqli_real_escape_string($link, $_POST['scoreText'])." WHERE  id='".$_SESSION['id']."' LIMIT 1";
        // makes the query on the $link database
        mysqli_query($link, $query);
        }
?>

<!--creates a form which enables PHP to function-->
<form method="post">
    <!--label and readonly input for printing score-->
    <label for="scoreText">Total Score: </label><input type="number" name="scoreText" id="scoreText" readonly style="background-color:#CCC" />
    <!--submit button-->
    <input type="submit" id="ac" name="submit" value="Check" onclick="af()" />
</form>

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
                  body{
                      background-color: yellow;
                  }
        </style>
  </head>
<body data-spy="scroll" data-target=".navbar-collapse">
 <div class="container contentContainer" id="topContainer">
  		<div class="row">
  			<div class="col-md-6 col-md-offset-3" id="topRow">
                <h1 class="greet" style="font-family: Open Sans;">Calculus</h3>
                <br>
                <div class="col-md-6"></div>
                <div class="col-md-6">
                <h3 id="demo"></h3>
                </div></div>
            <script>
var timeLeft = 150;
var elem = document.getElementById('some_div');

var timerId = setInterval(countdown, 1000);

function countdown() {
  if (timeLeft == 0) {
    clearTimeout(timerId);
    document.getElementById("demo").innerHTML = "TIME'S UP!";
  } else {
    document.getElementById("demo").innerHTML = timeLeft + 's remaining';
    timeLeft--;
  }
}
                
                
</script>
                
     </div>
<div class="container">
    <script>
        var q1r = Math.floor(10*(Math.random()));
        var q1an = q1r*q1r*12;
    </script>
<h3 id=" q1">1. Find f'(<i id="q1as"><script>document.write(q1r);</script></i>) of f(x)=4x<sup>3</sup></h3>
            <input type="number" id="a">
    
            <br>
            <h3 class="result right" id="ar">Correct!</h3>
    <h3 class="result wrong" id="aw">Incorrect.</h3>
    
            
            <h3>2. Find the gradient of the curve y = x<sup>3</sup> + 3x at the point x = 1</h3>
            <input type="number" id="b">
            <br>
            <h3 class="result right" id="br">Correct!</h3>
            <h3 class="result wrong" id="bw">Incorrect</h3>
            
            <h3>3. Find f'(2)=4x<sup>5</sup>+6x<sup>2</sup>+3x+1</h3>
            <input type="number" id="c">
            <br>
            <h3 class="result right" id="cr">Correct!</h3>
            <h3 class="result wrong" id="cw">Incorrect</h3>
            
            <h3>4. &int;4x dx = kx<sup>2</sup><br> What is the value of k?</h3>
            <input type="number" id="d">
            <br>
            <h3 class="result right" id="dr">Correct!</h3>
            <h3 class="result wrong" id="dw">Incorrect</h3>
            
            <h3>5. Find the area abounded by the curve y = -x<sup>2</sup>+ 9 and the x axis between x=0 and x=3</h3>
            <input type="number" id="e">
            <br>
            <h3 class="result right" id="er">Correct!</h3>
            <h3 class="result wrong" id="ew">Incorrect</h3>
    
    <br>
    
    
    <form method="post">
    <label for="scoreText">Total Score: </label><input type="number" name="scoreText" id="scoreText" readonly style="background-color:#CCC" />
    <input type="submit" id="ac" name="submit" value="Check" onclick="af()" />
        </form>
    
    
        </div>
        <script>
            var qScore = 0;
                function af(){
                
                    
                    if (timeLeft !=0){
                    
                    
                if (document.getElementById("a").value == q1an){
                    document.getElementById("ar").style.display = "block";
                    document.getElementById("aw").style.display = "none";
                    qScore = qScore + 10;
                }
                else{
                    document.getElementById("aw").style.display = "block";
                    document.getElementById("ar").style.display = "none";
                }
                if (document.getElementById("b").value == 6){
                    document.getElementById("br").style.display = "block";
                    document.getElementById("bw").style.display = "none";
                    qScore = qScore + 20;
                }
                else{
                    document.getElementById("bw").style.display = "block";
                    document.getElementById("br").style.display = "none";
                }
                 if (document.getElementById("c").value == 187){
                    document.getElementById("cr").style.display = "block";
                    document.getElementById("cw").style.display = "none";
                    qScore = qScore + 30;
                }
                else{
                    document.getElementById("cw").style.display = "block";
                    document.getElementById("cr").style.display = "none";
                }
                if (document.getElementById("d").value == 2){
                    document.getElementById("dr").style.display = "block";
                    document.getElementById("dw").style.display = "none";
                    qScore = qScore + 40;
                }
                else{
                    document.getElementById("dw").style.display = "block";
                    document.getElementById("dr").style.display = "none";
                }
                if (document.getElementById("e").value == 18){
                    document.getElementById("er").style.display = "block";
                    document.getElementById("ew").style.display = "none";
                    qScore = qScore + 50;
                }
                else{
                    document.getElementById("ew").style.display = "block";
                    document.getElementById("er").style.display = "none";
                }
                
                var totalScore = qScore + timeLeft*2
                document.getElementById("scoreText").value=totalScore;    
//                alert(totalScore);
            timeLeft = 0;
                
            }
                    else{
                alert("You ran out of time!");
            }
                }
            
        </script>
          
        
    </div>
</div>
     <br></div><br><br>
    </body></html>