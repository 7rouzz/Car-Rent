<?php
$x = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$y=$x->prepare("INSERT into user (username,email,password)values(?,?,?)");
$y->execute(array($_POST["u"],$_POST["e"],$_POST["p"]));
  
header('location: index.php#signin');
?>