<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirmed Reservation</title>

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

      <a href="index.php" class="logo">
      <img src="../assets/images/logo.png" width="120" height="60" style="padding-right : 50 px"> 
      </a>

      <nav class="navbar" data-navbar>

      </nav>



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
        - #Reservations
      -->
      <div id="Cars"></div><br>

<section class="section featured-car" >
  <div class="container">

      <div id="Reservations" ></div>
      <center><h1 class="h2 section-title">Confirmed Reservation</h1></center>

            <br>
      <ul class="featured-car-list">
    
      <?php
 $x = new PDO ("mysql:host=localhost;dbname=car_rental","root","");
$y = $x ->prepare("select * from confirmed_reservation");
$y->execute();


while ($confirmed_reservation=$y->fetch()) { 
  print '
            <li>
              <div class="featured-car-card">

               

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                    


                      <a href="#">'. $confirmed_reservation["model"].' </a></h3></div>
                      <table >
                    
                      <tr>
                     <th  class="card-item-text">CIN</th><td class="card-item-text" style="text-align : center"> '.$confirmed_reservation["user_id"].' </td>
                    </tr>
                    <tr>
                    <th  class="card-item-text">User Name</th><td class="card-item-text" style="text-align : center"> '.$confirmed_reservation["username"].' </td>
                   </tr>
                    <tr>
                    <th  class="card-item-text">Start Date</th><td class="card-item-text" style="text-align : center">'. $confirmed_reservation["start_date"].'</td>
                    </tr>
                    <tr>
                    <th  class="card-item-text">Rental Days Number</th><td class="card-item-text" style="text-align : center">'. $confirmed_reservation["rental_days_number"].'</td>
                    </tr>
                    <tr>
                    <th  class="card-item-text">End Date</th>
                    <td class="card-item-text" style="text-align : center" id="result"></td>
                    </tr>
                  </table><br>
                  <div class="card-price-wrapper">
                  
                   <a  href ="  Delete_Reservation.php?id='. $confirmed_reservation["model"].'" > <button class="btn fav-btn"  >Delete</button> </a>  <a href="Form_Update_Reservation.php"><button class="btn">Update</button></a>
                    
                  </div>

                </div>

              </div>
            </li> ';  } ?>
            
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
  <script src="../assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>