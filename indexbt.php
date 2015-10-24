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

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#who">THIS WEEK</a></li>
            <li><a href="#get-involved">THIS MONTH</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        
       <form id="myform"  method="post" action="incomeinput.php">
		<input type="text" name="fare" size="20" >
		<p  style="font-size:180%">
			<input type="radio" name="type" value="uber">Uber
			<input type="radio" name="type" value="credit">Credit
			<input type="radio" name="type" value="voucher">Voucher
		</p>
		<p style="font-size:180%">
			<input type="radio" name="type" value="cash" checked="checked">Cash
			<input type="radio" name="type" value="expenses">Expenses
		</p>
	  	<input type="hidden" name="name" value="value" />  
        <p><a onclick="document.getElementById('myform').submit();" class="btn btn-danger btn-lg" role="button">Add to income &raquo;</a></p>
        
        <h2>
        <?php

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
$servername = "localhost";
$username = "root";
$password = "maksat";
$dbname = "my_db";
$today=date('Y-m-d');
mysql_connect(localhost,$username,$password);
@mysql_select_db($dbname) or die( "Unable to select database");

$query="SELECT SUM(fare) as total FROM income where type='cash' AND (date BETWEEN '$today "."00:00:00' AND '".$today." 23:59:59')";$result=mysql_query($query);
$cash = mysql_fetch_array($result);


$query="SELECT SUM(fare) as total FROM income where type='uber' AND (date BETWEEN '$today "."00:00:00' AND '".$today." 23:59:59')";$result=mysql_query($query);
$uber = mysql_fetch_array($result);


$query="SELECT SUM(fare) as total FROM income where type='voucher' AND (date BETWEEN '$today "."00:00:00' AND '".$today." 23:59:59')";$result=mysql_query($query);
$voucher = mysql_fetch_array($result);

$query="SELECT SUM(fare) as total FROM income where type='expenses' AND (date BETWEEN '$today "."00:00:00' AND '".$today." 23:59:59')";$result=mysql_query($query);
$expenses= mysql_fetch_array($result);

$query="SELECT SUM(fare) as total FROM income where type='credit' AND (date BETWEEN '$today "."00:00:00' AND '".$today." 23:59:59')";
$result=mysql_query($query);
$credit = mysql_fetch_array($result);
$total=(float)$cash['total']+(float)$uber['total']+(float)$credit['total']*0.95+(float)$voucher['total']*0.93+(float)$expenses['total'];

?>

<table>
	<tr>
		
		<td><?php echo "total </td><td><strong>".($total)."</strong></td>"?>
	</tr>
	<tr>
		<td><?php echo "cash </td><td>".((float)($cash['total']))."</td>"?>
	</tr>
	<tr>
		<td><?php echo "uber </td><td>".((float)($uber['total']))."</td>"?>
	</tr>
	
	<tr>
		<td><?php echo "credit </td><td>".((float)($credit['total'])*0.95)."</td>"?>
	</tr>
	
	<tr>
		<td><?php echo "voucher </td><td>".((float)($voucher['total'])*0.93)."</td>"?>
	</tr>
          <tr>
		<td><?php echo "expenses </td><td>".((float)($expenses['total']))."</td>"?>
	</tr>
</table>
<div class="cl">
<p>
	<?php echo "total <strong>".($total)."</strong>"?>
</p>
<p>
	<?php echo "cash <strong>".((float)($cash['total']))."</strong>"?>
</p>    
<p>
	<?php echo "uber <strong>".((float)($uber['total']))."</strong>"?>
</p>
<p>
	<?php echo "credit <strong>".((float)($credit['total'])*0.95)."</strong>"?>
</p>
<p>
	<?php echo "voucher <strong>".((float)($voucher['total'])*0.93)."</strong>"?>
</p>
<p>
	<?php echo "expenses <strong>".((float)($expenses['total']))."</strong>"?>
</p>
  </div>
      
      
        
        </h2>
		</form>
      </div>
    </div>







    <footer>
      <div class="container">
        <p><img src="images/one_million_bottom_brand.png"></p>
      </div>
    </footer>
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
