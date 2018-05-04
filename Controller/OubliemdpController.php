<?php

    session_start();

    $page = "mdpoublie";
    $erreur = "";
    
    #empeche l'utilisateur de se rendre sur cette page si il est connecter
    if(isset($_SESSION['DtoCompte'])){
        header('Location: ./MenuprincipalController.php');
    }
    
    #verifie le formulaire de reinitialisation et modifie le mdp dans la bdd
    if(isset($_POST['btnReinitialiser'])){
        if(isset($_POST['username'])&& $_POST['username']!=""){
            if(isset($_POST['password'])&& $_POST['password']!=""){
                echo "reinitialiser";
                //update du mdp dans la base
                //création d'une DtoCompte puis mettre dans session
                //header('Location: URL DE la page connecer');
            }else{
                $erreur = "Merci de renseigner un mot de passe";
            }
        }else{
            $erreur = "Merci de renseigner un identifiant";
        }
    }

    #empeche l'utilisateur de venir sur ce formulaire
    if((!isset($_POST['btnOubliemdp']))&&(!isset($_POST['btnReinitialiser']))){
        header('Location: ./FrontController.php');
    }
        
    include('../View/layout.php');