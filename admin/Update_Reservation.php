<?php
//include "sign.php";
$id=$_GET['idc'];
$model=$_POST['m'];
$user_id=$_POST['u'];
$username=$_POST['n'];
$start_date=$_POST['s'];
$rental_days_number=$_POST['r'];
$con = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$req = "UPDATE reservation SET  model='$model' , user_id='$user_id', username='$username',start_date='$start_date' , rental_days_number='$rental_days_number' where id='$id' ";
$res=$con->query($req);

header('location:index.php#Reservations')
?>