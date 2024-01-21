<?php
$name=$_POST["n"];
$adress=$_POST["a"];
$amplitude=$_POST["am"];



$target_dir = "../assets/images/";
$target_file = $target_dir . basename($_FILES["i"]["name"]);
if(move_uploaded_file($_FILES["i"]["tmp_name"],$target_file)){
    $img=$_FILES["i"]["name"];
}else{
    echo"ereeeeuur";
}

$con = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$req = "INSERT INTO garage(name,adress,amplitude,img) VALUES ('$name','$adress','$amplitude','$img') ";
$res=$con->query($req);
  
header('location: index.php#Garages');
?>