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
              <a class="navbar-brand text-white" href="index.html">AFO</a>
              <div class="collapse navbar-collapse coll" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link text-white" href="index.html">Acceuil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="crew.php" target="_self">l'équipe</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="gallery.php">Gallery</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="#">Contact</a>
                    </li>
                </ul>
              </div>
            </nav>
          </header>
          <div class="d-flex justify-content-center">
            <div class="mt-5 mb-5">
    <h1>Gallery</h1>
</div>
</div>
    <div class="d-flex flex-wrap bg-white">
    <?php
  
    include('crud/select.php');

    while($donnees = $reqG->fetch()){
    ?>
    <div class="block-gall d-flex justify-content-center">
    <img src="gallery/<?php echo $donnees['img']?>" alt="gallery" class='img-gallery ml-2 mt-1 mb-2'>
    <div class="like">
    <i class="fas fa-heart none"></i>
    </div>
    </div>
    <?php }
    ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
  </body>
</html>