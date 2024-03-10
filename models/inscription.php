<?php  

session_start();
require('../config.php'); // Assurez-vous d'avoir un fichier de configuration pour la connexion à la base de données
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $cni = $_POST['cni'];
    $niveau = $_POST['niveau'];
    $specialite = $_POST['specialite'];
    $telephone = $_POST['telephone'];
    $mode_paiement = $_POST['mode_paiement'];


    // Insérez les données dans la table 'users'
    $query = "INSERT INTO inscription (nom, cni, niveau, specialite, telephone,  mode_paiement) 
             VALUES ('$nom', ' $cni', ' $niveau', ' $specialite', '$telephone ', ' $mode_paiement')";
    mysqli_query($conn, $query);

    // Redirigez l'utilisateur vers la page de connexion
    header('Location: login.php');
    exit;
}
?>