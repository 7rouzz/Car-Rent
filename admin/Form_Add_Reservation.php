<?php
session_start();
if( $_SESSION['admin']!==true ) {
header('location:login.html');
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="../favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Open+Sans&display=swap"
    rel="stylesheet">
</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#" class="logo">
        <img src="../assets/images/logo.png" width="120" height="60" style="padding-right : 50 px"> 
      </a>


      <div class="header-actions">
        
        <div class="header-contact">
          
        </div>

     


      </div>

    </div>
    <title>Add Reservation</title>
   
  </header><br><br><br>
 
<div  class="container" >
<form action="Add_Reservation.php" method="post">
      <center><h1>Add Reservation</h1></center><br>
      <div class="text-center">

      <div class="form-floating">
          <input type="text" class="form-control" id="floatingInput" name="m" required />
          <label for="floatingInput">Model</label>
        </div>
        <br />
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name="n" required />
            <label for="floatingInput">User Name</label>
          </div>
          <br />

        <div class="form-floating">
          <select class="form-control" id="floatingInput" name="u" required >
            <option value=""></option>
            <?php
 $x = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$y = $x ->prepare("select * from client");
$y->execute();


while ($client=$y->fetch()) { 
  print '
            <option value="'.$client["cin"].'">'.$client["cin"].'</option>
            '; } ?>
          </select>
          <label for="floatingInput">Cin</label>
        </div>
        <br />

        <div class="form-floating">
            <input type="date" class="form-control" id="floatingInput" name="s" required />
            <label for="floatingInput">Start Date</label>
          </div>
          <br />

        <div class="form-floating">
          <input type="number" class="form-control" id="floatingInput" name="r" required />
          <label for="floatingInput">Rental Days Number</label>
        </div>
        <br />
      
       <center> <button type="submit" class="btn"  >Add</button> </center>
      </div>
    </form>
</div>

</body>
</html>