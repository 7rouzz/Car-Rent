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
    <title>Update Car</title>
   
  </header><br><br><br><center><h1>Update Car</h1></center><br>
  <body>
  <?php
 $id=$_GET['id'];
 $con = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
 $req = "SELECT * from  car where id='$id' ";
 $res=$con->query($req);
 $ligne=$res->fetchall();
foreach($ligne as $c) {
  print '
    <form action="Update_Car.php?id='.$c['id'].'" method="post" enctype="multipart/form-data">

      
      <div class="container">
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingInput" name="m" value="'.$c['model'].'"/>
          <label for="floatingInput">Model</label>
        </div>
        <br />

        <div class="form-floating">
          <input type="number" class="form-control" id="floatingInput" name="y" value="'.$c['year'].'"/>
          <label for="floatingInput">Year</label>
        </div>
        <br />

        <div class="form-floating">
          <input type="number" class="form-control" id="floatingInput" name="n" value="'.$c['number_of_seats'].'"/>
          <label for="floatingInput">Number Of Seats</label>
        </div>
        <br />

        <div class="form-floating">
          <input type="text" class="form-control" id="floatingInput" name="f"value="'.$c['flash'].'"/>
          <label for="floatingInput">Flash</label>
        </div>
        <br />

        <div class="form-floating">
          <input type="number" class="form-control" id="floatingInput" name="sp"value="'.$c['id'].'"/>
          <label for="floatingInput">Speedometer</label>
        </div>
        <br />

        <div class="form-floating">
          <input type="text" class="form-control" id="floatingInput" name="h" value="'.$c['hardware_chip'].'"/>
          <label for="floatingInput">Hardware Chip</label>
        </div>
        <br />

        <div class="form-floating">
          <input type="number" class="form-control" id="floatingInput" name="p" value="'.$c['price'].'"/>
          <label for="floatingInput">Price</label>
        </div>
        <br />

        <div class="form-floating">
          <input type="file" class="form-control"  name="i" value="'.$c['img'].'" />
          <label for="floatingInput">Img</label>
        </div>
        <br />

        <center><button type="submit" class="btn">Update</button></center>
      </div>
    </form>'; }  ?>
  </body>
</html>
