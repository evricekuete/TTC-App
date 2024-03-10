<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard-style.css">

    <!-- Inclure vos fichiers CSS ici -->
    <link rel="stylesheet" href="https://cdn.example.com/css/dashboard-style.css">
    <!-- Remplacez l'URL ci-dessus par le chemin réel vers votre fichier CSS -->

    <!-- Inclure les icônes -->
    <link rel="stylesheet" href="https://cdn.example.com/css/icon-set-name.css">
    <!-- Remplacez l'URL ci-dessus par le chemin réel vers votre fichier d'icônes -->

</head>
<body>
    
    <h1>Liste des utilisateurs</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom d'utilisateur</th>
                <th>Adresse e-mail</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Inclure votre fichier de connexion à la base de données ici
            require_once 'config.php';

            // Récupérer les utilisateurs depuis la table users
            $query = "SELECT * FROM users";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>";
                echo "<a href='auth/edit_user.php?id=" . $row['id'] . "'><img src='edit_icon.png' alt='Modifier'></a>";
                echo "<a href='auth/delete_user.php?id=" . $row['id'] . "'><img src='delete_icon.png' alt='Supprimer'></a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Assurez-vous que les fichiers edit_icon.png et delete_icon.png sont dans le bon dossier -->
    <!-- Appliquez des styles CSS à votre tableau pour le rendre plus attrayant -->
</body>
</html>

