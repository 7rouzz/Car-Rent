<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="shortcut icon" href="../favicon.svg" type="image/svg+xml">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="Reservation.css" rel="stylesheet">


</head>
<body>
       
<?php
session_start();
$cin=$_SESSION['user_cin'];
$name=$_SESSION['user_name'];
$id=$_SESSION['car_id'];
$x = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$y = $x ->prepare("SELECT * from car where id='$id'");
$y->execute();


while ($car=$y->fetch()) {
    $_SESSION['car_model']=$car["model"];
    print'
<div class="container">
        <div class="row m-0">
            <div class="col-lg-7 pb-5 pe-lg-5">
                <div class="row">
                    <div class="col-12 p-5">
                        <img src="../assets/images/'. $car["img"].'"
                            alt="" width="450" height="230" style="border-radius: 30px">
                    </div>
                    <div class="row m-0 bg-light">
                        <div class="col-md-4 col-6 ps-30 pe-0 my-4">
                            <p class="text-muted">Number of Seats</p>
                            <p class="h5">'. $car["number_of_seats"].'<span class="ps-1">People</span></p>
                        </div>
                        <div class="col-md-4 col-6  ps-30 my-4">
                            <p class="text-muted">Flash</p>
                            <p class="h5 m-0">'. $car["flash"].'</p>
                        </div>
                        <div class="col-md-4 col-6 ps-30 my-4">
                            <p class="text-muted">Speedometer</p>
                            <p class="h5 m-0">'. $car["speedometer"].' km /1-Litre</p>
                        </div>
                        <div class="col-md-4 col-6 ps-30 my-4">
                            <p class="text-muted">Hardware Ship</p>
                            <p class="h5 m-0">'. $car["hardware_chip"].'</p>
                        </div>
                        <div class="col-md-4 col-6 ps-30 my-4">
                            <p class="text-muted">Year</p>
                            <p class="h5 m-0">'. $car["year"].'</p>
                        </div>
                        <div class="col-md-4 col-6 ps-30 my-4">
                            <p class="text-muted">Price</p>
                            <p class="h5 m-0"> <span>$</span>'. $car["price"].'<span> /month</span> </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 p-0 ps-lg-4">
                <div class="row m-0">
                    <div class="col-12 px-4"> 
                    <form action="Add_Reservation.php" method="post">
                      <center><h1> <p style=" padding-top: 40px;" > '. $car["model"].'  </p>  </h1>   </center>               
                     
                      <pre>

                      </pre>
                    </div>
                    
                    <div class="col-12 px-0" >
                        <div class="row bg-light m-0">
                            <div class="col-12 px-4 my-4">
                                <p class="fw-bold">Reservation Detail</p>
                            </div>
                            <div class="col-12 px-4">
                                <div class="d-flex  mb-4">
                                    
                                    <span class="">
                                        <p class="text-muted">User Name</p>
                                        <input class="form-control" type="text" value="'. $name .'"  name="n"required>
                                    </span>                                   

                                   

                                   </div> 
                                </div>
                                <div class="col-12 px-4">
                                <div class="d-flex  mb-4">
                                                                       

                                    <span class="">
                                        <p class="text-muted">Cin</p>
                                        <input class="form-control" type="number" value="'. $cin .'" name="u" readonly>
                                       
                                    </span>
                                    
                                   </div> 
                                </div> 

                            <div class="col-12 px-4">
                                <div class="d-flex  mb-4">
                                    
                                    <span class="">
                                        <p class="text-muted">Start Date</p>
                                        <input class="form-control" type="date" name="s" required>
                                    </span>
                                    <div class=" w-100 d-flex flex-column align-items-end">
                                        <p class="text-muted">Days Number</p>
                                        <input class="form-control2" type="number" name="r" required>
                                    </div>
                                    
                                </div>

                         
                            <div class="col-12  mb-4 p-0">
                                <button class="btn btn-primary" type="submit">Book Now</button>
                            </div>
                            </form>
                            '; } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>