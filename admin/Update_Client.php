<?php
//include "sign.php";
$id=$_GET['idc'];
$cin=$_POST['c'];
$name=$_POST['n'];
$telephone=$_POST['t'];
$email=$_POST['e'];
$adress=$_POST['a'];

$con = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$req = "UPDATE client SET  cin='$cin' , name='$name', telephone='$telephone',email='$email' , adress='$adress' where id='$id' ";
$res=$con->query($req);

header('location:index.php#Clients')
?>