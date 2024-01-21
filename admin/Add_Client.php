<?php
$x = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$y=$x->prepare("insert into client(cin,name,telephone,email,adress)values(?,?,?,?,?)");
$y->execute(array($_GET["c"],$_GET["n"],$_GET["t"],$_GET["e"],$_GET["a"]));
  
header('location: index.php');
?>