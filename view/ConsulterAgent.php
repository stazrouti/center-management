<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulter Agent</title>
    
</head>
<body>
     <h3>Consulter Agent</h3>
    <a href="index.php?Agent=<?='1'?>"><div style="text-align: right;margin-right: 20px;margin-bottom: 20px;">Retour</div></a>
    <form method="POST">
        <?php $tab=$result->fetch() ?>
        
            <div style="display: block; margin-right: -150px;float: right;">
                <a href="index.php?Enfant=1&Matricule=<?php echo $tab['Matricule']; ?>">Consulter les Enfants</a>
            </div>
            <br><br>
            <div style="display: block;margin-right: -150px;float: right;">
                <a href="index.php?ModifierAgent=1&Matricule=<?php echo $tab['Matricule']; ?>">Modifier des Informations</a>
            </div>
        

        <br><br>



    <label>Matricule</label>
        <input type="text" name="Matricule" id="" placeholder="Matricule" value="<?php echo $tab["Matricule"]; ?>" disabled>
    <label>CIN</label>
        <input type="text" name="CIN" id="" placeholder="CIN" value="<?php echo $tab["CIN"]; ?>" disabled><br>
    <label>Date de Naissance</label>
        <input type="date" name="DNS" id="" placeholder="Dns" value="<?php echo $tab["Date_Naissance"]; ?>" disabled><br>

    <label>Nom</label>
        <input type="text" name="Nom" id="" placeholder="Nom" value="<?php echo $tab["Nom"]; ?>" disabled>
    <label>Prenom</label>
        <input type="text" name="Prenom" id="" placeholder="Prenom" value="<?php echo $tab["Prenom"]; ?>" disabled><br>
    <label>Echelle</label>
        <input type="text" name="Echelle" id="" placeholder="Echelle" value="<?php echo $tab["Echelle"]; ?>" disabled>
    <label>Echelon</label>
        <input type="text" name="Echelon" id="" placeholder="Echelon" value="<?php echo $tab["Echelon"]; ?>" disabled><br>
    <label>College</label>
        <input type="text" name="College" id="" value="<?php echo $tab["College"]; ?>" disabled>
        

    <label>Sexe</label>
        <input type="text" name="Sexe" id="" value="<?php echo $tab["Sexe"]; ?>" disabled>
            
        <br>

    <label>Affiliation</label>
        <input type="text" name="Affiliation" id="" placeholder="Affiliation" value="<?php echo $tab["Affiliation"]; ?>" disabled>
    <label>Immatriculation</label>
        <input type="text" name="Immatriculation" id="" placeholder="Immatriculation" value="<?php echo $tab["Immatriculation"]; ?>" disabled>
        <br>
    <label>Situation Familiale</label>
    <input type="text" name="SituationFamiliale" id="" value="<?php echo $tab["Situation_Familiale"]; ?>" disabled>
        
    <label>Filiere</label>
        <input type="text" name="Filiere" id="" placeholder="Filiere" value="<?php echo $tab["Filiere"]; ?>" disabled><br>
    <label>Telephone</label>
        <input type="text" name="Tele" id="" placeholder="Telephone" value="<?php echo '0'.$tab["Tele"]; ?>" disabled>
    <label>Email</label>
        <input type="email" name="Email" id="" placeholder="Email" value="<?php echo $tab["Email"]; ?>" disabled>
<br>






        

</body>
</html>