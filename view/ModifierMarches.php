<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./public/css/formstyle.css">
    <title>Modifier Marchés</title>
</head>
<body>
            <h3>Modifier Marchés</h3>
            <a href="index.php?Marches=1"><div class="lien">Retour</div></a>
            <form method="POST">
                <label>Numero de Marchés</label>
                    <input type="text" name="N_Marches" id=""  placeholder="Numero Marchés" value="<?php echo $v[0]; ?>">
                <label>Intitulé</label>
                    <input type="text" name="Intitule" id="" placeholder="Intitulé" value="<?php echo $v[1]; ?>"><br>
                <label>Genre :</label>
                    <input type="radio" name="Genre" id="" value="Eau Potable" <?php if ($v[2] == "Eau Potable") echo "checked";?> >  Eau potable
                    <input type="radio" name="Genre" id="" value="Assainissement" <?php if ($v[2] == "Assainissement") echo "checked";?>>  Assainissement
                    <br>
                <label>Type :</label>
                    <input type="radio" name="Type" id="" value="Simple" <?php if ($v[3] == "Simple") echo "checked";?>>   Simple
                    <input type="radio" name="Type" id="" value="Cadre"<?php if ($v[3] == "Cadre") echo "checked";?>>    Cadre
                    <br>
                <label>Date OS</label>
                    <input type="date" name="DateOs" id="" value="<?php echo $v[4]; ?>">
                <label>Date reception</label>
                    <input type="date" name="DateReception" id="" value="<?php echo $v[5]; ?>">
                    <br>
                <input type="submit" value="Modifier" name="ModifierMarches">
            </form>

</body>
</html>