<?php
$servername = "localhost";
$username = "username";
$password = "1234";

///create connection
$conmysql_conect($servername, $username, $password);

///cheack connection
if (!$conn){
    die("Connection failed : " . mysqli_connect_errno());

}
echo " Connectioned successfuly";
?>