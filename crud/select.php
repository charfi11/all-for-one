<?php

include('co_bdd.php');

$req = $bdd->prepare('SELECT * FROM crew');
$req->execute();

$reqG = $bdd->prepare('SELECT * FROM gallery');
$reqG->execute();


?>