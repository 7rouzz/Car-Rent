<!DOCTYPE html>
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



  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="index.php" class="logo">
        <img src="../assets/images/logo.png" width="120" height="60" style="padding-right : 50 px"> 
      </a>


      <div class="header-actions">
        
        <div class="header-contact">
          
        </div>

     


      </div>

    </div>
    <title>Update Reservation</title>
   
  </header><br><br><br><center><h1>Update Reservation</h1></center><br>
  <body>
 <?php
 $id=$_GET['idc'];
 $con = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
 $req = "SELECT * from  reservation where id='$id' ";
 $res=$con->query($req);
 $c=$res->fetchall();
foreach ($c as $reservation) {
 

  print '
  <div class="container" >
    <form action="Update_Reservation.php?idc='.$reservation['id'].'" method="post">
          <div class="text-center">

    
          <div class="form-floating">
              <input type="text" class="form-control" id="floatingInput" name="m" value="'.$reservation['model'].'"/>
              <label for="floatingInput">Model</label>
            </div>
            <br />
    
            <div class="form-floating">
              <input type="number" class="form-control" id="floatingInput" name="u" value="'.$reservation['user_id'].'"/>
              <label for="floatingInput">Cin</label>
            </div>
            <br />
            
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInput" name="n" value="'.$reservation['username'].'"/>
              <label for="floatingInput">User Name</label>
            </div>
            <br />
    
            <div class="form-floating">
            <input type="date" class="form-control" id="floatingInput" name="s" value="'.$reservation['start_date'].'"/>
            <label for="floatingInput">Start Date</label>
          </div>
          <br />
    
            <div class="form-floating">
              <input type="number" class="form-control" id="floatingInput" name="r" value="'.$reservation['rental_days_number'].'"/>
              <label for="floatingInput">Rental Days Number</label>
            </div>
            <br />
    
          
    
          
           <center>  <button type="submit" class="btn" >Update</button></center>
          </div>
        </form>'; }  ?>
    </div>
    
    </body>
    </html>