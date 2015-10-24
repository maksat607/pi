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
$pressure = test_input($_POST["pressure"]);
$pulse = test_input($_POST["pulse"]);
// Create connection
 //preg_replace('/\s+/', '', $string); for removing all whitespaces
if(is_numeric(preg_replace('/\s+/', '', $pressure))&&is_numeric($pulse)){
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "INSERT INTO health (pressure, pulse)
        VALUES ('$pressure', '$pulse')";

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
