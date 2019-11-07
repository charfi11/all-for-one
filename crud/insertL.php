<?php

include('co_bdd.php');

$gallery = $_POST['gallery'];
$like = $_POST['like'];

$reqL = $bdd->prepare('INSERT INTO likes (id_gallery, id_love) VALUES (?, ?)');
$reqL->execute(array(
    $gallery,
    $like
));

var_dump($reqL);
echo "\nPDO::errorInfo():\n";
print_r($reqL->errorInfo());

?>