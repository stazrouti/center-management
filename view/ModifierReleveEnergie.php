<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./public/css/formstyle.css">
    <title>Modifier Relevé  Energie</title>
</head>
<body>
            <h3>Modifier Relevé Energie</h3>
            <a href="index.php?ReleveEnergie=1"><div class="lien">Retour</div></a>
            <form method="POST">
                <label>Contrat</label>
                    <input type="text" name="Contrat" id="" placeholder="Contrat" value="<?php echo $v[0]; ?>">
                <label>Date Relevé</label>
                    <input type="date" name="DateReleve" id="" value="<?php echo $v[1]; ?>">
                    <br>
                <label>Index</label>
                <select name="index" id="" placeholder="">
                    <?php 
                    while($tab=$ind->fetch())
                    {
                    ?>
                        
                        <option <?php if ($tab["IndexR"] == $v[2]) echo "selected"; ?> > <?php echo $tab["IndexR"];?></option>

                    <?php }?>
                </select>
                <br>
                <input type="submit" value="Modifier" name="ModifierReleveEnergie">
            </form>

</body>
</html>