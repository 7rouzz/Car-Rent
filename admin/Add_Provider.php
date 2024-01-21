<?php
$name = $_POST['n'] ;
$telephone = $_POST['t'] ;
$adress = $_POST['a'] ;
$email = $_POST['e'] ;

$target_dir = "../assets/images/";
$target_file = $target_dir . basename($_FILES["i"]["name"]);
if(move_uploaded_file($_FILES["i"]["tmp_name"],$target_file)){
    $img=$_FILES["i"]["name"];
}else{
    echo"ereeeeuur";
}

$con = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$req = "INSERT INTO provider (name,telephone,adress,email,img) VALUES ('$name','$telephone','$adress','$email','$img') ";
$res=$con->query($req);
header('location: index.php#Providers');
?>