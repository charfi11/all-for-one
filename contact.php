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
    <title>AFO Contact</title>
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
                <div class="contactblock">
                <div class="parallax-window" data-parallax="scroll" data-image-src="img/b.jpg"></div>
                </div>       
<div class="d-flex flex-column align-items-center">
                <form method='post' action='mail.php' class='contact'>
                    <h2 class="mt-2 mb-4 font-weight-bold">Contact</h2>
  <div class="form-group">
    <label for="nom">Nom de la structure</label>
    <input type="text" name='nom' class="form-control" placeholder="Nom de la structure" required>
  </div>
  <div class="form-group">
    <label for="mail">Email</label>
    <input type="text" name='email' class="form-control" placeholder="Email" required>
  </div>
  <div class="form-group">
    <label for="message">Votre message</label>
    <textarea type="mail" name="message" class="form-control" placeholder="Votre message" required></textarea>
  </div>
  <div class="d-flex justify-content-center mt-4 mb-1">
  <button type="submit" class="btn btn-success">Envoyer</button>
  </div>
</form>
</div>
<main>
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