<?php
$con = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$y = $con ->prepare("select * from reservation");
$y->execute();
while ($reservation=$y->fetch()) { 
    $model=$reservation["model"];
    $cin=$reservation["user_id"];
    $username=$reservation["username"];
    $start_date=$reservation['start_date'];
    $rental_days_number=$reservation['rental_days_number'];
}

$req= "INSERT INTO confirmed_reservation (model,user_id,username,start_date,rental_days_number)VALUES('$model','$cin','$username','$start_date','$rental_days_number') " ;
$res=$con->query($req);
header('location: Confirmed_Reservation.php');

?>
