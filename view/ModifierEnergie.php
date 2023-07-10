<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./public/css/formstyle.css">
    <title>Modifier Energie</title>
</head>
<body>
    <h3>Modifier Energie</h3>
            <a href="index.php?Energie=<?='1'?>"><div class="lien">Retour</div></a>
            <br>
            <br>
            <?php 
                $tab=$result->fetch()
            ?>
            <form method="POST">
                <label>Contrat</label>
                    <input type="text" name="Contrat" id="" placeholder="Contrat" value="<?php echo $tab['Contrat']?>">
                <label>Type Contrat</label>
                <select name="TypeContrat" id="" placeholder="">
                    <option value="MT" <?php if ($tab["Type_Contrat"] == "MT") echo "selected"; ?>>MT</option>
                    <option value="BT" <?php if ($tab["Type_Contrat"] == "BT") echo "selected"; ?>>BT</option>
                </select>
                <br>
                <input type="submit" value="Modifier" name="ModifierEnergie">
            </form>
            
</body>
</html>