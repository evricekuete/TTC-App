<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../css/register_style.css"> <!-- Assurez-vous d'avoir un fichier CSS pour le style -->
</head>
<body>
    
    <form action="register_process.php" method="post">
        <h1>Compte utilisateur</h1><br>
        <input type="text" name="username" placeholder="Nom d'utilisateur" required>
        <input type="email" name="email" placeholder="Adresse e-mail" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <label><input type="checkbox" name="remember"> Se souvenir de moi</label>
        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>
