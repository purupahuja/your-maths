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
    <title><?php echo $fn;?> | Dashboard</title>
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
   		body{
            text-align:center;
            align-content:center;
        }
       th, td{
           text-align: center;
           align-content: center;
       }
   </style>
      <link rel="stylesheet" href="main.css">
  </head>
<body data-spy="scroll" data-target=".navbar-collapse">
 <div class="container contentContainer" id="topContainer">
  		<div class="row">
  			<div class="col-md-6 col-md-offset-3" id="topRow">
                <h3 class="greet" style="font-family: Open Sans;">Hi <?php echo $fn; ?>, how are you? What do you want to practice today?</h3>
                <br><br>
                
 			 </div>
		</div>
<div class="container">

    <a href="sequences.php"><h4>Sequences</h4></a>
    <a href="logarithms.php"><h4>Logarithms</h4></a>
    <a href="calculus.php"><h4>Calculus</h4></a>
<br><br>
    <h3>Leaderboards</h3>
    <div class="col-md-4">
        <h4>Calculus</h4>
   
        <table>
<tr>
<th>Rank</th>
<th>Name</th>
<th>Score</th>
</tr>
        <?php

        $qu = "SELECT * FROM users ORDER BY calculus DESC";
        $resa = mysqli_query($link, $qu);
        $rank = 1;

if (mysqli_num_rows($resa)) {
            while ($rowa = mysqli_fetch_assoc($resa)) {
                echo "<tr><td>{$rank}</td>
                      <td>{$rowa['firstname']} {$rowa['lastname']}</td>
                      <td>{$rowa['calculus']}</td></tr>";

                $rank++;
            }
        }
?>
        </table>
        
    </div>
    <div class="col-md-4">
        <h4>Sequences</h4>
        
        <table>
<tr>
<th>Rank</th>
<th>Name</th>
<th>Score</th>
</tr>
        <?php

        $qus = "SELECT * FROM users ORDER BY sequences DESC";
        $resas = mysqli_query($link, $qus);
        $ranks = 1;

if (mysqli_num_rows($resas)) {
            while ($rowas = mysqli_fetch_assoc($resas)) {
                echo "<tr><td>{$ranks}</td>
                      <td>{$rowas['firstname']} {$rowas['lastname']}</td>
                      <td>{$rowas['sequences']}</td></tr>";

                $ranks++;
            }
        }
?>
        </table>
        
        
    </div>
    <div class="col-md-4">
        <h4>Logarithms</h4>
        
        <table>
<tr>
<th>Rank</th>
<th>Name</th>
<th>Score</th>
</tr>
        <?php

        $qua = "SELECT * FROM users ORDER BY logarithms DESC";
        $resaa = mysqli_query($link, $qua);
        $ranka = 1;

if (mysqli_num_rows($resaa)) {
            while ($rowaa = mysqli_fetch_assoc($resaa)) {
                echo "<tr><td>{$ranka}</td>
                      <td>{$rowaa['firstname']} {$rowaa['lastname']}</td>
                      <td>{$rowaa['logarithms']}</td></tr>";

                $ranka++;
            }
        }
?>
        </table>
        
        
    </div>
    
</div>
     <br></div>
    </body></html>