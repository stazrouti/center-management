

<h3>Informations des Agent</h3>
<a href="index.php?AjouterAgent=<?='1'?>"><div class="lien">Ajouter un Agent</div></a>
<input type="text" autocomplete="off" name="search" id="search" placeholder="Recherche" /><br><br>

<table>
    <tr>
        <th>Matricule</th>
        <th>CIN</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Date De Naissance</th>
        <th>Echelle</th>
        <th>Echelon</th>
        <th>Collège</th>
    </tr>
    <?php 
    while ($tab=$result->fetch()) {
        $date_string = $tab["Date_Naissance"];
        $timestamp = strtotime($date_string);
        $new_date_format = date('d/m/Y', $timestamp);
        ?><tr>
            <td><?php echo $tab["Matricule"]; ?></td>
            <td><?php echo $tab["CIN"]; ?></td>
            <td><?php echo $tab["Nom"]; ?></td>
            <td><?php echo $tab["Prenom"]; ?></td>
            <td><?php echo $new_date_format; ?></td>
            <td><?php echo $tab["Echelle"]; ?></td>
            <td><?php echo $tab["Echelon"]; ?></td>
            <td><?php echo $tab["College"]; ?></td>
            <td><a href="index.php?ConsulterAgent=<?php echo $tab["Matricule"]; ?>"> Consulter</a></td>
            <td><a href="index.php?Enfant=1&Matricule=<?php echo $tab['Matricule']; ?>">Enfant</a></td>
        </tr>
    <?php } ?>
</table>
