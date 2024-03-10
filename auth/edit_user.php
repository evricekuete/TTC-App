<!-- edit_user.php -->
<?php
// Inclure votre fichier de connexion à la base de données ici
require_once '../config.php';

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Récupérer les informations de l'utilisateur par son ID
    $query = "SELECT * FROM users WHERE id = $userId";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    // Afficher le formulaire de modification avec les données de l'utilisateur
    // ...
}

// Traitement du formulaire de modification
if (isset($_POST['update'])) {
    // Récupérer les données du formulaire
    $newUsername = $_POST['new_username'];
    $newEmail = $_POST['new_email'];

    // Mettre à jour les informations de l'utilisateur dans la base de données
    $updateQuery = "UPDATE users SET username = '$newUsername', email = '$newEmail' WHERE id = $userId";
    mysqli_query($conn, $updateQuery);

    // Rediriger vers la page d'accueil ou afficher un message de succès
    // ...
}
?>
<!-- Afficher le formulaire de modification ici -->
