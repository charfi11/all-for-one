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
    <link href="https://fonts.googleapis.com/css?family=Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>AFO l'équipe</title>
  </head>
  <body>
        <header>
        <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand text-white" href="index.html">AFO</a>
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
                </header>
                <div class="d-flex">
                  <div class="firstblock d-flex flex-column align-items-center">
                   <h2 class='citation'>“Un pour tous, tous pour un...”</h2>
                  </div>
                  <div class="secondblock d-flex flex-column align-items-center">
                    <div class="blockms d-flex flex-column align-items-center">
                   <h2>#L'équipe</h2>
                    <p class="mt-4" style='width:70%;'>Et hanc quidem praeter oppida
                       multa duae civitates exornant Seleucia opus Seleuci regis, 
                       et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura 
                       enim antehac nimium potens, olim subversa ut rebellatrix interneciv
                       a aegre vestigia claritudinis pristinae monstrat admodum pauca.
                    </p>
                    <div class="d-flex mt-4">
                   <a href=""><i class="fab fa-facebook-square fa-3x mr-4"></i></a>
                   <a href=""><i class="fab fa-instagram fa-3x mr-4"></i></a>
                   <a href=""><i class="fab fa-snapchat-square fa-3x mr-4"></i></a>
                    </div>
                   </div>
                  </div>
                </div>
                <div class="parallax-window winds" data-parallax="scroll" data-image-src="img/jaal.jpg"></div>
                <main>
                  <div class="d-flex justify-content-center bg-white">
                    <div class="d-flex flex-column align-items-center">
                      <h3 class="mt-4 font-weight-bolder memb" style='font-size: 8rem'>Membres.</h3>
                    <div class="d-flex justify-content-center mt-4 mb-5 flex-wrap">
                  <?php
                  include('crud/select.php');

                  while($donnees = $req->fetch()){
                    $rand = rand(1,100000);
                  ?>
              <div class="card ml-5 mt-4 bg-white" style="width: 15rem;" id="<?php echo $donnees['id_crew'];?>">
                <img src="img/<?php echo $donnees['img'];?>" class="card-img-top" alt="..." style="height:12em;">
                <div class="card-body d-flex flex-column mt-3 mb-2 ml-4">
                <p class="card-text cardtitle text-secondary text-uppercase"><?php echo $donnees['pseudo'];?></p>
                <div class="card-dis mb-2" id="<?php echo $rand ?>">
                <h5 class="card-title font-weight-bold"><?php echo $donnees['prenom'];?></h5>
                <p class="card-text text-secondary mb-4"><?php echo $donnees['email'];?></p>
                </div>
                </div>
              </div>
                  <?php
                  }
                  ?>
                  </div>
                  </div>
                </div>
                </main>
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
                <!-- Google +-->
                <a class="gplus-ic">
                  <i class="fab fa-google-plus-g fa-lg text-white mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <!--Linkedin -->
                <a class="li-ic">
                  <i class="fab fa-linkedin-in fa-lg text-white mr-md-5 mr-3 fa-2x"> </i>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/parallax.js"></script>
    <script src="js/index.js"></script>
</body>
</html>