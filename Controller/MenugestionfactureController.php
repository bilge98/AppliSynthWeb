<?php

    session_start();
    var_dump($_SESSION);

    $page = "menugestionfacture";
    $erreur = "";

    #empeche l'utilisateur de charger cette page sans compte
    if(!isset($_SESSION['DtoCompte'])){
        header('Location: ./FrontController.php');
    }

    if()

    include("../View/layout.php");