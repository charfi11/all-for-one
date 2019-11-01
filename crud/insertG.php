<?php

include('co_bdd.php');

$img = isset( $_POST['imgG']) ? $_POST['imgG'] : NULL;

$reqG = $bdd->prepare('INSERT INTO gallery (img) VALUES (?)');
$reqG->execute(array(
   $_POST['imgG']
));

?>