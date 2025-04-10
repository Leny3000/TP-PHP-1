<?php

$bdd = "mysql:host=$host;dbname=$dbname;charset=$charset";

// Options pour PDO
$options = [
     // Gestion des erreurs avec exceptions
    // Mode de récupération par défaut: tableau associatif
    // Désactiver l'émulation des requêtes préparées
];

    $host= $_POST['Localhost'];
    $dbname = $_POST['Solo Leveling'];
    $charset = $_POST['utf8'];
    $username = $_POST['Nom'];
    $password = $_POST['Mot de passe'];
    $age = $_POST['Âge'];

try {
    // Création de l'instance PDO
    $pdo = new PDO($bdd, $username, $password, $options);
    
    // À ce stade, la connexion est établie
    echo "Connexion à la base de données réussie !<br><br>";
} catch (Exception $e) {
    die('Erreur :' . $e->getMessage());
}

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Exercice 1 : Insertion de données
  
  $sql = "INSERT INTO users (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


echo "Nouvel utilisateur inséré avec l'ID: " . $pdo->lastInsertId() . "<br>";


// Exercice 2 : Sélection de données

$sql = "SELECT id, firstname, lastname FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

echo "Utilisateurs de plus de 30 ans:<br>";
// Utiliser la boucle foreach





// Exercice 3 : Mise à jour de données
$sql = "UPDATE users SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
    
echo "Nombre d'utilisateurs mis à jour: " . $stmt->rowCount() . "<br>";


// Exercice 4 : Suppression de données

$sql = "DELETE FROM MyGuests WHERE id=3";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

echo "Nombre d'utilisateurs supprimés: " . $stmt->rowCount() . "<br>";
    
// En cas d'erreur, affichage du message
echo "Erreur de connexion à la base de données: " . $e->getMessage() . "<br>";