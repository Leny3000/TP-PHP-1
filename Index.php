<?php
// Classe parente
class Vehicule {
    protected $marque;
    protected $modele;
    protected $annee;
    
    public function __construct($marque, $modele, $annee) {
      $this -> marque;
      $this -> modele;
      $this -> annee;
    }
    
    public function getInfos() {
        
    }
    
    public function demarrer() {
        return "Le véhicule démarre.";
    }
}

// Classe enfant qui hérite de Vehicule
class Voiture extends Vehicule {
    private $nombrePortes;
    private $typeCarburant;
    
    public function __construct($nombrePortes, $typeCarburant) {
        // Appel du constructeur parent
        parent::__construct($marque, $modele, $annee);
        
        
        // Initialisation des propriétés spécifiques
        
    }
    
    // Surcharge de la méthode getInfos()
    public function getInfos() {
        
    }
    
    // Méthode spécifique
    public function klaxonner() {
        
    }
}

// Classe enfant qui hérite de Vehicule
class Moto extends Vehicule {
    private $cylindre;
    
// Faire les méthodes

public function getCylindre() {

}

public function setCylindre() {
   
}

}

// Utilisation des classes
$voiture = new Voiture("Renault", "Clio", 2020, 5, "Essence");