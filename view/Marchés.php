<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Marchés</title>
</head>
<body>
    
            <h3>Informations de Marchés</h3>
                    <a href="index.php?AjouterMarchés=<?='1'?>" ><div style="text-align: right;margin-right: 20px;margin-bottom: 20px;">Ajouter Marchés</div></a>
            <input type="text" autocomplete="off" name="search" id="search" placeholder="Recherche" /><br><br>
            <table>
                <tr>
                    <th>Numero de Marchés</th>
                    <th>Intitulé</th>
                    <th>Genre</th>
                    <th>Type</th>
                    <th>Date OS</th>
                    <th>Date de reception</th>
                </tr>
                <?php
                while ($tab=$result->fetch())
                {    
                    //changer le format de la date : Date os
                    $date_strin = $tab["Date_Os"];
                    $timestam = strtotime($date_strin);
                    $new_date_os = date('d/m/Y', $timestam);/**/
                    //changer le format de la date : Date Reception
                    $date_strin = $tab["Date_Reception"];
                    $timestam = strtotime($date_strin);
                    $new_date_R = date('d/m/Y', $timestam);
                
                    ?>
                <tr>
                    <td><?php echo $tab["N_Marches"] ;?></td>
                    <td><?php echo $tab["Intitule"] ;?></td>
                    <td><?php echo $tab["Genre"] ;?></td>
                    <td><?php echo $tab["Type"] ;?></td>
                    <td><?php echo $new_date_os ;?></td>
                    <td><?php echo $new_date_R ;?></td>
                    <td><a href="index.php?ModifierMarches=1&N_Marches=<?php echo $tab['N_Marches']; ?>&Intitule=<?php echo $tab['Intitule']; ?>&Genre=<?php echo $tab['Genre']; ?>&Type=<?php echo $tab['Type']; ?>&date_os=<?php echo $tab['Date_Os']; ?>&date_R=<?php echo $tab['Date_Reception']; ?>&Code1=<?php echo $tab['Code1']; ?> ">Modifier</a></td>
                    <td><a href="index.php?SuprimerMarches=1&N_Marches=<?php echo $tab['N_Marches']; ?>&Intitule=<?php echo $tab['Intitule']; ?>&Genre=<?php echo $tab['Genre']; ?>&Type=<?php echo $tab['Type']; ?>&date_os=<?php echo $tab['Date_Os']; ?>&date_R=<?php echo $tab['Date_Reception']; ?>&Code1=<?php echo $tab['Code1']; ?> ">Supprimer</a></td>
                </tr>
                <?php }?>
                <!--tr>
                    <th>973987428374</th>
                    <th>lorem</th>
                    <th>Assainissement</th>
                    <th>Cadre</th>
                    <th>01/01/2000</th>
                    <th>01/01/2020</th>
                </tr>
                <tr>
                    <th>973987428374</th>
                    <th>lorem</th>
                    <th>Eau potable</th>
                    <th>Simple</th>
                    <th>01/01/2000</th>
                    <th>01/01/2020</th>
                </tr>
                <tr>
                    <th>973987428374</th>
                    <th>lorem</th>
                    <th>Assainissement</th>
                    <th>Cadre</th>
                    <th>01/01/2000</th>
                    <th>01/01/2020</th>
                </tr-->
            </table>

</body>
</html>