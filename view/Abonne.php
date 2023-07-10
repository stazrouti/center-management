
    
            <h3>Informations des Abonnés</h3>
                    <a href="index.php?AjouterAbonne=<?='1'?>"><div class="lien">Ajouter Abonnés</div></a>
            <input type="text" autocomplete="off" name="search" id="search" placeholder="Recherche" /><br><br>
            <table>
                <tr>
                    <th>Année</th>
                    <th>Nombre</th>
                    <th>Categorie</th>
                </tr>
                <?php
                while ($tab=$result->fetch())
                {
                    ?>
                <tr>
                    <td><?php echo $tab['Annee'] ;?></td>
                    <td><?php echo $tab['Nombre'] ;?></td>
                    <td><?php echo $tab['Categorie'] ;?></td>
                    <td><a href="index.php?ModifierAbonne=1&Annee=<?php echo $tab['Annee']; ?>&Code1=<?php echo $tab['Code1']; ?>&Nombre=<?php echo $tab['Nombre']; ?>&Categorie=<?php echo $tab['Categorie']; ?> ">Modifier</a></td>
                    <td><a href="index.php?SuprimerAbonne=1&Annee=<?php echo $tab['Annee']; ?>&Code1=<?php echo $tab['Code1']; ?>&Nombre=<?php echo $tab['Nombre']; ?>&Categorie=<?php echo $tab['Categorie']; ?> ">Supprimer</a></td>
                    
                </tr>
                <?php }?>
                
                <!--tr>
                    <th>2020</th>
                    <th>3</th>
                    <th>Industrielle</th>
                </tr>
                <tr>
                    <th>2020</th>
                    <th>3</th>
                    <th>Borne_Fontaine</th>
                </tr>
                <tr>
                    <th>2020</th>
                    <th>3</th>
                    <th>Administration</th>
                </tr-->
            </table>
