<?php 
include('crud/co_bdd.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin</title>
  </head>
  <body class="d-flex flex-column align-items-center admin">
  <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="index.html">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" id="member">Membres</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id='gallery'>Gallery</a>
  </li>
</div>
    <h1>Admin</h1>
    <form action="crud/insert.php" method="post" class="form-member">
    <h2 class="mt-3 mb-3">Ajout d'un membre</h2>
  <div class="form-group">
    <label for="formGroupExampleInput">Nom</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="nom" placeholder="Nom">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Prenom</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="prenom" placeholder="Prenom">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Pseudo</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="pseudo" placeholder="Pseudo">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Mail</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="mail" placeholder="Mail">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Image</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="img" placeholder="Image">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Tel</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="tel" placeholder="Tel">
  </div>
  <div class="d-flex justify-content-center">
  <button type='submit' class="btn btn-success">valider</button>
  </div>
</form>

<form method='post' action='crud/insertG.php' class="gallery">
<h2>Gallery</h2>
<label for="gallery">Ajout photo gallery</label>
<input type="text" class="form-control" name="imgG" placeholder='gallery'>
<button class="btn btn-success" type="submit">Valider</button>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
  </body>
</html>