<?php 


require('BaseDeDonnees.php');

    //verifier que tous les champs sont remplis

    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['telephone']) && !empty($_POST['adresse']) 
    && !empty($_POST['email']) && !empty($_POST['pseudo']) && !empty($_POST['mot_de_passe']) && !empty($_FILES) )

    { 
        //mettre les donnees dans des variables
           
        $nom=strtoupper(htmlspecialchars($_POST['nom']));
        $prenom=strtoupper(htmlspecialchars($_POST['prenom']));
        $adresse=strtoupper(htmlspecialchars($_POST['adresse']));
        $telephone=htmlspecialchars($_POST['telephone']);
        $email=htmlspecialchars($_POST['email']);
        $pseudo=htmlspecialchars($_POST['pseudo']);
        $mot_de_passe=password_hash(htmlspecialchars($_POST['mot_de_passe']),PASSWORD_DEFAULT);
        $dest_photo='image-utilisateurs/'. $pseudo.$_FILES['photo']['name'];
        $nom_photo=$_FILES['photo']['name'];



         //verifier si le pseudo n'existe pas deja

         $verifPseudo=$bd->prepare("SELECT `pseudo` from `utilisateurs` WHERE `pseudo` = ?  ");
         $verifPseudo->execute(array($pseudo));

         if($verifPseudo->rowcount() > 0){
            $reponse="Ce pseudo existe deja , veuillez choisir un autre un pseudo";

         }
       
         else {


            //verifier l'email

            if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                  //verifier l'extension de la photo
           
            $extensionPhoto=strrchr($nom_photo,'.');

            $extensionAutorise=array('.jpg','.JPG','.jpeg','.JPEG','.png','.PNG');

            if(in_array($extensionPhoto,$extensionAutorise)){

                //Deplacer l'image dans le dossier image utilisateur

                //verifier si l'image a ete enregistre dans le dossier

                if(move_uploaded_file($_FILES['photo']['tmp_name'],$dest_photo)){
                   
                    //Enregistrer les donnees de l'utilisateurs dans la base de donnees

                    $enregistre=$bd->prepare('INSERT INTO `utilisateurs`( `adresse`,`nom`, `prenom`,`telephone`, `email`, `pseudo`, `mot_de_passe`, `photo`) 
                    VALUES(?,? ,? ,? , ?,? ,? ,? )');

                    $enregistre->execute(array($adresse,$nom,$prenom,$telephone,$email,$pseudo,$mot_de_passe,$dest_photo));

                    $reponse=0; 

                    
                }

                else{
                    $reponse="une erreur est survenu , l'image n'a pas ete enregistree !";
                }

            }
            else{

                $reponse="veuillez choisir une photo en jpg ou png !";

            }
            
         
            }
            else {
                $reponse="Votre email n'est pas valide";
            }
         }
         
         
    }

    else{
        $reponse="Veuillez remplir correctement tous les champs !";
    }

    //RETOUR DE LA REPONSE

    echo json_encode($reponse);








?>