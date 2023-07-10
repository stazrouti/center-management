<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./public/css/formstyle.css">
    <title>Ajouter Energie</title>
</head>
<body>
    <h3>Ajouter Energie</h3>
            <a href="index.php?Energie=<?='1'?>"><div style="text-align: right;margin-right: 20px;margin-bottom: 20px;">Retour</div></a>
            <form method="POST">
                <label>Contrat</label>
                    <input type="text" name="Contrat" id="" placeholder="Contrat">
                <label>Type Contrat</label>
                <select name="TypeContrat" id="" placeholder="">
                    <option>MT</option>
                    <option>BT</option>
                </select>
                <br>
                <input type="submit" value="Ajouter" name="AjouterEnergie">
            </form>
            
</body>
</html>