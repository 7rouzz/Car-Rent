<?php
//include "sign.php";
$id=$_GET['id'];
$con = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$req = "DELETE from car where id='$id' ";
$res=$con->query($req);

header('location:index.php#Cars');

?>