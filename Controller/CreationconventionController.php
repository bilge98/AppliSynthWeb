<?php
    require_once('../model/DaoCompte.php');
    require_once('../model/DtoCompte.php');
    require_once('../model/DaoConvention.php');
    require_once('../model/DtoConvention.php');
    require_once('../model/DaoClient.php');
    require_once('../model/DtoClient.php');
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
        if(isset($_POST['nomProjet']) && $_POST['nomProjet']!=""){
            if(isset($_POST['nomClient']) && $_POST['nomClient']!=""){
                if(isset($_POST['clientTel']) && $_POST['clientTel']!=""){
                //creation dtoClient + insert bdd
                    $dtoClient = new DtoClient($_POST['nomClient'],$_POST['numeroRue'],$_POST['rue'],$_POST['codePostal'],$_POST['clientMail'],$_POST['clientTel'],$_POST['numSiret']);
                    
                    $daoClient = new DaoClient("localhost","junior","root","");
                    $_SESSION['dtoClient'] = $dtoClient;
                    $daoClient->insertClient($dtoClient);
                }                
            }
        }
    }

    
    #gere les collaborateur de la convention
    if(isset($_POST['collaborateur1']) && $_POST['collaborateur1']!=""){
        //cherche l'etudiant dans la bdd et crée la dto associé arraylist
        $cpt=2;
        while(!empty($_POST['collaborateur'.$cpt] && $_POST['collaborateur'.$cpt]!="")){
            //cherche l'etudiant dans la bdd et crée la dto associé
        }
    }

    #gere les taches de la convention
    if(isset($_POST['intituleTache1']) && $_POST['intituleTache1']!=""){
        if(isset($_POST['quantite1']) && $_POST['quantite1']!=""){
            if(isset($_POST['prixHT1']) && $_POST['prixHT1']!=""){
                //crée une DTO tache
                $cpt=2;
                while(!empty($_POST['intituleTache'.$cpt] && $_POST['intituleTache'.$cpt]!="")){
                    if(!empty($_POST['quantite'.$cpt] && $_POST['quantite'.$cpt]!="")){
                        if(!empty($_POST['prixHT'.$cpt] && $_POST['prixHT'.$cpt]!="")){
                            //crée des DTO tache
                        }
                    }
                }              
            }
        }
    }

  
    if(isset($_POST['accompte']) && $_POST['accompte']!=""){
        //avec accompte
        
        if(isset($_POST['dateDebut'])){
            $arrayDateDebut = date_parse($_POST['dateDebut']);
            if(checkdate($arrayDateDebut['month'],$arrayDateDebut['day'],$arrayDateDebut['year'])){
                if(isset($_POST['dateFin'])){
                    $arrayDateFin = date_parse($_POST['dateFin']);
                    if(checkdate($arrayDateFin['month'],$arrayDateFin['day'],$arrayDateFin['year'])){
                        var_dump($_POST['dateFin']);
                    }
                }
            }
        }
    }else{
        //pas d'accompte
        if(isset($_POST['dateDebut'])){
            $arrayDateDebut = date_parse($_POST['dateDebut']);
            if(checkdate($arrayDateDebut['month'],$arrayDateDebut['day'],$arrayDateDebut['year'])){
                if(isset($_POST['dateFin'])){
                    $arrayDateFin = date_parse($_POST['dateFin']);
                    if(checkdate($arrayDateFin['month'],$arrayDateFin['day'],$arrayDateFin['year'])){
                        var_dump($_POST['dateFin']);
                    }
                }
            }
        }            
    }
    
    

    

    include("../View/layout.php");

    