<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Releve Energie</title>
</head>
<body>
    
            <h3>Informations de Relevé Energie</h3>
                    <a href="index.php?AjouterReleveEnergie=<?='1'?>" ><div class="lien">Ajouter Releve Energie</div></a>
            <input type="text" autocomplete="off" name="search" id="search" placeholder="Recherche" /><br><br>
            <table>
                <tr>
                    <th>Contrat</th>
                    <th>Date Relevé</th>
                    <th>Index</th>
                </tr>
                <?php
                while ($tab=$result->fetch())
                {
                    $date_strin = $tab["Date_Releve"];
                    $timestam = strtotime($date_strin);
                    $new_date = date('d/m/Y', $timestam);
                    ?>
                <tr>
                    <td><?php echo $tab['Contrat'] ;?></td>
                    <td><?php echo $new_date;?></td>
                    <td><?php echo $tab['IndexR'] ;?></td>
                    <td><a href="index.php?ModifierReleveEnergie=1&Contrat=<?php echo $tab['Contrat']; ?>&Date_Releve=<?php echo $tab['Date_Releve']; ?>&IndexR=<?php echo $tab['IndexR']; ?>&Code1=<?php echo $tab['Code1']; ?> ">Modifier</a></td>
                    <td><a href="index.php?SuprimerReleveEnergie=1&Contrat=<?php echo $tab['Contrat']; ?>&Date_Releve=<?php echo $tab['Date_Releve']; ?>&IndexR=<?php echo $tab['IndexR']; ?>&Code1=<?php echo $tab['Code1']; ?> ">Supprimer</a></td>
                    
                    
                </tr>
                <?php }?>

                <!--tr>
                    <th>8776554</th>
                    <th>01/01/2000</th>
                    <th>Pleine</th>
                </tr>
                <tr>
                    <th>8776554</th>
                    <th>01/01/2000</th>
                    <th>Creuse</th>
                </tr>
                <tr>
                    <th>8776554</th>
                    <th>01/01/2000</th>
                    <th>Pointe</th>
                </tr>
                <tr>
                    <th>8776554</th>
                    <th>01/01/2000</th>
                    <th>Reactive</th>
                </tr-->
            </table>
</body>
</html>