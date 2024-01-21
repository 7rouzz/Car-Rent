<?php
session_start();
$_SESSION['user']=false;
$username=$_POST['u'];
$password=$_POST['p'] ;
$con = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$req = "SELECT * FROM client WHERE name='$username' AND password='$password' " ;
$res= $con->query($req) ;
$user=$res->fetch();

if ( count($user) > 0 ){
    header('location:../user/User.php');
    $_SESSION['user']=true;
    $_SESSION['user_cin']=$user['cin'];
    $_SESSION['user_name']=$user['name'];
}else {
    header('location:index.php'); 
}

?>