<?php

include('crud/co_bdd.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/6fb900568b.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>AFO Gallery</title>
    </head>
  <body>
  <header>
  <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand text-white" href="index.html"><img src="img/logo.png" alt="logo" style="width:2em;"></a>
              <div class="collapse navbar-collapse coll" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link text-white" href="index.html"><i class="fas fa-home"></i> Acceuil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="crew.php" target="_self"><i class="fas fa-users"></i> l'équipe</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="gallery.php"><i class="fas fa-image"></i> Galerie</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="contact.php"><i class="fas fa-id-card"></i> Contact</a>
                    </li>
                </ul>
              </div>
            </nav>
            <div class="up">
          <i class="fas fa-arrow-up"></i>
        </div>
          </header>
          <div class="d-flex justify-content-center">
          <div class="divmodal" id='m'>
          <div class="divspan"></div>
          </div>
            <div class="mt-5" style="width: 100%;">
            <h1 class="mt-4 font-weight-bolder text-dark" style='font-size: 8rem'>Galerie.</h1>
</div>
</div>
<div class="d-flex justify-content-center mb-5">
    <div class="d-flex flex-wrap bg-white">
    <?php
  
    include('crud/select.php');

    while($donnees = $reqG->fetch()){
      $rand = rand(1,100000);
    ?>
    <div class="block-gall d-flex justify-content-center" name='gallery' id="<?php echo $donnees['id_gallery'] ?>">
    <img src="gallery/<?php echo $donnees['img']?>" alt="gallery" id="<?php echo $rand ?>" class='img-gallery ml-2 mt-1 mb-2'>
    </div>
    <?php }
    ?>
    </div>
    </div>
                    <!-- Footer -->
<footer class="page-footer font-small cyan darken-3">

<!-- Footer Elements -->
<div class="container">

  <!-- Grid row-->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-12">
      <div class="mb-5 mt-5 d-flex justify-content-center">

        <!-- Facebook -->
        <a class="fb-ic">
          <i class="fab fa-facebook-f fa-lg text-white mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <!-- Twitter -->
        <a class="tw-ic">
          <i class="fab fa-twitter fa-lg text-white mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <!--Instagram-->
        <a class="ins-ic">
          <i class="fab fa-instagram fa-lg text-white mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <!--Pinterest-->
        <a class="pin-ic">
          <i class="fab fa-pinterest fa-lg text-white fa-2x"> </i>
        </a>
      </div>
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row-->

</div>
<!-- Footer Elements -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3 text-white">© 2019 Copyright:
  <p class='text-white'>L'association All for one, Charfi Mohamed</p>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
  </body>
</html>