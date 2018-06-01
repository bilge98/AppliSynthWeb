<?php
    require_once('../model/DaoCompte.php');
    require_once('../model/DtoCompte.php');
    require_once('../model/DaoConvention.php');
    require_once('../model/DtoConvention.php');
    session_start();
    var_dump($_SESSION);

    $page = "consultermodifierediterconvention";
    $erreur = "";

    #empeche l'utilisateur de charger cette page sans compte
    if(!isset($_SESSION['DtoCompte'])){
        header('Location: ./FrontController.php');
    }
    $daoConvention = new DaoConvention("localhost","junior","root","");

    if(isset($_GET['btn'])){
        if($_GET['btn']=="Consulter"){
            if(isset($_GET['numConvention'])){
                //$dtoConvention = $daoCompte->recupconvbynum();
                //renvoi sur le formulaire remplie
            }
        }
    }
    
    if(isset($_GET['btn'])){
        if($_GET['btn']=="Modifier"){
            if(isset($_GET['numConvention'])){
                //$dtoConvention = $daoCompte->recupconvbynum();
                //renvoi sur le formulaire remplie + bouton modifier
            }
        }
    }

        
    if(isset($_GET['btn'])){
        if($_GET['btn']=="Editer"){
            if(isset($_GET['numConvention'])){
                //$dtoConvention = $daoCompte->recupconvbynum();
                //renvoi sur le formulaire remplie + bouton Editer
            }
        }
    }

    if(isset($_POST['btnRechercher'])){
        if($_POST['numeroConvention'] && $_POST['numeroConvention']!=""){
            //$daoCompte->afficheconvbynum(num);
        }
        if($_POST['nomConvention'] && $_POST['nomConvention']!=""){
            //$daoCompte->afficheconvbynom(nom);
        }
    }
    $daoConvention->afficherTabConvention();
    









    include("../View/layout.php");