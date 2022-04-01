<?php


$server = 'local host';
$user ='root';
$password = '';
$db = 'signup';

$con = mysqli_connect($server,$user,$password,$db);
if (!$con) {
    die('unable to connect to the database');
}
else {
   echo 'Database connected successfully!';
}
?>