<?php
$model=$_POST["m"];
$year=$_POST["y"];
$number_of_seats=$_POST["n"];
$flash=$_POST["f"];
$speedometer=$_POST["sp"];
$hardware_chip=$_POST["h"];
$price=$_POST["p"];



$target_dir = "../assets/images/";
$target_file = $target_dir . basename($_FILES["i"]["name"]);
if(move_uploaded_file($_FILES["i"]["tmp_name"],$target_file)){
    $img=$_FILES["i"]["name"];
}else{
    echo"ereeeeuur";
}

$con = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$req = "INSERT INTO car(model,year, number_of_seats ,flash,speedometer, hardware_chip,price,img) VALUES ('$model','$year','$number_of_seats','$flash','$speedometer','$hardware_chip','$price','$img') ";
$res=$con->query($req);
  
header('location: index.php#Cars');
?>