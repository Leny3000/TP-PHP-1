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
        return "Marque : $this->marque, Modèle : $this->modele, Année : $this->annee";
    }
    
    public function demarrer() {
        return "Le véhicule démarre.";
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
    
    // Surcharge de la méthode getInfos()
    public function getInfos() {
        return parent::getInfos() . ", Portes : $this->nombrePortes, Carburant : $this->typeCarburant";
    }
    
    // Méthode spécifique
    public function klaxonner() {
        return "Bip bip !";
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
        return parent::getInfos() . ", Cylindrée : $this->cylindre cc";
    }
}

// Utilisation des classes
$voiture = new Voiture("Renault", "Clio", 2020, 5, "Essence");
echo $voiture->getInfos() . "<br>";
echo $voiture->klaxonner() . "<br>";

$moto = new Moto("Yamaha", "MT-07", 2022, 689);
echo $moto->getInfos();