<?php 
$HOSTNAME = 'us-cdbr-east-06.cleardb.net';
$USERNAME = 'b7a817063f1e47';
$PASSWORD = 'b4505738';
$DATABASE = 'heroku_0ab9ae6cb687a6f';

$con =mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if(!$con){
    die(mysqli_error($con));
}
?>
