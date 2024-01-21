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
    <title>Update Garage</title>
   
  </header><br><br><br><center><h1>Update Garage</h1></center><br>
  <body>

 <div  class="container" >
 <?php
 $id=$_GET['id'];
 $con = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
 $req = "SELECT * from  garage where id='$id' ";
 $res=$con->query($req);
 $ligne=$res->fetchall();
foreach($ligne as $c) {

  print '
    <form action="Update_Garage.php?id='.$c['id'].'" method="post" enctype="multipart/form-data">
          <div class="text-center">
    
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInput" name="n" value="'.$c['name'].'"/>
              <label for="floatingInput">Name</label>
            </div>
            <br />
    
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInput" name="a" value="'.$c['adress'].'"/>
              <label for="floatingInput">Adresse</label>
            </div>
            <br />

            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInput" name="am" value="'.$c['amplitude'].'"/>
              <label for="floatingInput">Amplitude</label>
            </div>
            <br />

            <div class="form-floating">
            <input type="file" class="form-control"  name="i" value="'.$c['img'].'"/>
            <label for="floatingInput">Img</label>
          </div>
          <br />
          
    
          
           <center>  <button type="submit" class="btn" >Update</button></center>
          </div>
        </form>'; }  ?>
    </div>
    
    </body>
    </html>