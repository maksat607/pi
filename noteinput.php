<?php
include('session.php');



?>
<?php
echo $type = $_POST["note"];

$servername = "localhost";
$username = "root";
$password = "maksat";
$dbname = "my_db";
$type = $_POST["note"];
$comment = $_POST["comment"];

        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
		else if($type==''){
			echo "empty note";
			
			}else{
				$sql = "INSERT INTO note (type, comment)
				VALUES ('$type', '$comment')";

				if ($conn->query($sql) === TRUE) {
					echo "<h1>New record created successfully</h1>";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
	   }
        $conn->close();

echo '<p><a href="index.php"><h1>GO TO BACK</h1></a></p> ';
?>
