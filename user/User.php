<?php
session_start();
if(!isset($_SESSION['user']) ||  $_SESSION['user']!==true ) {
header('location:../login/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="../favicon.svg" type="image/svg+xml">
  <!-- 
    - custom css link
  -->
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

      <a href="#home" class="logo">
         <img src="../assets/images/logo.png" width="120" height="60" style="padding-right : 50 px"> 
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li>
             <a href="#Cars" class="navbar-link" data-nav-link>Cars</a>
          </li>

          <li>
            <a href="#my reservations" class="navbar-link" data-nav-link>My Reservations</a>
          </li>

          <li>
            <a href="../About us/index.html" class="navbar-link" data-nav-link>About us</a>
          </li>

        </ul>
      </nav>

      <div class="header-actions">
        
        <div class="header-contact">
          
        </div>

        <a href="../admin/Logout.php"  class="btn user-btn" aria-label="Profile">
          <ion-icon ></ion-icon>
          <span id="aria-label-txt">Logout</span>
        </a>


        <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>

      </div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

     
      <section class="section hero" id="home">
        <div class="container">

          <div class="hero-content">
            <h2 class="h1 hero-title">The easy way to takeover a lease</h2>

            <p class="hero-text">
              Live in Tunis , Nabeul and Kairouan!
            </p>
          </div>

          <div class="hero-banner"></div>


        </div>
      </section>





      <!-- 
        - #CARS
      -->
      <div id="Cars"></div><br>

<section class="section featured-car" >
  <div class="container">

    <div class="title-wrapper">
      <h2 class="h2 section-title">Cars</h2>

    </div>
    <ul class="featured-car-list">

    <?php
$cin=$_SESSION['user_cin'];
$name=$_SESSION['user_name'];
$x = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$y = $x ->prepare("select * from car");
$y->execute();


while ($car=$y->fetch()) { 
  $_SESSION['car_id']=$car["id"];
print '
      <li>
        <div class="featured-car-card">

          <figure class="card-banner">

            <img src="../assets/images/'.$car["img"].'"  loading="lazy" width="440" height="300"
              class="w-100">
          </figure>

          <div class="card-content">

            <div class="card-title-wrapper">
              <h3 class="h3 card-title">
                <a href="#">'. $car["model"].'</a>
              </h3>

              <data class="year" value="'. $car["year"].'">'. $car["year"].'</data>
            </div>

            <ul class="card-list">

              <li class="card-list-item">
                <ion-icon name="people-outline"></ion-icon>

                <span class="card-item-text">'.$car["number_of_seats"].' People</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="flash-outline"></ion-icon>

                <span class="card-item-text">'.$car["flash"].'</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="speedometer-outline"></ion-icon>

                <span class="card-item-text"> '.$car["speedometer"].'km / 1-litre</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="hardware-chip-outline"></ion-icon>

                <span class="card-item-text">'.$car["hardware_chip"].'</span>
              </li>

            </ul>

            <div class="card-price-wrapper">

              <p class="card-price">
                <strong>$'. $car["price"].'</strong> / month
              </p>
              
             

             <button class="btn fav-btn" aria-label="Add to favourite list">
               <ion-icon name="heart-outline"></ion-icon> 
             </button>
             <a href="Reservation.php"> <button class="btn" >Rent now</button> </a>
            </div>

          </div>

        </div>
      </li>
     
      ';  } ?>

      
               
           

              

           

          </ul>
        </div>
      </section>





      <!-- 
        - #GET START
      -->

      <section class="section get-start">
        <div class="container">

          <h2 class="h2 section-title">Get started with 3 simple steps</h2>

          <ul class="get-start-list">


            <li>
              <div class="get-start-card">

                <div class="card-icon icon-2">
                  <ion-icon name="car-outline"></ion-icon>
                </div>

                <h3 class="card-title">Tell us what car you want</h3>

                <p class="card-text">
                  Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                </p>

              </div>
            </li>

            <li>
              <div class="get-start-card">

                <div class="card-icon icon-3">
                  <ion-icon name="person-outline"></ion-icon>
                </div>

                <h3 class="card-title">Match with seller</h3>

                <p class="card-text">
                  It to make a type specimen book. It has survived not only five centuries, but also the leap into
                  electronic
                </p>

              </div>
            </li>

            <li>
              <div class="get-start-card">

                <div class="card-icon icon-4">
                  <ion-icon name="card-outline"></ion-icon>
                </div>

                <h3 class="card-title">Make a deal</h3>

                <p class="card-text">
                  There are many variations of passages of Lorem available, but the majority have suffered alteration
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #MY RESERVATIONS
      -->
      <div id="my reservations" ></div>
      <section class="section featured-car" >


        
  <div class="container">
  <br><h2 class="h2 section-title">My Rservations</h2>
    <ul class="featured-car-list">
         
            <?php
$user_id=$_SESSION['user_cin'];
$con = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$req = $con ->prepare("select * from confirmed_reservation where user_id=$user_id ");
$req->execute();
while ($reservation=$req->fetch()) { 
  print '
  <li>
  <form action="" method="post">
    <div class="featured-car-card">
    <figure class="card-banner">

    <img src="../assets/images/confirmed reservation.jpg"  loading="lazy" width="440" height="300"
      class="w-100">

  </figure><br>
     <span class="btn" style="background-color : rgb(0,255,0) ">Confirmed</span>

      <div class="card-content">

        <div class="card-title-wrapper">
          <h3 class="h3 card-title">'. $reservation["model"].'</h3></div>
            <table >
          
            <tr>
           <th  class="card-item-text">CIN</th><td class="card-item-text" style="text-align : center"> '.$reservation["user_id"].' </td>
          </tr>
          <tr>
          <th  class="card-item-text">User Name</th><td class="card-item-text" style="text-align : center"> '.$reservation["username"].' </td>
         </tr>
          <tr>
          <th  class="card-item-text">Start Date</th><td class="card-item-text" style="text-align : center">'. $reservation["start_date"].'</td>
          </tr>
          <tr>
          <th  class="card-item-text">Rental Days Number</th><td class="card-item-text" style="text-align : center">'. $reservation["rental_days_number"].'</td>
          </tr>
          <tr>
          <th  class="card-item-text">End Date</th>
          <td class="card-item-text" style="text-align : center" id="result"></td>
          </tr>
        </table>
        <div class="card-price-wrapper">    
       <span>              </span><a href="#"><button class="btn">To Pay</button></a>
        </div>
        </div>

        </div>
      </li>
            ';} ?>


<?php
$user_id=$_SESSION['user_cin'];
$con = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$req = $con ->prepare("select * from reservation where user_id=$user_id ");
$req->execute();
while ($reservation=$req->fetch()) { 
  print '
  <li>
  <form action="" method="post">
    <div class="featured-car-card">
    <figure class="card-banner">

    <img src="../assets/images/waiting.jpg"  loading="lazy" width="440" height="300"
      class="w-100">

  </figure><br>
     <span class="btn"style="background-color : rgb(105,105,105) ">Waiting ...</span>

      <div class="card-content">

        <div class="card-title-wrapper">
          <h3 class="h3 card-title">'. $reservation["model"].'</h3></div>
            <table >
          
            <tr>
          <th  class="card-item-text">CIN</th><td class="card-item-text" style="text-align : center"> '.$reservation["user_id"].' </td>
          </tr>
          <tr>
          <th  class="card-item-text">User Name</th><td class="card-item-text" style="text-align : center"> '.$reservation["username"].' </td>
         </tr>
          <tr>
          <th  class="card-item-text">Start Date</th><td class="card-item-text" style="text-align : center">'. $reservation["start_date"].'</td>
          </tr>
          <tr>
          <th  class="card-item-text">Rental Days Number</th><td class="card-item-text" style="text-align : center">'. $reservation["rental_days_number"].'</td>
          </tr>
          <tr>
          <th  class="card-item-text">End Date</th>
          <td class="card-item-text" style="text-align : center" id="result"></td>
          </tr>
        </table><br>
        <div class="card-price-wrapper">          
        </div>
        </div>
        </div>
      </li>
            ';} ?>

          </ul>

          </div>
      </section>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <div class="footer-top">

        <div class="footer-brand">
          <a href="#" class="logo">
            <img src="../assets/images/logo.svg" alt="Ridex logo">
          </a>

          <p class="footer-text">
            Search for cheap rental cars in New York. With a diverse fleet of 19,000 vehicles, Waydex offers its
            consumers an
            attractive and fun selection.
          </p>
        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Company</p>
          </li>

          <li>
            <a href="#" class="footer-link">About us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Pricing plans</a>
          </li>

          <li>
            <a href="#" class="footer-link">Our blog</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contacts</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Support</p>
          </li>

          <li>
            <a href="#" class="footer-link">Help center</a>
          </li>

          <li>
            <a href="#" class="footer-link">Ask a question</a>
          </li>

          <li>
            <a href="#" class="footer-link">Privacy policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms & conditions</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Neighborhoods in New York</p>
          </li>

          <li>
            <a href="#" class="footer-link">Manhattan</a>
          </li>

          <li>
            <a href="#" class="footer-link">Central New York City</a>
          </li>

          <li>
            <a href="#" class="footer-link">Upper East Side</a>
          </li>

          <li>
            <a href="#" class="footer-link">Queens</a>
          </li>

          <li>
            <a href="#" class="footer-link">Theater District</a>
          </li>

          <li>
            <a href="#" class="footer-link">Midtown</a>
          </li>

          <li>
            <a href="#" class="footer-link">SoHo</a>
          </li>

          <li>
            <a href="#" class="footer-link">Chelsea</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-skype"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="mail-outline"></ion-icon>
            </a>
          </li>

        </ul>

        <p class="copyright">
          &copy; 2022 <a href="#">codewithsadee</a>. All Rights Reserved
        </p>

      </div>

    </div>
  </footer>

  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>