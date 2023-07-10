<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./public/css/formstyle.css">
    <title>Ajouter Abonnés</title>
</head>
<body>

            <h3>Modifier Abonné</h3>
            <a href="index.php?Abonne=1"><div style="text-align: right;margin-right: 20px;margin-bottom: 20px;">Retour</div></a>
            <form method="POST">
                <label>Année</label>
                    <input type="text" name="Annee" id="" placeholder="Année" value="<?php echo $v[0] ?>">
                <label>Nombre</label>
                    <input type="text" name="Nombre" id="" placeholder="Nombre" value="<?php echo $v[2] ?>">
                    <br>
                <label>Categorie</label>
                <select name="Categorie" id="" placeholder="">
                    <?php 
                    while($tab=$cat->fetch())
                    {
                        ?>
                        <option <?php if ($tab["Categorie"] == $v[3]) echo "selected"; ?> > <?php echo $tab["Categorie"];?></option>

                    <?php }?>
                    
                </select>
                <br>
                <input type="submit" value="Modifier" name="ModifierAbonne">
            </form>

</body>
</html>