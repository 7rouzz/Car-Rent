<?php
//include "sign.php";
$x = new PDO ("mysql:host=localhost;dbname=rabia_louhichi","root","");
$req =$x->prepare("update client set nom =? , adresse =? , tel=? where id=?");
$req->execute(array($_GET["n"],$_GET["a"],$_GET["t"],$_GET["i"]));
header('location:clients.php')
?>