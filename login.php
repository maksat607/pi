
<?php


if(isset($_SESSION['login_user'])){
header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Authentification</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>

    <div class="jumbotron">
      <div class="container">
			<h2>Please login</h2>


			<form id="myform2" action="check.php" method="post">
			<p>
				Username <input id="username" name="username" placeholder="username" type="text" class="whitewine">
			</p>
			<p>
				Password <input id="password" name="password" placeholder="**********" type="password" class="whitewine">
			</p>
		<p style="font-size:180%">
			<input type="radio" name="shift" value="night" checked="checked">Night
			<input type="radio" name="shift" value="day">Day
		</p>
			<p><a  onclick="document.getElementById('myform2').submit();" class="btn btn-danger btn-lg" role="button">Login &raquo;</a></p>
			
			<span><?php echo $error; ?></span>
			</form>
<?php
echo '<p><a href="register1.php"><h1>SIGN UP</h1></a></p> ';
?>
</div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>


















