<?php
session_start();
require('../config.php'); // Assurez-vous d'avoir un fichier de configuration pour la connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashage du mot de passe

    // Insérez les données dans la table 'users'
    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    mysqli_query($conn, $query);

    // Redirigez l'utilisateur vers la page de connexion
    header('Location: login.php');
    exit;
}
?>
