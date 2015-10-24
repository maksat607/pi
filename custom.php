<?php
include('session.php');
?>
<?php if (!empty($_POST)): ?>
<?php
$startd=htmlspecialchars($_POST["name"]);
$endd=htmlspecialchars($_POST["email"]);
$type=htmlspecialchars($_POST["type"]);
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
<?php
include 'header.php';
?>
    <div class="jumbotron">
      <div class="container">  
	  <p>
	<?php 
	include 'db_class.php';

	//$t.set_class($startd,$endd,$type);
	



$a = new db_class();
$a->setclass($startd,$endd,$type);
$a->write();
//echo "4444asdfsadfsadfdsa33";

?>
</div>
</div>
    <footer>
     <div class="container">
        <p><img src="images/one_million_bottom_brand.png"></p>
   </div>
    </footer>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php else: ?>



<!DOCTYPE html>
<html>
<head>
<title>Authentification</title>

	
	
	
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
		   <link href="css/custom.css" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap core CSS -->
    

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  
 
  <link rel="stylesheet" href="/resources/demos/style.css">
    <script  src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>

  $(function() {
    $( "#datepickerfrom" ).datepicker({ dateFormat: 'yy-mm-dd',firstDay: 1  });
	//$.datepicker.parseDate()
  });
  
    $(function() {
    $( "#datepickertill" ).datepicker({ dateFormat: 'yy-mm-dd',firstDay: 1 });
	//$.datepicker.parseDate()
  });
  
      
  </script>

</head>
<body>
<?php
include 'header.php';
?>
    <div class="jumbotron">
      <div class="container">
    <form id="myform2" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
	
       <p> From: <input type="text" id="datepickerfrom" name="name" class="whitewine" placeholder="2015-09-26" ><br></p>
        <p>Till:&nbsp&nbsp&nbsp&nbsp <input type="text" id="datepickertill" name="email" class="whitewine"><br></p>
				<p  style="font-size:180%">
			<input type="radio" name="type" value="uber">Uber
			<input type="radio" name="type" value="credit">Credit
			<input type="radio" name="type" value="voucher">Voucher
		</p>
		<p style="font-size:180%">
			<input type="radio" name="type" value="cash"> Cash
			<input type="radio" name="type" value="expenses">Expenses
			<input type="radio" name="type" value="all" checked="checked">All
		</p>
       <p><a  onclick="document.getElementById('myform2').submit();" class="btn btn-danger btn-lg" role="button">Submit &raquo;</a></p>
    </form>
</div>
</div>

    <footer>
     <div class="container">
        <p><img src="images/one_million_bottom_brand.png"></p>
   </div>
    </footer>

</body>
</html>	
	
	
	
	
	
	
	
	
	
	
<?php endif; ?>


