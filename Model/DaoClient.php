<?php
    /* Authors :    Tayfun Ozturk
                    Julien Frillici
                    Bilge Ekinci
                    05-2018 / AppliSynth - Junior Entreprise
    Classe DTO Client*/


class DaoClient{
    
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
            $this->bdd = new PDO('mysql:host='.$hote.';dbname='.base.';charset=utf8', $UserName, $Password);
        }catch (Exception $e){
            die('Erreur :' . $e->getMessage());
        }
    }
    
    //Ajoute un client à la bdd
    public function insertClient($DtoClient){
        
        $requete = 'INSERT INTO client(NomClient, NumRue, NomRue, CP, Mail, Tel, Siret) values(:t_NomClient, :t_NumRue, :t_NomRue, :t_CP, :t_Mail, :t_Tel, :t_Siret);';
        
        
        $req = $this->bdd->prepare($requete);
        $req->execute( array(
            't_NomClient' => $DtoClient->getNomClient(),
            't_NumRue' => $DtoClient->getNumRue(),
            't_NomRue' => $DtoClient->getNomRue(),
            't_CP' => $DtoClient->getCP(),
            't_Mail' => $DtoClient->getMail(),
            't_Tel' => $DtoClient->getTel(),
            't_Siret' => $DtoClient->getSiret(),
        ));
        
        
        $DtoClient->setIdClient($donnes['IdClient']);
        
        close($donnes);
        
        return true;
    } 
    
    //Getter
    public function getByIdClient($IdClient){
        $requete = 'SELECT * FROM client where IdClient=?;';
        $req = $this->bdd->prepare($requete);
        $req->execute(array($IdClient));
        
        $data = $req->fetch();
            
        $DtoClient = new DtoClient($data['IdClient'],$data['NomClient'],$data['NumRue'],$data['CP'],$date['Mail'], $data=['Tel'], $data=['Siret']);
        
        $req->closeCursor();
        
        return $DtoClient;
    }  
}