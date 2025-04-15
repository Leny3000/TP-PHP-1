<?php
// Définition d'une classe Personne
class Personne {
    // Propriétés (attributs)
    private $nom;
    private $prenom;
    private $age;
    
    // Constructeur
    public function __construct($nom, $prenom, $age)
    {
        echo 'Voici le constructeur !';
        $this -> setNom($nom);
        $this -> setPrenom($prenom);
        $this -> setAge($age);
    }
    
    // Getters (accesseurs)
    
    public function getNom() {
      return $this->nom;
    }

    public function getPrenom() {
      return $this->prenom;
    }

    public function getAge() {
      return $this->age;
    }

    // Setters (mutateurs)

   public function setNom() {
      $this->nom = $nom;
   }

   public function setPrenom() {
      $this->prenom = $prenom;
   }

   public function setAge() {
      $this->nom = $nom;
   }
   
    // Méthodes
    public function sePresenter() {
      
    }
    
    public function estMajeur() {

    }

// Utilisation de la classe


// Modification des propriétés
}

$Lény = new Personne("Guillard", "Lény", 19);