<?php
    require_once('../model/DaoCompte.php');
    require_once('../model/DtoCompte.php');
    require_once('../model/DaoConvention.php');
    require_once('../model/DtoConvention.php');
    session_start();
    var_dump($_SESSION);

    $page = "formulaire_convention";
    $erreur = "";

    #empeche l'utilisateur de charger cette page sans compte
    if(!isset($_SESSION['DtoCompte'])){
        header('Location: ./FrontController.php');
    }

    #gere la creation du client dans la bdd
    if(isset($_POST['valider'])){
        if(isset($_POST['nomClient']) && $_POST['nomClient']!=""){
            if(isset($_POST['numSiret']) && $_POST['numSiret']!=""){
                //numero de siret present
                if(isset($_POST['numeroRue']) && $_POST['numeroRue']!=""){
                    if(isset($_POST['rue']) && $_POST['rue']!=""){
                        if(isset($_POST['codePostal']) && $_POST['codePostal']!=""){
                            if(isset($_POST['codePostal']) && $_POST['codePostal']!=""){
                                //creation dtoClient + insert bdd
                                
                                
                            }                    
                        }
                    }                    
                }
            }else{
                //Pas de numero de siret
                if(isset($_POST['numeroRue']) && $_POST['numeroRue']!=""){
                    if(isset($_POST['rue']) && $_POST['rue']!=""){
                        if(isset($_POST['codePostal']) && $_POST['codePostal']!=""){
                            if(isset($_POST['codePostal']) && $_POST['codePostal']!=""){
                                //creation dtoClient + insert bdd
                                
                                
                            }                    
                        }
                    }                    
                } 
            }
        }
    }

    #gere la creation des collaborateurs dans la bdd
    

    