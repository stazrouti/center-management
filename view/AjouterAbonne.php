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
            <h3>Ajouter Abonné</h3>
            <a href="index.php?Abonne=1"><div class="lien">Retour</div></a>
            <form method="POST">
                <label>Année</label>
                    <input type="text" name="Annee" id="" placeholder="Année">
                <label>Nombre</label>
                    <input type="text" name="Nombre" id="" placeholder="Nombre"><br>
                <label>Categorie</label>
                <select name="Categorie" id="" placeholder="">
                    <?php 
                    while($tab=$cat->fetch())
                    {
                        ?>
                        <option><?php echo $tab["Categorie"];?></option>

                    <?php }?>
                    
                </select><br>
                <input type="submit" value="Ajouter" name="AjouterAbonne">
            </form>

</body>
</html>