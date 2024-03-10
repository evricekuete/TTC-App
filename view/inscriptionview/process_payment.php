<?php
session_start();
require('../../config.php'); // Assurez-vous d'avoir un fichier de configuration pour la connexion à la base de données

    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $cni = $_POST['cni'];
    $niveau = $_POST['niveau'];
    $specialite = $_POST['specialite'];
    $telephone = $_POST['telephone'];
    $mode_paiement = $_POST['mode_paiement'];

    // Ici, vous devrez implémenter la logique pour effectuer le paiement
    // Utilisez les valeurs des variables ci-dessus pour personnaliser votre traitement

    // Exemple de réponse (simulée)
    $transaction_id = uniqid(); // Génération d'un ID de transaction


    // Insérez les données dans la table 'users'
    $query = "INSERT INTO inscription (nom, cni, niveau, specialite, telephone,  mode_paiement, transaction_id) 
    VALUES ('$nom', ' $cni', ' $niveau', ' $specialite', '$telephone ', ' $mode_paiement', '$transaction_id')";
    mysqli_query($conn, $query);

    // Redirigez l'utilisateur vers la page de connexion
    header('Location: alertpaiementOK.php');
    exit;

?>




