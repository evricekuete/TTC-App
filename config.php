<?php
// Configuration pour la connexion à la base de données
$host = "localhost"; // Adresse du serveur MySQL
$username = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL
$database = "inscription_en_lignedb"; // Nom de la base de données

// Connexion à la base de données
$conn = mysqli_connect($host, $username, $password, $database);

// Vérification de la connexion
if (!$conn) {
    die("Erreur : Impossible de se connecter à la base de données. " . mysqli_connect_error());
}
?>
