<?php
session_start();
if(!isset($_SESSION['admin']) ||  $_SESSION['admin']!==true ) {
header('location:login.html');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>

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
            <a href="#Clients" class="navbar-link" data-nav-link>Clients</a>
          </li>

          <li>
            <a href="#Providers" class="navbar-link" data-nav-link>Providers</a>
          </li>

          <li>
            <a href="#Garages" class="navbar-link" data-nav-link>Garages</a>
          </li>

          <li>
            <a href="#Workers" class="navbar-link" data-nav-link>Workes</a>
          </li>

          <li>
            <a href="#Reservations" class="navbar-link" data-nav-link>Reservations</a>
          </li>

        </ul>
      </nav>

      <div class="header-actions">

        <div class="header-contact">
        <a href="Logout.php"  class="btn user-btn" aria-label="Profile">
          <ion-icon ></ion-icon>
          <span id="aria-label-txt">Logout</span>
        </a>

        </div>



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
        - #CARS LIST
      -->

      <div id="Cars"></div><br>

      <section class="section featured-car" >
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Cars</h2>

          </div>
          <ul class="featured-car-list">

          <?php
$x = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$y = $x ->prepare("select * from car");
$y->execute();


while ($ligne=$y->fetch()) {
print '
            <li>
              <div class="featured-car-card">

                <figure class="card-banner">

                  <img src="../assets/images/'. $ligne["img"].'"  loading="lazy" width="440" height="300"
                    class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">'. $ligne["model"].'</a>
                    </h3>

                    <data class="year" value="'.$ligne["year"].'">'.$ligne["year"].'</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>

                      <span class="card-item-text">'. $ligne["number_of_seats"].' People</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>

                      <span class="card-item-text">'. $ligne["flash"].'</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>

                      <span class="card-item-text">'. $ligne["speedometer"].'km / 1-litre</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>

                      <span class="card-item-text">'. $ligne["hardware_chip"].'</span>
                    </li>

                  </ul>

                  <div class="card-price-wrapper">

                    <p class="card-price">
                      <strong>$'. $ligne["price"].'</strong> / month
                    </p>

                   

                   <a href="Delete_Car.php?id='.$ligne["id"].'"> <button class="btn fav-btn" >Delete</button></a><a href="Form_Update_Car.php?id='.$ligne["id"].'"><button class="btn">Update</button></a>
                    
                  </div>

                </div>

              </div>
            </li>
            '; } ?>
          

</ul><br>
<a href="Add_Car.html"><button class="btn" >Add Car</button></a>

            <!-- 
        - #Clients
      -->

      <div id="Clients" ></div><br><br><br>
      <h2 class="h2 section-title">Clients</h2><br>

      <ul class="featured-car-list">
      <?php
 $x = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$y = $x ->prepare("select * from client");
$y->execute();


while ($client=$y->fetch()) { 
  print '
            <li>
              <div class="featured-car-card">

               

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                    


                      <a href="#">'. $client["name"].' </a></h3></div>
                      <table >
                    
                      <tr>
                     <th  class="card-item-text">CIN</th><td class="card-item-text" style="text-align : center"> '.$client["cin"].' </td>
                    </tr>
                    <tr>
                    <th  class="card-item-text">Telephone</th><td class="card-item-text" style="text-align : center">'.$client["telephone"].'</td>
                    </tr>
                    <tr>
                    <th  class="card-item-text">E-mail</th><td class="card-item-text" style="text-align : center">'.$client["email"].'</td>
                    </tr>
                    <tr>
                    <th  class="card-item-text">Adress</th><td class="card-item-text" style="text-align : center">'.$client["adress"].'</td>
                    </tr>
                  
                  </table><br>
                  <div class="card-price-wrapper">
                  
                   <a  href ="  Delete_Client.php?idc='.$client["id"].'" > <button class="btn fav-btn"  name="delete"  >Delete</button> </a>  <a href="Form_Update_Client.php?idc='.$client["id"].'"><button class="btn">Update</button></a>
                    
                  </div>

                </div>

              </div>
            </li> '; } ?>
             
 
           </ul> <br>
           
            <a href="Add_Client.html"><button class="btn" >Add Client</button></a>

       <!-- 
        - #Providers
      -->

      <div id="Providers" ></div><br><br><br>
      <h2 class="h2 section-title">Providers</h2><br>
      <ul class="featured-car-list">
      <?php
      $x = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$y = $x ->prepare("select * from provider");
$y->execute();


while ($ligne=$y->fetch()) { 
print '
            <li>
              <div class="featured-car-card">

                <figure class="card-banner">
                  <img src="../assets/images/'. $ligne["img"].'"  width="440" height="300" 
                  class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">'. $ligne["name"].'</h3></div>
                      <table >
                  
                    <tr>
                    <th  class="card-item-text">Telephone</th><td class="card-item-text" style="text-align : center">'. $ligne["telephone"].' </td>
                    </tr>
                    <tr>
                    <th  class="card-item-text">Address</th><td class="card-item-text" style="text-align : center">'. $ligne["adress"].'</td>
                    </tr>
                    <tr>
                    <th  class="card-item-text">Email</th><td class="card-item-text" style="text-align : center">'. $ligne["email"].'</td>
                    </tr>
                  
                  </table><br>
                  <div class="card-price-wrapper">
                   <a href="Delete_Provider.php?id='.$ligne["id"].'"> <button class="btn fav-btn" >Delete</button></a><a href="Form_Update_Provider.php?id='.$ligne["id"].'"><button class="btn">Update</button></a>

                  </div>

                </div>

              </div>
            </li>
            '; } ?>
          </ul>
          <br> <a href="Add_Provider.html"><button class="btn" >Add Provider</button></a>
      

      <!-- 
        - #Garages
      -->

      <div id="Garages" ></div><br><br><br>
      <h2 class="h2 section-title">Garages</h2>
      <ul class="featured-car-list">
      <?php
$x = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$y = $x ->prepare("select * from garage");
$y->execute();


while ($garage=$y->fetch()) {
  print'
            <li>
              <div class="featured-car-card">

                <figure class="card-banner">
                  <img src="../assets/images/'.$garage["img"].'"  loading="lazy" width="440" height="300"
                    class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      '.$garage["name"].'</h3></div>
                      <table >
                    <tr>
                    <th  class="card-item-text">Address</th><td class="card-item-text" style="text-align : center">'.$garage["adress"].'</td>
                    </tr>
                    <tr>
                    <th  class="card-item-text">Amplitude</th><td class="card-item-text" style="text-align : center">'.$garage["amplitude"].' Cars</td>
                    </tr>
                  
                  </table><br>
                  <div class="card-price-wrapper">
                   <a href="Delete_Garage.php?id='.$garage["id"].'"> <button class="btn fav-btn" >Delete</button> </a><a href="Form_Update_Garage.php?id='.$garage["id"].'"><button class="btn">Update</button></a>

                  </div>

                </div>

              </div>
            </li>
            '; } ?>  
          </ul><br>
          <br> <a href="Add_Garage.html"><button class="btn" >Add Garage</button></a>
      

 <!-- 
    - #Workers
  -->

          <div id="Workers" ></div><br><br><br>
      <h2 class="h2 section-title">Workers</h2>
      <ul class="featured-car-list">
      <?php
      $x = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$y = $x ->prepare("select * from worker");
$y->execute();


while ($ligne=$y->fetch()) { 
  print'
            <li>
              <div class="featured-car-card">

              <figure class="card-banner">
                  <img src="../assets/images/'.$ligne["img"].'"  loading="lazy" width="440" height="300" class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                    


                      <a href="#">'.$ligne["name"].'</a></h3></div>
                      <table >
                        
                      <tr>
                     <th  class="card-item-text">CIN</th><td class="card-item-text" style="text-align : center">'.$ligne["cin"].'</td>
                    </tr>
                    <tr>
                    <th  class="card-item-text">Speciality</th><td class="card-item-text" style="text-align : center">'.$ligne["speciality"].'</td>
                    </tr>
                    <tr>
                    <th  class="card-item-text">Telephone</th><td class="card-item-text" style="text-align : center">'.$ligne["telephone"].'</td>
                    </tr>
                    <tr>
                    <th  class="card-item-text">E-mail</th><td class="card-item-text" style="text-align : center">'.$ligne["email"].'</td>
                    </tr>
                    <tr>
                    <th  class="card-item-text">Address</th><td class="card-item-text" style="text-align : center">'.$ligne["adress"].'</td>
                    </tr>
                   
                  
                  </table><br>
                  <div class="card-price-wrapper">
                  <a href="Delete_Worker.php?id='.$ligne["id"].'"> <button class="btn fav-btn" >Delete</button> </a><a href="Form_Update_Worker.php?id='.$ligne["id"].'"><button class="btn">Update</button></a>
                    
                  </div>

                </div>

              </div>
            </li>
            ' ; } ?> 
 
           </ul>
           <br> <a href="Add_Worker.html"><button class="btn" >Add Worker</button></a>

           <!-- 
        - #Reservations
      -->

      <div id="Reservations" ></div><br><br><br>
      <h2 class="h2 section-title">Reservations</h2>

      
      <a href="Confirmed_Reservation.php" class="featured-car-link" >
              <span>Confirmed Reservation</span>

              <ion-icon name="arrow-forward-outline" ></ion-icon>
            </a>
<br>
            
      <ul class="featured-car-list">
    
      <?php
 $x = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$y = $x ->prepare("select * from reservation");
$y->execute();


while ($reservation=$y->fetch()) { 
  print '
  
            <li>
              <div class="featured-car-card">

               

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
                  
                   <a  href ="Delete_Reservation.php?id='.$reservation["id"].'" > <button class="btn fav-btn">Delete</button> </a>  <a href="Form_Update_Reservation.php?idc='.$reservation["id"].'"><button class="btn">Update</button></a>
                   <a href="Add_Confirmed_Reservation.php?id='.$reservation["id"].'"><button class="btn">Confirmer</button></a>
                  </div>

                </div>

              </div>
            </li>   ';} ?>
            
             <script>
                    var date = new Date('. $ligne["start_date"].'); 
                    date.setDate(date.getDate() +'. $ligne["rental_days_number"].'); 
                    var dd = String(date.getDate()).padStart(2, '0');
                    var mm = String(date.getMonth() + 1).padStart(2, '0'); // janvier est 0
                    var yyyy = date.getFullYear();

                    date= dd + '-' + mm + '-' + yyyy;

                    document.getElementById("result").innerHTML = date;
                    </script>
             
            
           </ul> <br>
           
            <a href="Add_Reservation.html"><button class="btn" >Add Reservation</button></a>


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
            <a href=" https://www.facebook.com/profile.php?id=100010056307590&mibextid=ZbWKwL" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href=" https://instagram.com/louhichi.rabia?igshid=ZmZhODViOGI=" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://mobile.twitter.com/LouhichiRabia" class="social-link">
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
  <script src="../assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>