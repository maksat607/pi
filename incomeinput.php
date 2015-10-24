
<?php
include('session.php');
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
$type = test_input($_POST["type"]);
$fare = test_input($_POST["fare"]);
$login_id= $_SESSION['login_id'];
// Create connection
 //preg_replace('/\s+/', '', $string); for removing all whitespaces
if(is_numeric(preg_replace('/\s+/', '', $fare))){
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
		if($type=="uber"){
				//$fare=($fare-2)/1.2;
				$sql = "INSERT INTO income (type, fare,user)
				VALUES ('$type', '$fare','$login_id')";

				if ($conn->query($sql) === TRUE) {
					echo "<h1>New record created successfully-</h1>";
					 $conn->close();
				//	sleep(3);
				$_SESSION['fareadded']=$fare;
					header("location: index.php");
					exit();  
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
			else if($type=="expenses"){
			
			
				$fare=($fare)*(-1);
				$sql = "INSERT INTO income (type, fare,user)
				VALUES ('$type', '$fare','$login_id')";

				if ($conn->query($sql) === TRUE) {
					echo "<h1>New record created successfully-</h1>";
					$_SESSION['fareadded']=$fare;
					 $conn->close();
				//	sleep(3);
					header("location: index.php");
					exit(); 
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			
			
			}else{
				$sql = "INSERT INTO income (type, fare,user)
				VALUES ('$type', '$fare','$login_id')";
				if ($conn->query($sql) === TRUE) {
					echo "<h1>New record created successfully-</h1>";
					$_SESSION['fareadded']=$fare;
					 $conn->close();
				//	sleep(10);
					header("location: index.php");
					exit(); 
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
	   }
        $conn->close();
}else{
  echo 'Please enter valid numbers';
}
echo '<p><a href="index.php"><h1>GO TO BACK</h1></a></p> ';
?>



