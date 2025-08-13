<?php

include('BaseDeDonnees.php');

session_start();

$req=$bd->query("SELECT * FROM `utilisateurs` where `id_utilisateur`= ".$_SESSION['id_utilisateur']);

$res=$req->fetch();

$montant=$res['solde_dispo'];
$qte=(3*$montant)/0.2;

$type=$_POST['type'];

if($montant!=0){
if($type=='don'){

    $req1=$bd->prepare("INSERT INTO `operations`(`type`,`qte_produite`,`montant`,`id_utilisateur`) values(?,?,?,?)");
    $req1->execute(array('DON',$qte,$montant,$_SESSION['id_utilisateur']));

    $req2=$bd->prepare("UPDATE `utilisateurs` set `solde_dispo`=0 where `id_utilisateur`= ? ");
    $req2->execute(array($_SESSION['id_utilisateur']));

    header('location: madab.php');

}
else if($type=="bancaire"){

    $req1=$bd->prepare("INSERT INTO `operations`(`type`,`qte_produite`,`montant`,`id_utilisateur`,`numero_bancaire`) values(?,?,?,?,?)");
    $req1->execute(array('VIREMENT BANCAIRE',$qte,$montant,$_SESSION['id_utilisateur'],$_POST['carte']));

    $req2=$bd->prepare("UPDATE `utilisateurs` set `solde_dispo`=0 where `id_utilisateur`= ? ");
    $req2->execute(array($_SESSION['id_utilisateur']));

    header('location: madab.php');
}
else if($type=="energie"){
    $req1=$bd->prepare("INSERT INTO `operations`(`type`,`qte_produite`,`montant`,`id_utilisateur`) values(?,?,?,?)");
    $req1->execute(array('ENERGIE',$qte,$montant,$_SESSION['id_utilisateur']));

    $req2=$bd->prepare("UPDATE `utilisateurs` set `solde_dispo`=0 where `id_utilisateur`= ? ");
    $req2->execute(array($_SESSION['id_utilisateur']));

    header('location: madab.php');
}
}


?>