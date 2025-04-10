<?php

$host = "localhost" ;
$dbname = "Solo Leveling" ;
$username = "root" ;
$password = "" ;
$charset = "utf8mb4" ;

$dsn = "mysql:host= $host ;dbname= $dbname ;charset= $charset " ;

$options = [
   PDO ::ATTR_ERRMODE => PDO ::ERRMODE_EXCEPTION,
   PDO ::ATTR_DEFAULT_FETCH_MODE => PDO ::FETCH_ASSOC,
   PDO ::ATTR_EMULATE_PREPARES => false
];

try {
   $pdo = new PDO ( $dsn , $username , $password , $options );
   echo "Connexion à la base de données réussie ! </br></br>" ;

   print ( "EXERCICE 1</br></br>" );
   // Réinsertion de l'âge dans l'insertion
   $sql = " INSERT INTO users (nom, age) VALUES (?, ?) " ;
   $stmt = $pdo -> préparer ( $sql );
   $stmt -> execute ([ "Dupré" , 35 ]);

   echo "Nouvel utilisateur inséré avec l'ID : " . $pdo -> lastInsertId () . "</br></br>" ;

   print ( "EXERCICE 2</br></br>" );
   echo "Utilisateurs de plus de 30 ans :</br>" ;

   $sql = " SÉLECTIONNER * DE utilisateurs OÙ âge > 30 " ;
   $stmt = $pdo -> requête ( $sql );
   $utilisateurs = $stmt -> fetchAll ();

   foreach ( $users as $user ) {
       echo "Nom : " . $user [ 'nom' ] . " | Âge : " . $user [ 'âge' ] . "</br>" ;
}

   echo "</br>" ;

   print ( "EXERCICE 3</br></br>" );
   // Mise à jour de l'âge de l'utilisateur
   $sql = " UPDATE utilisateurs SET age = ? WHERE id = ? " ;
   $stmt = $pdo -> préparer ( $sql );
   $stmt -> exécuter ([ 40 , 1 ]);

   echo "Nombre d'utilisateurs mis à jour : " . $stmt -> rowCount () . "</br></br>" ;

   print ( "EXERCICE 4</br></br>" );
   $sql = " SUPPRIMER FROM utilisateurs OÙ id = ? " ;
   $stmt = $pdo -> préparer ( $sql );
   $stmt -> exécuter ([ 1 ]);

   echo "Nombre d'utilisateurs supprimés : " . $stmt -> rowCount () . "</br></br>" ;

} catch ( PDOException $e ) {
   echo "Erreur de connexion à la base de données : " . $e -> getMessage ();
}