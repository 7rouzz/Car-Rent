<?php
session_start();
$_SESSION['admin']=false;
$username=$_POST['username'];
$password=$_POST['password'] ;
$con = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$req = "SELECT * FROM admin WHERE username='$username' AND password='$password'" ;
$res= $con->query($req) ;
$admin=$res->fetch();

if ( count($admin) > 0 ){
    header('location:index.php');
    $_SESSION['admin']=true;
}else{
    header('location:login.html'); 
}

?>