<?php
$x = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$y=$x->prepare("insert into reservation(model,user_id,username,start_date,rental_days_number)values(?,?,?,?,?)");
$y->execute(array($_POST["m"],$_POST["u"],$_POST["n"],$_POST["s"],$_POST["r"]));
header('location: index.php#Reservations');
