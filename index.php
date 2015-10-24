<?php
include('session.php');



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>One Million Lines</title>

    <!-- This is our Google Arvo font and Font-Awesome -->
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<?php
include 'header.php';
?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
        <!-- Main jumbotron for a primary marketing message or call to action -->
 
    <?php


        
        		     
		if($_SERVER['QUERY_STRING'] == 0){
			include "main.php";
		}
        else if ($_SERVER['QUERY_STRING'] == 1){
			
			header("location: custom.php");
             //include 'note.php.txt';
            
        } else  if ($_SERVER['QUERY_STRING'] == 2){
             include 'allincome.php';
		
		}else  if ($_SERVER['QUERY_STRING'] == 3&& $_SESSION['login_id']==2){
            include 'note.php';
		}else  if ($_SERVER['QUERY_STRING'] == 4&& $_SESSION['login_id']==2){
            include 'shownote.php';
		
		}
 
?>

		

    <footer>
     <div class="container">
        <p><img src="images/one_million_bottom_brand.png"></p>
   </div>
    </footer>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>
