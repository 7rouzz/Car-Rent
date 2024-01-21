<?php
//include "sign.php";
$id=$_GET['id'];
$name=$_POST['n'];
$telephone=$_POST['t'];
$adress=$_POST['a'];
$email=$_POST['e'];


$con = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$req = "UPDATE provider SET    name='$name', telephone='$telephone', adress='$adress',email='$email'  where id='$id' ";
$res=$con->query($req);

header('location:index.php#Providers')
?>