<?php

include('BaseDeDonnees.php');

session_start();

$req=$bd->query('SELECT * FROM `paves`');

$res=$req->fetchAll();

foreach($res as $val){

    if($val['lat']==$_POST['lat'] && $val['lon']==$_POST['lon']){
        $req2=$bd->prepare("UPDATE `utilisateurs` set `pas`= `pas`+1,`qte_produite`=`qte_produite`+3,`solde_total`=`solde_total`+ 0.2,
        `solde_dispo`=`solde_dispo`+ 0.2
         where `id_utilisateur`= ? ");
        $req2->execute(array($_SESSION['id_utilisateur']));
    }

}



?>