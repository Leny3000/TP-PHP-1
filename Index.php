<?php

$host = "localhost";
$dbname = "TP1";
$username = "root";
$password = "";
$charset = "utf8mb4";

$dsn = "mysql:host= $host;dbname= $dbname;charset= $charset ";

$options = [
   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Gestion des erreurs avec exceptions
   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Mode de récupération par défaut: tableau associatif
   PDO::ATTR_EMULATE_PREPARES => false // Désactiver l'émulation des requêtes préparées
];

try {
   $pdo = new PDO ($dsn, $username, $password, $options);
} catch ( PDOException $e ) {
   echo "Erreur de connexion à la base de données : " . $e->getMessage();
}

echo "Connexion à la base de données réussie ! </br></br>";

// Exercice 1 : 
// Réinsertion de l'âge dans l'insertion
$sql = "INSERT INTO users (nom, age) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute(["Lény", 19]);

echo "Nouvel utilisateur inséré avec l'ID : " . $pdo->lastInsertId() . "</br></br>";

// Exercice 2 : 
echo "Utilisateurs de plus de 30 ans :</br>";

$sql = "SELECT * FROM utilisateurs WHERE âge > 30";
$stmt = $pdo->query($sql);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

   foreach ( $users as $user ) {
       echo "Nom : " . $user ['nom'] . " | Âge : " . $user ['âge'] . "</br>";
}
echo "</br>";

// Exercice 3 : 
// Mise à jour de l'âge de l'utilisateur
$sql = "UPDATE utilisateurs SET age = ? WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([20, 1]);

echo "Nombre d'utilisateurs mis à jour : " . $stmt->rowCount() . "</br></br>";

// Exercice 4 : 
$sql = "DELETE FROM utilisateurs WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->executer([1]);

echo "Nombre d'utilisateurs supprimés : " . $stmt->rowCount() . "</br></br>";

$sql->close();

$pdo = null;