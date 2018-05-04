<?php
    /* Authors :    Tayfun Ozturk
                    Julien Frillici
                    Bilge Ekinci
                    05-2018 / AppliSynth - Junior Entreprise
    Classe DAO Compte*/

require_once('../Model/DtoCompte.php');

class DaoCompte{
    
    #attributs
    private $bdd;
    private $hote;
    private $UserName;
    private $Password;
    
    #constructeur
    public function __construct($bdd, $hote, $UserName, $Password){
        try{
            $this->hote=$hote;
            $this->UserName=$UserName;
            $this->Password=$Password;
            $this->bdd = new PDO('mysql:host='.$hote.';dbname=$bdd;charset=utf8', $UserName, $Password);
        }catch (Eception $e){
            die('Erreur :' . $e->getMessage());
        }
    }
    
    #connect l'utilisateur à la session
        public function connectUser($dtoUser){
    }
}