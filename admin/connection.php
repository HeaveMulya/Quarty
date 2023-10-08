<?php 
    //database connection
$servername = "localhost";
$username = "root";
$password = "";
$database= "mynews";


// Create connection
$conn =mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
    die("Error".mysqli_connect_error());
}
   



?>