<?php

include('BaseDeDonnees.php');

if(!empty($_GET['id']) && !empty($_GET['idOperation'])){

    $id= intval($_GET['id']);
    $operation= intval($_GET['idOperation']);

    $req7=$bd->query("UPDATE `operations` set `status`='TRAITE' WHERE id_utilisateur=$id and id_operation=$operation");

    $req7->execute();

header("location:Admin.php");
}


?>