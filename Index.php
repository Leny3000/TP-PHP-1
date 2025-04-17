<?php
// Classe parente
class Vehicule {
    protected $marque;
    protected $modele;
    protected $annee;
    
    public function __construct($marque, $modele, $annee) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
    }
    
    public function getInfos() {
        echo "Marque : $this->marque, Modèle : $this->modele, Année : $this->annee";
    }
    
    public function demarrer() {
        echo "Le véhicule démarre.";
    }
}

// Classe enfant qui hérite de Vehicule
class Voiture extends Vehicule {
    private $nombrePortes;
    private $typeCarburant;
    
    public function __construct($marque, $modele, $annee, $nombrePortes, $typeCarburant) {
        // Appel du constructeur parent
        parent::__construct($marque, $modele, $annee);
        
        // Initialisation des propriétés spécifiques
        $this->nombrePortes = $nombrePortes;
        $this->typeCarburant = $typeCarburant;
    }
    
    public function getInfos() {
        echo parent::getInfos() . ", Portes : $this->nombrePortes, Carburant : $this->typeCarburant </br>";
    }
    
    // Méthode spécifique
    public function klaxonner() {
        echo "Bip bip ! </br>";
    }
}

// Classe enfant qui hérite de Vehicule
class Moto extends Vehicule {
    private $cylindre;

    public function __construct($marque, $modele, $annee, $cylindre) {
        parent::__construct($marque, $modele, $annee);
        $this->cylindre = $cylindre;
    }

    public function getCylindre() {
        return $this->cylindre;
    }

    public function setCylindre($cylindre) {
        $this->cylindre = $cylindre;
    }

    public function getInfos() {
        echo parent::getInfos() . ", Cylindrée : $this->cylindre cc";
    }
}

// Utilisation des classes
$voiture = new Voiture("Renault", "Clio", 2020, 5, "Essence");
$voiture->getInfos();
$voiture->demarrer();
$voiture->klaxonner();

$moto = new Moto("Yamaha", "MT-07", 2022, 689);
$moto->getInfos();
$moto->demarrer();
$moto->klaxonner();