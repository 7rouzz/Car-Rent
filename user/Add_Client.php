<?php
$x = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
try{
$y=$x->prepare("insert into client(cin,name,telephone,email,adress)values(?,?,?,?,?)");
$y->execute(array($_GET["c"],$_GET["n"],$_GET["t"],$_GET["e"],$_GET["a"]));
} 
catch(PDOException $e) {
    if
        ($e->getcode()==23000){
            header('location: Add_Client.html.php');
        }
    
}
header('location: Payement.php');
?>