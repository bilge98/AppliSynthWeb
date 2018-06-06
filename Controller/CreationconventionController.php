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

  

    

    

    include("../View/layout.php");

    