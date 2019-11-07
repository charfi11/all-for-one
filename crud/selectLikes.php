<?php

include('co_bdd.php');

$id = $_GET['id'];

$reqLike = $bdd->prepare("SELECT COUNT(*) FROM `likes` WHERE id_gallery = '".$id."' AND id_love = 1");
$reqLike->execute();


while($d = $reqLike->fetch() ){
echo $d[0];
}

?>