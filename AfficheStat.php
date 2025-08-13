<?php 

$req1=$bd->query("SELECT COUNT(*) AS `total` from `utilisateurs` ");
$nbrU=$req1->fetch();

$req2=$bd->query("SELECT SUM(`qte_produite`) as `total` from `operations` ");
$qteD=$req2->fetch();

$req3=$bd->query(" SELECT SUM(`qte_produite`) as `total` from `utilisateurs` ");
$qteP=$req3->fetch();


$req4=$bd->query("SELECT SUM(`montant`) as `montant` from `operations` where  `type` like 'VIREMENT BANCAIRE' ");
$qteV=$req4->fetch();

$req5=$bd->query("SELECT SUM(`qte_produite`) as `quantite` from `operations` where  `type` like 'ENERGIE' ");
$qteE=$req5->fetch();



$req6=$bd->query("SELECT count(*) as 'nbr' from `utilisateurs` ");
$qteU=$req6->fetch();


$req7=$bd->query("SELECT sum(`pas`) as 'nbrPas' from `utilisateurs` ");
$qtePA=$req7->fetch();

$req8=$bd->query(" SELECT* from utilisateurs, operations where utilisateurs.id_utilisateur=operations.id_utilisateur");
$req8->execute();
$reqTu=$req8->fetchAll();
?>