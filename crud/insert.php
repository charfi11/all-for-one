<?php

include('co_bdd.php');

$name = isset( $_POST['nom']) ? $_POST['nom'] : NULL;
$prenom = isset( $_POST['prenom']) ? $_POST['prenom'] : NULL;
$pseudo = isset( $_POST['pseudo']) ? $_POST['pseudo'] : NULL;
$img = isset( $_POST['img']) ? $_POST['img'] : NULL;
$mail = isset( $_POST['mail']) ? $_POST['mail'] : NULL;
$tel = isset( $_POST['tel']) ? $_POST['tel'] : NULL;

$req = $bdd->prepare(' INSERT INTO crew (nom, prenom, pseudo, img, email, tel)
 VALUES (?,?,?,?,?,?)');
 $req->execute(array(
   $_POST['nom'],
   $_POST['prenom'],
   $_POST['pseudo'],
   $_POST['img'],
   $_POST['mail'],
   $_POST['tel']
 ));

header('location: ../admin.php');
?>