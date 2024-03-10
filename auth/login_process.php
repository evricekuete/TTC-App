<?php
session_start();
require('../config.php'); // Assurez-vous d'avoir un fichier de configuration pour la connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérifiez les informations d'identification dans la table 'users'
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: ../dashboard.php'); // Redirigez vers la page d'accueil après connexion
        exit;
    } else {
        echo "Identifiants incorrects. Veuillez réessayer.";
    }
}
?>
