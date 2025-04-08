<?php 

// Exercice 1 :
$fruits = ["pomme", "banane", "orange", "fraise", "kiwi"];
foreach ($fruits as $fruit) {
    echo "$fruit <br>";
  }

// Exercice 2 : 
$personne = [
    "nom" => "Dupont",
    "prenom" => "Jean",
    "age" => 30,
    "ville" => "Paris"
];
foreach ($personne as $personnes => $person) {
    echo "$personnes : $person <br>";
  }

echo '<br/>';

// Exercice 3 :
$etudiants = [
    ["nom" => "Martin", "note" => 15],
    ["nom" => "Durand", "note" => 12],
    ["nom" => "Petit", "note" => 18]
];

foreach ($etudiants as $etudiant) {
    echo $etudiant["nom"], $etudiant["note"], "<br>";
}
  echo '<br/>';