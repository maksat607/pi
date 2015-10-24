
<?php


$servername = "localhost";
$username = "root";
$password = "maksat";
$dbname = "my_db";
$user = $_POST["username_r"];
$passwd = $_POST["password_r"];
$email= $_POST["email_r"];
// To protect MySQL injection for Security purpose
/*
$user = stripslashes($user);
$passwd = stripslashes($passwd);
$email = stripslashes($email);
$user = mysql_real_escape_string($user);
$passwd = mysql_real_escape_string($passwd);
$email = mysql_real_escape_string($email);*/
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
		else if($user==""||$passwd==""||$email==""){
			echo "Please fill it out";
			
			}else{
				
								
				$query="SELECT id as id from login where username='{$user}'";
				$result=$conn->query($query);
				$id = $result->fetch_assoc();
//				while($r=$result->fetch_assoc()){
//		print_r($r['id']);
//}
				//echo $id['id']."---".$user;	

				if ($id['id']==""){
							

							$sql = "INSERT INTO login (	username, password,email)
							VALUES ('$user', '$passwd','$email')";

							if ($conn->query($sql) === TRUE) {
								echo "<h1>You have been registered succesfully!!!</h1>";
								echo '<p><a href="index.php"><h1>GO TO LOGIN PAGE</h1></a></p> ';
							} else {
								echo "Error: " . $sql . "<br>" . $conn->error;
							} 
				}else{
					echo "<h1>This username is already taken!!!</h1>";
				
				}
				
						
			}
        $conn->close();

echo '<p><a href="register1.php"><h1>GO TO BACK</h1></a></p> ';
?>

