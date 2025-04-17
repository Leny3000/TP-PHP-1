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
        echo 'Voici le constructeur ! </br>';
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

   public function setNom($nom) {
      $this->nom = $nom;
   }

   public function setPrenom($prenom) {
      $this->prenom = $prenom;
   }

   public function setAge($age) {
      $this->age = $age;
   }
   
    // Méthodes
    public function sePresenter() {
      echo "Je m'appelle " . $this->prenom . " " . $this->nom . " et j'ai " . $this->age . " ans.</br>";
    }
    
    public function estMajeur() {
      if ($this->age >= 18) {
         echo "Je suis majeur. </br>";
      }
      else {
         echo "Je suis mineur. </br>";
      }
    }
}
// Utilisation de la classe
$Lény = new Personne("Guillard", "Lény", 19);
$Lény->sePresenter();
$Lény->estMajeur();

// Modification des propriétés
$Lény->setAge(16);
$Lény->setNom("Archer");
$Lény->setPrenom("Gaël");
$Lény->sePresenter();
$Lény->estMajeur();