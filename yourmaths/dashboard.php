<?php
	session_start();
	include("connection.php");
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
   		.navbar-brand{
   			font-size:1.8em;
   		}
   		#topContainer{
   			height:400px;
   			width:100%;
   			background-size:cover;	
   		}
   		#topRow {
   			margin-top:80px;
   			text-align:center;	
   		}
   		#topRow h1{
   			font-size:300%;
   		}
   		.bold{
   			font-weight:bold;
   		}
   		.marginTop{
   			margin-top:30px;
   		}
   		.center{
   			text-align:center;
   		}
   		.title {
   			margin-top:100px;
   			font-size:300%;	
   		}
   		#footer{
   			background-color: #B0D1FB;
   			padding-top:70px;
   			width:100%;
   		}
   		.marginBottom{
   			margin-bottom:30px;	
   		}
   		.appstoreImage{
   			width:250px;
   		}
               body{
            color:black;
        }
       .navbar{
           border-bottom: 1px solid black;
           background-color: white;
       }
   		.navbar-brand{
/*            padding-top: 5px;*/
   			width:160px;
            height: auto;
            cursor:pointer
   		}
   		.navbar-brand:hover{
   			opacity:0.67;
   		}
       .navbar-toggle{
           top:10px;
       }
   		#topContainer{
            background-color:white;
   			height:400px;
   			width:100%;
   			background-size:cover;	
   		}
   		#topRow {
   			margin-top:100px;
   			text-align:center;	
   		}
   		#topRow h1{
   			font-size:300%;
   		}
   		.bold{
   			font-weight:bold;
   		}
   		.marginTop{
   			margin-top:30px;
   		}
   		.center{
   			text-align:center;
   		}
   		.title {
   			margin-top:100px;
   			font-size:300%;	
   		}
   		#footer{
   			background-color: #B0D1FB;
   			padding-top:70px;
   			width:100%;
   		}
   		,marginBottom{
   			margin-bottom:30px;	
   		}
       .cat{
           border: 1px solid;
           
       }
   		.appstoreImage{
   			width:250px;
   		}
        input{
            border-radius:0;
        }
       .nam{
           padding: 0 0 0 0;
       }
       .n2{
           padding-right: 8px;
       }
       .n1{
           padding-left:7px;
       }
       .collapse{
           margin-top:11px;
       }
       .nav li a:hover{
           opacity:0.5;
       }
       body{
           font-family: Open Sans;
       }
       .topics{
           width: 100%;
           margin-left:0;
           padding-left: 0;
           background-color: green;
       }
       .topics li{
           list-style:none;
           display: block;
           width:100%;
           margin-left:0;
           padding-left: 0;
           background-color:maroon;
           color: white;
       }
       .topics li a{
           display: block;
           color: white;
           text-align: center;
           padding: 10px 10px 10px 10px;
           background-color:maroon;
       }
       .topics li a:hover{
           display:block;
           color: darkblue;
           text-decoration: none;
           background-color: white;
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


  </div>
     <br></div>
    </body></html>