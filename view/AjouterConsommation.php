<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ajouter Consommation</title>
    <link rel="stylesheet" href="./public/css/formstyle.css">
</head>
<body>
            <h3>Ajouter Consommation</h3>
            <a href="index.php?Consommation=1"><div style="text-align: right;margin-right: 20px;margin-bottom: 20px;">Retour</div></a>
            <form method="POST">
                <label>Année</label>
                    <input type="text" name="Annee" id="" placeholder="Année">
                <label>Volume</label>
                    <input type="text" name="Volume" id="" placeholder="Volume">
                    <br>
                <label>Categorie</label>
                <select name="Categorie" id="" placeholder="">
                    <?php 
                    while($tab=$cat->fetch())
                    {
                    ?>
                        <option><?php echo $tab["Categorie"];?></option>

                    <?php }?>
                    
                </select>
                <br>
                <input type="submit" value="Ajouter" name="AjouterConsommation">
            </form>

</body>
</html>