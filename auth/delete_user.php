<!-- delete_user.php -->
<?php
// Inclure votre fichier de connexion à la base de données ici
require_once '../config.php';

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Supprimer l'utilisateur de la base de données
    $deleteQuery = "DELETE FROM users WHERE id = $userId";
    mysqli_query($conn, $deleteQuery);

    // Rediriger vers la page d'accueil ou afficher un message de succès
    // ...
}
?>
