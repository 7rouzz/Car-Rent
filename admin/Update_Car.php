<?php
//include "sign.php";
$id=$_GET['id'];
$model=$_POST["m"];
$year=$_POST["y"];
$number_of_seats=$_POST["n"];
$flash=$_POST["f"];
$speedometer=$_POST["sp"];
$hardware_chip=$_POST["h"];
$price=$_POST["p"];


$con = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$req = "UPDATE car SET  model='$model' , year='$year', number_of_seats='$number_of_seats',flash='$flash' , speedometer='$speedometer' , hardware_chip='$hardware_chip' ,price='$price' , where id='$id' ";
$res=$con->query($req);

header('location:index.php#Cars')
?>