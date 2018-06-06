<?php
    /* Authors :    Tayfun Ozturk
                    Julien Frillici
                    Bilge Ekinci
                    05-2018 / AppliSynth - Junior Entreprise
    Classe DTO Affectation*/

class DtoAffectation{
    
    #attributs
    private $NumAffectation;
    private $IdClient;
    private $NumConvention;
    
    public function construct($NumAffectation, $IdClient, $NumConvention){
        $this->NumAffectation = $NumAffectation;
        $this->IdClient = $IdClient;
        $this->NumConvention = $NumConvention;
    }
    
    #getters
    public function getNumAffectation(){return $this->NumAffectation;}
    public function getIdClient(){return $this->IdClient;}
    public function getNumConvention(){return $this->NumConvention;}
    
    #setters
    public function setNumAffectation($NumAffectation){$this->NumAffectaion = $NumAffectation;}  
}