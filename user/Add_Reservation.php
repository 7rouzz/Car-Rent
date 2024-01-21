<?php
session_start();
$model=$_SESSION['car_model'];
$cin=$_POST['u'];
$username=$_POST['n'];
$start_date=$_POST['s'];
$rental_days_number=$_POST['r'];
$con = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$req= "INSERT INTO reservation (model,user_id,username,start_date,rental_days_number)VALUES('$model','$cin','$username','$start_date','$rental_days_number' ) " ;
$res=$con->query($req);
header('location: User.php#my reservations');

?>
