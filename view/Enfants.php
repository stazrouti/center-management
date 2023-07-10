
                    <h3>Informations des Enfants</h3>
                    <a href="index.php?Agent=<?='1'?>"><div style="text-align: right;margin-right: 20px;margin-bottom: 20px;">Retour</div></a>
                    <a href="index.php?AjouterEnfant=1&Matricule=<?php echo $_GET['Matricule']; ?>"><div style="text-align: right;margin-right: 20px;margin-bottom: 20px;">Ajouter un Enfant</div></a>
            <input type="text" placeholder="Recherche" ><br><br>
            <table>
                <tr>
                        
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Date De Naissance</th>
                    <th>Sexe</th>
                </tr>
                <?php 
                while ($tab=$result->fetch()) {
                    $date_string = $tab["Date_Naissance"];
                    $timestamp = strtotime($date_string);
                    $new_date_format = date('d/m/Y', $timestamp);
                    ?><tr>
                        <td><?php echo $tab["Nom"]; ?></td>
                        <td><?php echo $tab["Prenom"]; ?></td>
                        <td><?php echo $new_date_format; ?></td>
                        <td><?php echo $tab["Sexe"]; ?></td>
                        <td><a onclick="confirmAction()"  href="index.php?SuprimerEnfant=1&Nom=<?php echo $tab["Nom"];?>&Prenom=<?php echo $tab["Prenom"];?>&Matricule=<?php echo $tab["Matricule"];?>  " >Supprimer</a></td>
                        
                    </tr>
                <?php } ?>
                
            </table>
