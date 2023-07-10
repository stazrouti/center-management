<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./public/css/formstyle.css">
    <title>Ajouter Relevé Energie</title>
</head>
<body>
            <h3>Ajouter Relevé Energie</h3>
            <a href="index.php?ReleveEnergie=1"><div style="text-align: right;margin-right: 20px;margin-bottom: 20px;">Retour</div></a>
            <form method="POST">
                <label>Contrat</label>
                    <input type="text" name="Contrat" id="" placeholder="Contrat">
                <label>Date Relevé</label>
                    <input type="date" name="DateReleve" id="">
                    <br>
                <label>Index</label>
                <select name="index" id="" placeholder="">
                    <?php 
                    while($tab=$result->fetch())
                    {
                    ?>
                        <option><?php echo $tab["IndexR"];?></option>

                    <?php }?>
                </select>
                <br>
                <input type="submit" value="Ajouter" name="AjouterReleveEnergie">
            </form>

</body>
</html>