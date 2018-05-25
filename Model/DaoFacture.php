<?php
    /* Authors :    Tayfun Ozturk
                    Julien Frillici
                    Bilge Ekinci
                    05-2018 / AppliSynth - Junior Entreprise
    Classe DAO Convention*/


class Facture{
    
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
    public function insertTabFacture($DtoFacture){
        //Requête d'insertion
        $requete1 = 'INSERT INTO facture(DateFacture, MontantHT, MontantTTC,
                             Payee) values(:t_NumFacture,:t_DateFacture,:t_MontantHT, :t_MontantTTC, :t_Payee);';
        
        $req1 = $this->bdd->prepare($requete1);
        $req1->execute( array(
            't_DateFacture' => $DtoFacture->getDateFacture(),
            't_MontantHT' => $DtoFacture->getMontantHT(),
            't_MontantTTC' => $DtoFacture->getMontantTTC(),
            't_Payee' => $DtoFacture->getPayee())),
          
        
        //Requête pour récupérer le numéro de la Facture
        $requete2 = 'SELECT * FROM facture WHERE DateFacture=? and MontantHT=? and MontantTTC=? and Payee=?;';
        
        $req2 = $this->bdd->prepare($requete2);
        $req2->execute(array($DtoFacture->getDateFacture(), $DtoFacture->getMontantHT(), $DtoFacture->getMontantTTC(), $DtoFacture->getPayee()));
         
        $data=$req2->fetch();
                       
        $DtoFacture->setNumFacture($data['NumFacture']);
        $req2->closecursor();
    }
    
    public function afficherFacture(){
        $requete = 'SELECT * FROM facture;';
        $requete->execute(array(
            't_NumFacture' => $DtoFacture->getNumFacture(),
            't_DateFacture' => $DtoFacture->getDateFacture(),
            't_MontantHT' => $DtoFacture->getMontantHT(),
            't_MontantTTC' => $DtoFacture->getMontantTTC(),
            't_Payee' => $DtoFacture->getPayee()));
        

        //Affiche les données de la requête dans une table HTML  
        while($donnees=$requete->fetch()) {
            echo '<table width="80%" border="1">';
                echo '<tr>';
                    echo '<td>Numéro de facture : '.$donnees['t_NumFacture'].'</td>';
                    echo '<td>\nDate d\'édition de la facture : '.$donnees['t_DateFacture'].'</td>';
                    echo '<td>\nMontant HT : '.$donnees['t_MontantHT']).'</td>';
                    echo '<td>\nMontant TTC : '.$donnees['t_MontantTTC']).'</td>';
                    echo '<td>\nFacture payée ? : '.$donnees['t_Payee']).'</td>';
                echo '</tr>';
            echo '</table>';
        }
    }
    
    
    #getter
    public function getByNumFacture($NumFacture){
        $requete = 'SELECT * FROM facture where NumFacture=?;';
        $req = $this->bdd->prepare($requete);
        $req->execute(array($NumFacture));
        
        $data = $req->fetch();
            
        $DtoFacture = new DtoFacture($data['NumFacture'],$data['DateFacture'],$data['MontantHT'],$data['MontantTTC'],$date['Payee']);
        
        $req->closeCursor();
        
        return $DtaFacture;
    }  
}