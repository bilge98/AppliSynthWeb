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
    $daoConvention->afficherTabConvention();
    

    include("../View/layout.php");