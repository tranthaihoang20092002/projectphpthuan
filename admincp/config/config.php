<?php
$mysqli = new mysqli("localhost","root","","projectphpthuan");

//check connection
if ($mysqli->connect_error) {   
    # code...
    echo "Connection failed: " . $mysqli->connect_error;

 
}
echo "Connected successfully";
?>