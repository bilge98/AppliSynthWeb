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
    public function newCompte($DtoCompte){
        
        $requete = 'INSERT INTO compte(UserName, Password, Admin) values(:t_username,:t_password, :t_admin);';
        $req = $this->bdd->prepare($requete);
        $req->execute( array(
            't_username' => $DtoCompte->getUserName(),
            't_password' => $DtoCompte->getPassword(),
            't_admin' => $DtoCompte->getAdmin()
        ));
        
        
        $DtoCompte->setIdCompte($donnes['idCompte']);
        
        close($donnes);
        
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