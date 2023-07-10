<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Energie</title>
    
</head>
<body>
        
            <h3>Informations d'Energie</h3>
            <a href="index.php?AjouterEnergie=<?='1'?>" ><div style="text-align: right;margin-right: 20px;margin-bottom: 20px;">Ajouter Energie</div></a>
            <input type="text" autocomplete="off" name="search" id="search" placeholder="Recherche" /><br><br>
            
            <table>
                <tr>
                    <th>Contrat</th>
                    <th>Type Contrat</th>
                </tr>
                <?php
                while ($tab=$result->fetch())
                {
                    ?>
                <tr>
                    <td><?php echo $tab['Contrat'] ;?></td>
                    <td><?php echo $tab['Type_Contrat'] ;?></td>
                    <td><a href="index.php?ModifierEnergie=1&Contrat=<?php echo $tab['Contrat']; ?>&Code1=<?php echo $tab['Code1']; ?>">Modifier</a></td>
                    <td><a href="index.php?SuprimerEnergie=1&Contrat=<?php echo $tab['Contrat']; ?>&Code1=<?php echo $tab['Code1']; ?>">Supprimer</a></td>
                    
                </tr>
                <?php }?>
                <!--tr>
                    <th>123456</th>
                    <th>BT</th>
                </tr>
                
                <tr>
                    <th>123456</th>
                    <th>BT</th>
                </tr>
                <tr>
                    <th>123456</th>
                    <th>MT</th>
                </tr>
                <tr>
                    <th>123456</th>
                    <th>BT</th>
                </tr>
                <tr>
                    <th>123456</th>
                    <th>MT</th>
                </tr-->
            </table>

</body>
</html>