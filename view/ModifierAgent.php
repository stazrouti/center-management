<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulter Agent</title>
    <link rel="stylesheet" href="./public/css/formstyle.css">
</head>
<body>
    <h3>Modifier des informations</h3>
    <a href="index.php?ConsulterAgent=<?php echo $_GET['Matricule']; ?>"><div style="text-align: right;margin-right: 20px;margin-bottom: 20px;">Retour</div></a>
    <form method="POST">
        <?php $tab=$result->fetch() ?>
    <a href="index.php?Enfant=1&Matricule=<?php echo $tab['Matricule']; ?>"><div style="text-align: right;margin-right: -130px;margin-bottom: 20px;">Consulter les Enfant</div></a>
    
    
    
        <label>Matricule</label>
            <input type="text" name="Matricule" id="" placeholder="Matricule" value="<?php echo $tab["Matricule"]; ?>" disabled>
            <input type="hidden" name="Matricule" id="" placeholder="Matricule" value="<?php echo $tab["Matricule"]; ?>" >
        <label>CIN</label>
            <input type="text" name="CIN" id="" placeholder="CIN" value="<?php echo $tab["CIN"]; ?>" ><br>
        <label>Date de Naissance</label> 
        <input type="date" name="DNS" id="" placeholder="Dns" value="<?php echo $tab["Date_Naissance"]; ?>" ><br>

        <label>Nom</label>
            <input type="text" name="Nom" id="" placeholder="Nom" value="<?php echo $tab["Nom"]; ?>" >
        <label>Prenom</label>
            <input type="text" name="Prenom" id="" placeholder="Prenom" value="<?php echo $tab["Prenom"]; ?>" ><br>
        <label>Echelle</label>
            <input type="text" name="Echelle" id="" placeholder="Echelle" value="<?php echo $tab["Echelle"]; ?>">
        <label>Echelon</label>
            <input type="text" name="Echelon" id="" placeholder="Echelon" value="<?php echo $tab["Echelon"]; ?>"><br>
        <label>College</label>
            <select name="College" id="">
                <option value="E" <?php if ($tab["College"] == "E") echo "selected"; ?>>E</option>
                <option value="M" <?php if ($tab["College"] == "M") echo "selected"; ?>>M</option>
                <option value="C" <?php if ($tab["College"] == "C") echo "selected"; ?>>C</option>
            </select>

            
            <label>Sexe</label>
                <input type="radio" name="Sexe" id="" value="Homme" <?php if ($tab["Sexe"] == "Homme") echo "checked"; ?> >Homme
                <input type="radio" name="Sexe" id="" value="Femme" <?php if ($tab["Sexe"] == "Femme") echo "checked"; ?> >Femme
            <br>

        <label>Affiliation</label>
            <input type="text" name="Affiliation" id="" placeholder="Affiliation" value="<?php echo $tab["Affiliation"]; ?>">
        <label>Immatriculation</label>
            <input type="text" name="Immatriculation" id="" placeholder="Immatriculation" value="<?php echo $tab["Immatriculation"]; ?>">
        <br>
        <label>Situation Familiale</label>
        <select name="SituationFamiliale" id="" placeholder="">
            <option value="Celebataire" <?php if ($tab["Situation_Familiale"] == "Celebataire") echo "selected"; ?>>Celebataire</option>
            <option value="Marier" <?php if ($tab["Situation_Familiale"] == "Marier") echo "selected"; ?>>Marier</option>
        </select>
        <label>Filiere</label>
            <input type="text" name="Filiere" id="" placeholder="Filiere" value="<?php echo $tab["Filiere"]; ?>"><br>
        <label>Telephone</label>
            <input type="text" name="Tele" id="" placeholder="Telephone" value="<?php echo '0'.$tab["Tele"]; ?>">
        <label>Email</label>
            <input type="email" name="Email" id="" placeholder="Email" value="<?php echo $tab["Email"]; ?>">
            <br>
            <input type="submit" name="ModifierAgent" value="Modifier">
    </form>

</body>
</html>