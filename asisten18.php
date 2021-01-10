<?php
  $ass18 = array( array("img"=>"rose", "quotes"=>"Anjai mabar", "nama"=>1.25 , "NIM"=>15, "KBI"=>"Elin"),
  array("img"=>"daisy", "quotes"=>"Anjai mabar", "nama"=>0.75 , "NIM"=>25, "KBI"=>"Elin"),
  array("img"=>"orchid", "quotes"=>"Anjai mabar", "nama"=>1.15 , "NIM"=>7, "KBI"=>"Elin") 
  ); 
?>

<!doctype html>
<html lang="en" id="home">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="scss/asisten.css">
    <title>Lab Komputasi MIPA</title>

    <!--web icon-->
    <link rel="icon" href="img/lab1.jpeg">
  </head>

  <body>
    <!-- NAVBAR -->
    <div class="container my-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light custom-nav bg-transparent">
        <a class="navbar-brand" href="index.php">
          <img src="img/lab.png" alt="logo lab">
          <span>Lab Komputasi</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link slide-scroll" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link slide-scroll" href="index.php">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                News
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="oprec.php">Open Recruitment</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link btn-primary contact-button" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- End NAVBAR -->

  <!-- Upper Content -->
    <!-- <div class="container">
      <div class="row custom-section">
        <div class="col-12 col-lg-4">
          <h2>Hello World!</h2>
          <h3>Selamat datang..</h3>
          <h3>Di Lab Komputasi MIPA</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto ipsum facilis cupiditate? Porro, aut. Quis facere doloremque voluptatem excepturi dignissimos nesciunt illum reiciendis incidunt veritatis.</p>
          <a class="slide-scroll" href="#explore">Explore More</a>
        </div>
      </div>
    </div><br> -->
    <!-- End Upper Content -->


    <!-- Mid Content -->
    <section class="section">
    <div class="contaier" id="explore">

      <!-- Lab info -->
        <div class="row text">
            <div class="col text-center">
                <h3>Salam Hangat dari Asisten Lab Komputasi</h3>
            </div>
            
        </div>
      <div class="row lab-info">
        <div class="col-lg-5 offset-1" id="about">
          <img src="img/ass18/rizka.jpeg" alt="ruang lab" class="img-fluid">
        </div>
        <div class="col-lg-5 biodata">
          <h3>"<span>Semangat</span> Srikandi, untuk <span> berdedikasi</span>"</h3>
          <p>Nama : Rizka Andri Yani</p>
          <p>NIM  : 08021281823039</p>
          <p>KBI  : Elinkomnuk</p>
        </div>
        <div class="col-lg-5 offset-1" id="about">
          <img src="img/ass18/rafi.jpeg" alt="ruang lab" class="img-fluid">
        </div>
        <div class="col-lg-5 biodata">
          <h3>"<span>Error</span> merupakan sahabat <span> terbaik</span>"</h3>
          <p>Nama : Muhammad Rafi Pratama</p>
          <p>NIM  : 08021281823027</p>
          <p>KBI  : Elinkomnuk</p>
        </div>
      </div>
      <!-- End lab info -->

      <!-- Footer -->
      <footer class="sticky-footer">
        <div class="row footer">
            <div class="col text-center">
              <p><span>Copyright &copy; Lab Komputasi 2020</span></p>
            </div>
          </div>
      </footer>
      

      <!-- End footer -->

    </div>
  </section>

    <!-- End Mid Content -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="js/slide.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>

    

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>