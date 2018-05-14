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
    public function __construct($base, $hote, $UserName, $Password){
        try{
            $this->hote=$hote;
            $this->UserName=$UserName;
            $this->Password=$Password;
            $this->bdd = new PDO('mysql:host='.$hote.';dbname='.$base.';charset=utf8', $UserName, $Password);
        }catch (Exception $e){
            die('Erreur :' . $e->getMessage());
        }
    }
    
    #connect l'utilisateur à la session
    public function connectUser($dtoUser){
        $_SESSION['username'] = $dtoCompte->getUserName(); 
    }
    
    #ajoute un utilisateur à la table Compte
    public function newCompte($compte){
        
        $requete = 'INSERT INTO compte(UserName, Password, Admin) values(:t_username,:t_password, :t_admin);';
        $req = $this->bdd->prepare($requete);
        $req->execute( array(
            't_username' => $compte->getUserName(),
            't_password' => $compte->getPassword(),
            't_admin' => $compte->getAdmin()
        ));
        
        $requete = 'SELECT * FROM compte WHERE UserName=? ;';
        $requete = $this->bdd->prepare($requete);
        $requete->execute(array($DtoCompte->getIdCompte()));
        
        $donnes = $requete->fetch();
        
        $DtoCompte->setIdCompte($donnes['idCompte']);
        
        return true;
    } 
    
    
    public function verifieCompte($UserName, $Password){
        $requete = 'SELECT * FROM compte WHERE UserName=?;';
        $requete = $this->bdd->prepare($requete);
        $requete->execute(array($UserName));
        
        $donnes = $requete->fetch();
        
        if(password_verify($Password,$donnes['Password'])){
            $DtoCompte = new DtoCompte($donnes['UserName'],$donnes['Password'],$donnes['Admin']);
            return $DtoCompte;
        }                
    }
    
}