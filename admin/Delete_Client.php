<?php
//include "sign.php";
$id=$_GET['idc'];
$con = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$req = "DELETE from client where id='$id' ";
$res=$con->query($req);

header('location:index.php#Clients');

?>