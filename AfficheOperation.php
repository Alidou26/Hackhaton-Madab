<?php

$req=$bd->query('SELECT * FROM `operations` where `id_utilisateur`='.$_SESSION['id_utilisateur']);

$resultats=$req->fetchAll();

?>