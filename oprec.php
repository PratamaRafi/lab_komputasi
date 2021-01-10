<?php
$asisten = array( array("No"=>1,"Nama"=>"Anas Fatur Rahman", "NIM"=>"08021181823085 " , "Angkatan"=>"Fisika 2018"),
               array("No"=>2,"Nama"=>"Ade Rizki Wahyudi", "NIM"=>"08021381924056" , "Angkatan"=>"Fisika 2019"),
               array("No"=>3  ,"Nama"=>"Tiara Martika Gerhany", "NIM"=>"08021381823074" , "Angkatan"=>"Fisika 2018"),
               array("No"=>4,"Nama"=>"M. Fahrezy Putra", "NIM"=>"08021281924033" , "Angkatan"=>"Fisika 2019"),
               array("No"=>5  ,"Nama"=>"Putri Anisah", "NIM"=>"08021181924010", "Angkatan"=>"Fisika 2019"),
               array("No"=>6,"Nama"=>"M. Ferdinan Yuda", "NIM"=>"08021181924006", "Angkatan"=>"Fisika 2019"),
               array("No"=>7  ,"Nama"=>"M. Aldi Kurniawan", "NIM"=>"08021281823087", "Angkatan"=>"Fisika 2018"),
               array("No"=>8,"Nama"=>"Daula Fadlun", "NIM"=>"08021281924032", "Angkatan"=>"Fisika 2019"),
               array("No"=>9  ,"Nama"=>"Ayu Kirani Azzahra", "NIM"=>"08021381924059	", "Angkatan"=>"Fisika 2019"), 
             ); 
$jumlah = 1
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
    <link rel="stylesheet" href="scss/oprec.css">
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

    <!-- Mid Content -->
    <section class="section">
    <div class="contaier" id="explore">

      <!-- Lab info -->
        <div class="row text">
            <div class="col">
                <div class="container text-center">
                  <h3>Pengumuman Open Recruitment Assitant kompuasi 2021</h3>
                </div>
              <!-- TABLE OPREC 2021 -->

              <div class="container">
                <p class="text" style="margin : 35px 0">Berikut adalah nama peserta open recruitment assistan komputasi 2021:</p>
                <?php if (count($asisten) > 0): ?>
                  <table class="table table-striped table-responsive-sm">
                    <thead>
                      <tr>
                        <!-- <th>No</th> -->
                        <th scope="col"><?php echo implode('</th><th>', array_keys(current($asisten))); ?></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($asisten as $row): array_map('htmlentities', $row); ?>
                      <tr>
                        <!-- <th scope="row"><?php if($jumlah=1){$jumlah++;echo $jumlah;}?></th> -->
                        <td><?php echo implode('</td><td>', $row); ?></td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                  <?php endif; ?>
               <p class="text" style="margin : 35px 0"><Span>Selamat bergabung! </Span> bagi peserta yang dinyatakan lolos. Bagi yang tidak dinyatakan lolos jangan berkecil hati dan tetap semangat</p>
              </div>
            </div>
            
        </div>

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
