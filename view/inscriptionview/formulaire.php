<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Système d'inscription | istec</title>
    <link rel="stylesheet" href="../../css/form-style.css">
    <style>
        body {
                font-family: Arial, sans-serif;
                background-color: #000281;
                margin: 0;
                padding: 0;
           
            }
            h1{
                color: white;
            }
    </style>
</head>
<body>
    <h1>Formulaire d'inscription</h1>
    <form action="process_payment.php" method="post" >
        <label for="nom">Nom de l'étudiant :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="cni">Numéro CNI ou KIT :</label>
        <input type="text" id="cni" name="cni" required>

        <label for="niveau">Niveau :</label>
        <select id="niveau" name="niveau">
            <option value="1">Niveau 1</option>
            <option value="2">Niveau 2</option>
            <option value="3">Niveau 3</option>
            <option value="4">Niveau 4</option>
            <option value="5">Niveau 5</option>
        </select>

        <label for="specialite">Spécialité :</label>
        <input type="text" id="specialite" name="specialite" required>

        <label for="telephone">Téléphone :</label>
        <input type="tel" id="telephone" name="telephone" required>

        <label for="mode_paiement">Mode de Paiement :</label>
        <select id="mode_paiement" name="mode_paiement">
            <option value="mtn_momo">MTN MoMo</option>
            <option value="om">Orange Money</option>
        </select>

        <input type="submit" value="Payer">
    </form>
</body>
</html>
