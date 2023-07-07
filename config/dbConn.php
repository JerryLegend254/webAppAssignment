<?php
$servername = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'jeremyltd';


$conn = new mysqli($servername, $username, $pass, $dbname);

if($conn->connect_error){
    die("Connection Failed" . $conn->connection_error);
}
else{
    print "Connection Successful";
}
?>

