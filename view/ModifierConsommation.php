<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./public/css/formstyle.css">
    <title>Modifier Consommation</title>
</head>
<body>
            <h3>Modifier Consommation</h3>
            <a href="index.php?Consommation=1"><div class="lien">Retour</div></a>
            <form method="POST">
                <label>Année</label>
                    <input type="text" name="Annee" id="" placeholder="Année" value="<?php echo $v[0];?>">
                <label>Volume</label>
                    <input type="text" name="Volume" id="" placeholder="Volume" value="<?php echo $v[1];?>">
                    <br>
                <label>Categorie</label>
                <select name="Categorie" id="" placeholder="">
                    <?php 
                    while($tab=$cat->fetch())
                    {
                        ?>
                        <option <?php if ($tab["Categorie"] == $v[2]) echo "selected"; ?> > <?php echo $tab["Categorie"];?></option>

                    <?php }?>
                </select>
                <br>
                <input type="submit" value="Modifier" name="ModifierConsommation">
            </form>

</body>
</html>