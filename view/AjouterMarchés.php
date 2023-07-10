<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./public/css/formstyle.css">
    <title>Ajouter Marchés</title>
</head>
<body>
            <h3>Ajouter Marchés</h3>
            <a href="index.php?Marches=1"><div style="text-align: right;margin-right: 20px;margin-bottom: 20px;">Retour</div></a>
            <form method="POST">
                <label>Numero de Marchés</label>
                    <input type="text" name="N_Marches" id="" placeholder="Numero Marchés">
                <label>Intitulé</label>
                    <input type="text" name="Intitule" id="" placeholder="Intitulé"><br>
                <label>Genre :</label>
                    <input type="radio" name="Genre" id="" value="Eau Potable">  Eau Potable
                    <input type="radio" name="Genre" id="" value="Assainissement">  Assainissement
                    <br>
                <label>Type :</label>
                    <input type="radio" name="Type" id="" value="Simple">   Simple
                    <input type="radio" name="Type" id="" value="Cadre">    Cadre
                    <br>
                <label>Date OS</label>
                    <input type="date" name="DateOs" id="">
                <label>Date reception</label>
                    <input type="date" name="DateReception" id="">
                    <br>
                <input type="submit" value="Ajouter" name="AjouterMarches">
            </form>

</body>
</html>