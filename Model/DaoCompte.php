<?php
    /* Authors :    Tayfun Ozturk
                    Julien Frillici
                    Bilge Ekinci
                    05-2018 / AppliSynth - Junior Entreprise
    Classe DAO Compte*/


class DaoCompte{
    
    #attributs
    private $bdd;
    private $hote;
    private $UserName;
    private $Password;
    
    #constructeur
    public function __construct($hote, $base, $UserName, $Password){
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
    public function connectUser($dtoCompte){
        $_SESSION['DtoCompte'] = $dtoCompte; 
    }
    
    #ajoute un utilisateur à la table Compte
    public function newCompte($dtocompte){
        try{
        
        $requete = 'INSERT INTO compte(UserName,Password, Admin) VALUES(:t_username,:t_password, :t_admin);';
        $stmt = $this->bdd->prepare($requete);
            
        if (!$stmt) print_r($this->bdd->errorInfo());
        
        $res = $stmt->execute( array(
            't_username' => $dtocompte->getUserName(),
            't_password' => $dtocompte->getPassword(),
            't_admin' => $dtocompte->getAdmin()
       ));
            
        if (!$res) print_r($stmt->errorInfo());
            
        }catch (Exception $e){
            die('Erreur :' . $e->getMessage());
        }
    } 
    
    
    public function verifieCompte($UserName, $Password){
        try{
        $requete = 'SELECT * FROM compte WHERE UserName=?;';
        $requete = $this->bdd->prepare($requete);
        $requete->execute(array($UserName));
        
        $donnes = $requete->fetch();
        
        if(password_verify($Password,$donnes['Password'])){
            $DtoCompte = new DtoCompte($donnes['UserName'],$donnes['Password'],$donnes['Admin']);
            return $DtoCompte;
        
        } }catch (Exception $e){
            die('Erreur :' . $e->getMessage());
        }                
    }
    
}