<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Consommation</title>
    
</head>
<body>
    
            <h3>Informations de Consommation</h3>
            <a href="index.php?AjouterConsommation=<?='1'?>" ><div style="text-align: right;margin-right: 20px;margin-bottom: 20px;">Ajouter Consommation</div></a>
            <input type="text" autocomplete="off" name="search" id="search" placeholder="Recherche" /><br><br>
            <table>
                <tr>
                    <th>Année</th>
                    <th>Volume</th>
                    <th>Categorie</th>
                </tr>
                <?php
                while ($tab=$result->fetch())
                {
                    ?>
                <tr>
                    <td><?php echo $tab['Annee'] ;?></td>
                    <td><?php echo $tab['Volume'] ;?></td>
                    <td><?php echo $tab['Categorie'] ;?></td>
                    <td><a href="index.php?ModifierConsommation=1&Annee=<?php echo $tab['Annee']; ?>&Code1=<?php echo $tab['Code1']; ?>&Volume=<?php echo $tab['Volume']; ?>&Categorie=<?php echo $tab['Categorie']; ?> ">Modifier</a></td>
                    <td><a href="index.php?SuprimerConsommation=1&Annee=<?php echo $tab['Annee']; ?>&Code1=<?php echo $tab['Code1']; ?>&Volume=<?php echo $tab['Volume']; ?>&Categorie=<?php echo $tab['Categorie']; ?> ">Supprimer</a></td>
                    
                </tr>
                <?php }?>
                
            </table>

</body>
</html>