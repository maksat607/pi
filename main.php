   <div class="jumbotron">
      <div class="container">





        
       <form id="myform"  method="post" action="incomeinput.php">
		<input type="text" name="fare" size="20" class="incomeinput">
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
//echo $_SESSION['start']."=".$_SESSION['end'];

$servername = "localhost";
$username = "root";
$password = "maksat";
$dbname = "my_db";
$today=date('Y-m-d');
$start=$_SESSION['start'];
$end=$_SESSION['end'];
$login_id= $_SESSION['login_id'];
$shift= $_SESSION['shift'];
mysql_connect(localhost,$username,$password);
@mysql_select_db($dbname) or die( "Unable to select database");

$query="SELECT SUM(fare) as total FROM income where type='cash' AND (date BETWEEN '$start' AND '$end') AND user=$login_id";$result=mysql_query($query);
$cash = mysql_fetch_array($result);


$query="SELECT SUM(fare) as total FROM income where type='uber' AND (date BETWEEN '$start' AND '$end') AND user=$login_id";$result=mysql_query($query);
$uber = mysql_fetch_array($result);


$query="SELECT SUM(fare) as total FROM income where type='voucher' AND (date BETWEEN '$start' AND '$end') AND user=$login_id";$result=mysql_query($query);
$voucher = mysql_fetch_array($result);

$query="SELECT SUM(fare) as total FROM income where type='expenses' AND (date BETWEEN '$start' AND '$end') AND user=$login_id";$result=mysql_query($query);
$expenses= mysql_fetch_array($result);

$query="SELECT SUM(fare) as total FROM income where type='credit' AND (date BETWEEN '$start' AND '$end') AND user=$login_id";
$result=mysql_query($query);
$credit = mysql_fetch_array($result);
$total=(float)$cash['total']+(float)$uber['total']+(float)$credit['total']*0.95+(float)$voucher['total']*0.93+(float)$expenses['total'];
$recent=$_SESSION['fareadded'];
 echo'
<table>

	<td>Recently added</td><td>'.round($recent,2).'$</td>
	<tr>
		
		<td>total </td><td><strong>'.round(($total),2).'</strong></td>
	</tr>
	<tr>
		<td>cash </td><td>'.round(((float)($cash['total'])),2).'</td>
	</tr>
	<tr>
		<td>uber </td><td>'.round(((float)($uber['total'])),2).'</td>
	</tr>
	
	<tr>
		<td>credit </td><td>'.round(((float)($credit['total'])*0.95),2).'</td>
	</tr>
	
	<tr>
		<td>voucher </td><td>'.round(((float)($voucher['total'])*0.93),2).'</td>
	</tr>
          <tr>
		<td>expenses </td><td>'.round(((float)($expenses['total'])),2).'</td>
	</tr>
</table>
'?>       
        </h2>

								
		</form>
		

</div>
</div>






