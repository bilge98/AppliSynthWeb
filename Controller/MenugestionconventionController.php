<?php

    require_once('../model/DaoConvention.php');
    require_once('../model/DtoConvention.php');

    session_start();
    var_dump($_SESSION);
    
    $page = "menugestionconvention";
    $erreur = "";

    #empeche l'utilisateur de charger cette page sans compte
    if(!isset($_SESSION['DtoCompte'])){
        header('Location: ./FrontController.php');
    }
    
    if(isset($_POST['btnModifierEditerConvention'])){
        $page = "consultermodifierediterconvention";
    }


    $daoConvention = new DaoConvention('junior','localhost','root','');
    $dtoConvention = $daoConvention->afficherTabConvention();
    

    include("../View/layout.php");