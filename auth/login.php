<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/custum-style.css"> <!-- Assurez-vous d'avoir un fichier CSS pour le style -->
</head>
<body>
    
    <form action="login_process.php" method="post">
        <h1>Connexion</h1><br>
        <input type="text" name="username" placeholder="Nom d'utilisateur" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <label><input type="checkbox" name="remember"> Se souvenir de moi</label>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
