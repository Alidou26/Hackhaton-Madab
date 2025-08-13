<?php 

session_start();

$reponse=[];


require('BaseDeDonnees.php');

//verifier que tous les champs sont remplis

if(!empty($_POST['pseudo']) && !empty($_POST['mot_de_passe']) ){

    //enregistrer les donnees dans des variables

    $pseudo=htmlspecialchars($_POST['pseudo']);
    $mot_de_passe=htmlspecialchars($_POST['mot_de_passe']);

    //verifier si l'utilisateur existe
    
    $verifUtilisateur=$bd->prepare("SELECT * from `utilisateurs` WHERE `pseudo` = ?  ");
    $verifUtilisateur->execute(array($pseudo));

    if($verifUtilisateur->rowcount() > 0){
        
        //verifier le mot de passe
       
    $utilisateur=$verifUtilisateur->fetch();
    

    if(password_verify($mot_de_passe,$utilisateur['mot_de_passe'])){

           //On cree une SESSION pour l'utilisateur

           $_SESSION['utilisateur_connecte']=true;
           $_SESSION['id_utilisateur']=$utilisateur['id_utilisateur'];
           $_SESSION['nom']=$utilisateur['nom'];
           $_SESSION['prenom']=$utilisateur['prenom'];
           $_SESSION['telephone']=$utilisateur['telephone'];
           $_SESSION['email']=$utilisateur['email'];
           $_SESSION['adresse']=$utilisateur['adresse'];
           $_SESSION['pseudo']=$utilisateur['pseudo'];
           $_SESSION['photo']=$utilisateur['photo'];
     
        $reponse['status']=0;

        //on met a jour son status dans la base de donnee

        $changeStatus=$bd->prepare('UPDATE `utilisateurs` SET `status`= ? WHERE `id_utilisateur`= ? ');
        $changeStatus->execute(array('CONNECTE',$utilisateur['id_utilisateur']));
  
        //url de redirection
        $reponse['url']="madab.php";
    }
        
       
    

    else {
        $reponse['status']="Votre mot de passe est incorrect !";
    }

    }

    else {
        $reponse['status']="Vous etes pas encore inscris !";
    }


}
else {
    $reponse['status']="veuillez remplir tous les champs demandes !";
}


//Retourner la reponse

echo json_encode($reponse);


?>