<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./public/css/formstyle.css">
    <title>Ajouter Enfant</title>
    
</head>
<body>
    <a href="index.php?Enfant=1&Matricule=<?php echo $_GET['Matricule']; ?>"><div style="text-align: right;margin-right: 20px;margin-bottom: 20px;">Retour</div></a>
    <h3>Ajouter Enfant</h3>
        <form method="POST">
            <label>Nom</label>
                <input type="text" name="Nom" id="" placeholder="Nom">
            <label>Prenom</label>
                <input type="text" name="Prenom" id="" placeholder="Prenom"><br>
            <label>Date de Naissance</label>
                <input type="date" name="Date_Naissance" id="" placeholder="Date_Naissance"><br>
            <label>Sexe</label>
            <input type="radio" name="Sexe" value="M">Masculin
            <input type="radio" name="Sexe" value="F">Féminin
            <br>
            <input type="submit" value="Ajouter" name="AjouterEnfants">
        </form>
            
</body>
</html>