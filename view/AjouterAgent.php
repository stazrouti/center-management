<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ajouter Agent</title>
    <link rel="stylesheet" href="./public/css/formstyle.css">
</head>
<body>
     <h3>Ajouter Agent</h3>
    <form method="POST">
        <label>Matricule</label>
            <input type="text" name="Matricule" id="" placeholder="Matricule">
        <label>CIN</label>
            <input type="text" name="CIN" id="" placeholder="CIN"><br>
        <label>Date de Naissance</label>
            <input type="date" name="DNS" id="" placeholder="Dns"><br>
        <label>Nom</label>
            <input type="text" name="Nom" id="" placeholder="Nom">
        <label>Prenom</label>
            <input type="text" name="Prenom" id="" placeholder="Prenom"><br>
        <label>Echelle</label>
            <input type="text" name="Echelle" id="" placeholder="Echelle">
        <label>Echelon</label>
            <input type="text" name="Echelon" id="" placeholder="Echelon"><br>
        <label>College</label>
            <select name="College" id="" placeholder="">
                <option>E</option>
                <option>M</option>
                <option>C</option>
            </select>
        <label>Sexe</label>
            <input type="radio" name="Sexe" id="" value="Homme">Homme
            <input type="radio" name="Sexe" id="" value="Femme">Femme
            <br>
        <label>Affiliation</label>
            <input type="text" name="Affiliation" id="" placeholder="Affiliation">
        <label>Immatriculation</label>
            <input type="text" name="Immatriculation" id="" placeholder="Immatriculation">
        <label>Situation Familiale</label>
        <select name="SituationFamiliale" id="" placeholder="">
            <option>Celebataire</option>
            <option>Marier</option>
        </select>
        <label>Filiere</label>
            <input type="text" name="Filiere" id="" placeholder="Filiere"><br>
        <label>Telephone</label>
            <input type="text" name="Telephone" id="" placeholder="Telephone">
        <label>Email</label>
            <input type="email" name="Email" id="" placeholder="Email">
            <br>
            <input type="submit" name="AjouterAgent" value="Ajouter">
    </form>

</body>
</html>