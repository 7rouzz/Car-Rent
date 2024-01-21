<?php
$cin=$_POST["c"];
$name=$_POST["n"];
$telephone=$_POST["t"];
$email=$_POST["e"];
$adress=$_POST["a"];
$speciality=$_POST["s"];

$target_dir = "../assets/images/";
$target_file = $target_dir . basename($_FILES["i"]["name"]);
if(move_uploaded_file($_FILES["i"]["tmp_name"],$target_file)){
    $img=$_FILES["i"]["name"];
}else{
    echo"ereeeeuur 404";
}

$con= new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$req= "INSERT into worker(cin,name,telephone,email,adress,speciality,img)values('$cin','$name','$telephone','$email','$adress','$speciality','$img')";
$res=$con->query($req);
  
header('location: index.php#Workers');
?>