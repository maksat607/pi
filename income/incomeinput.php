<?php
echo "and here ";
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
$fare = test_input($_POST["fare"]);
$type = test_input($_POST["type"]);

// Create connection
 //preg_replace('/\s+/', '', $string); for removing all whitespaces
if(is_numeric(preg_replace('/\s+/', '', $fare)){
	echo "and here "$fare.$type;
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "INSERT INTO income (type, fare)
        VALUES ('$type', '$fare')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
}else{
  echo 'Please enter valid numbers';
}

?>
