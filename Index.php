<?php

// Exercice 1 : 

$bdd = "mysql:host=$host;dbname=$dbname;charset=$charset";

// Options pour PDO
$options = [
     // Gestion des erreurs avec exceptions
    // Mode de récupération par défaut: tableau associatif
    // Désactiver l'émulation des requêtes préparées
];

try {
    // Création de l'instance PDO
    $pdo = new PDO($bdd, $username, $password, $options);
    
    // À ce stade, la connexion est établie
    echo "Connexion à la base de données réussie !<br><br>";
} catch (Exception $e) {
    die('Erreur :' . $e->getMessage());
}

echo "Nouvel utilisateur inséré avec l'ID: " . $pdo->lastInsertId() . "<br>";


// Exercice 2 : 
echo "Utilisateurs de plus de 30 ans:<br>";
// Utiliser la boucle foreach





// Exercice 3 : 
$sql = "UPDATE utilisateurs SET age = ? WHERE id = ?";
    
echo "Nombre d'utilisateurs mis à jour: " . $stmt->rowCount() . "<br>";


// Exercice 4 : 
echo "Nombre d'utilisateurs supprimés: " . $stmt->rowCount() . "<br>";
    
// En cas d'erreur, affichage du message
echo "Erreur de connexion à la base de données: " . $e->getMessage() . "<br>";