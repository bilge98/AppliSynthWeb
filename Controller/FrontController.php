<?php

    session_start();

    $page = "connexion";
    $erreur = "";
    
    #supprime le compte de la session
    if(isset($_POST['btnDeconnexion'])){
        $_SESSION['DtoCompte'] = "";
        session_unset();
    }
    
    #si connecter renvoie vers le menu principal
    if(isset($_SESSION['DtoCompte'])){
        header('Location: ./MenuprincipalController.php');
    }
    
    #verifie le formulaire de connexion et connecte le compte à la session
    if(isset($_POST['btnConnexion'])){
        if(isset($_POST['username'])&& $_POST['username']!=""){
            if(isset($_POST['password'])&& $_POST['password']!=""){
                echo "ça marche";
                $_SESSION['DtoCompte']= "ok"; //a virer pour tester
                //création d'une DtoCompte en verifiant le mdp puis mettre dans session
                header('Location: ./MenuprincipalController.php');
            }else{
                $erreur = "Merci de renseigner un mot de passe";
            }
        }else{
            $erreur = "Merci de renseigner un identifiant";
        }
    }
    

    include('../View/layout.php');