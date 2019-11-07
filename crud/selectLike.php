<?php

include('co_bdd.php');

$reqL = $bdd->prepare("SELECT * FROM love WHERE id_love = 1");
$reqL->execute();

$donnees = $reqL->fetch();
$like = $donnees['id_love'];
echo $like;

?>