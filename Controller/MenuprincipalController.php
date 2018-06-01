<?php
    require_once('../model/DaoCompte.php');
    require_once('../model/DtoCompte.php');
    session_start();
    var_dump($_SESSION);

    $page = "menuprincipal";
    $erreur = "";

    #empeche l'utilisateur de charger cette page sans compte
    if(!isset($_SESSION['DtoCompte'])){
        header('Location: ./FrontController.php');
    }
    
    $dtoCompte = $_SESSION['DtoCompte'];
    $admin = $dtoCompte->getAdmin();
    var_dump($admin);
    include("../View/layout.php");