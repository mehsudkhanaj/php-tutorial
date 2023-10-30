<?php
session_start(); 
//coneection using proceduaral concept.
// $conn=@mysqli_connect(
//     $servername,
//     $username,
//     $password,
//     $dbName
// );
// if($conn){
//     echo "Connection established";

// }else {
//     echo "Connection failed" . mysqli_connect_error();
// }

// echo"<pre>";
// print_r($conn);


//connect to database with OOP approach
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "phptutorial";

//create connection
$conn = @new mysqli($servername, $username, $password, $dbName);

// check connection
if ($conn->connect_error) {
    die("Error connecting to database" . $conn->connect_error);
    exit;
}
echo "Connection established";
echo "<br>";











?>
<?php
