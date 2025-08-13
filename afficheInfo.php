<?php

include('BaseDeDonnees.php');

session_start();

$res=[];

$req=$bd->query('SELECT * FROM `utilisateurs` where `id_utilisateur`= '.$_SESSION['id_utilisateur']);

$res=$req->fetch();


echo json_encode($res);

?>