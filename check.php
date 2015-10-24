<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
header("location: index.php");
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "maksat");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("my_db", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
				$query="select id from login where password='$password' AND username='$username'";
				$result=mysql_query($query);
				$id = mysql_fetch_array($result);
$_SESSION['login_user']=$username; // Initializing Session
 $_SESSION['login_id']=$id['id'];
$_SESSION['shift'] = $_POST['shift'];
		if($_POST['shift']=="night"){
				if((int)date('H')<5&&(int)date('H')>=0)
				{
				$datetime = new DateTime(date('Y-m-d'));
				$_SESSION['end']=$datetime->format('Y-m-d 04:00:00');
				$datetime->modify('-1 day');
				$_SESSION['start']=$datetime->format('Y-m-d 16:00:00');
				}else{
				$datetime = new DateTime(date('Y-m-d'));
				//echo $datetime->format('Y-m-d 16:00:00');
				$_SESSION['start']=$datetime->format('Y-m-d 16:00:00');
				$datetime->modify('+1 day');
			//	echo $datetime->format('Y-m-d 04:00:00');

				$_SESSION['end']=$datetime->format('Y-m-d 04:00:00');
				}
			
			
		//	$_SESSION['start']=date('Y-m-d')
		}else if($_POST['shift']=="day"){
			
			$datetime = new DateTime(date('Y-m-d'));
			//echo $datetime->format('Y-m-d 04:00:00');
			$_SESSION['start']=$datetime->format('Y-m-d 04:00:00');
			$datetime->modify('+1 day');
		//	echo $datetime->format('Y-m-d 04:00:00');

			$_SESSION['end']=$datetime->format('Y-m-d 16:00:00');

			
		}
header("location: index.php"); // Redirecting To Other Page
} else {
header("location: login.php"); 
}
mysql_close($connection); // Closing Connection
}

?>
