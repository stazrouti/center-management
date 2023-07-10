<?php 

function Authentification($aut)
{
	include 'conexion.php';
	$sql = "SELECT * FROM admin WHERE id ='$aut[0]' AND Password = '$aut[1]' ";
	$result = $con->query($sql);
	return $result;
}

function AfficherAgent()
{
	
	include 'conexion.php';
	$req="SELECT * FROM Agent";
	$result=$con->query($req) or die("Error selectAgent");
	return $result;

}
function ConsulterAgent($Mat)
{
	include 'conexion.php';
	$req="SELECT * FROM Agent WHERE Matricule='$Mat' ";
	$result=$con->query($req) or die("Error consult Agent");
	return $result;
}
function ModifierAgent($M)
{
	include 'conexion.php';
	$req="UPDATE `agent` SET `Matricule`='$M[0]', `CIN`='$M[1]', `Nom`='$M[2]', `Prenom`='$M[3]', `Date_Naissance`='$M[4]', `Echelle`='$M[5]', `Echelon`='$M[6]', `College`='$M[7]', `Sexe`='$M[8]', `Affiliation`='$M[9]', `Immatriculation`='$M[10]', `Situation_Familiale`='$M[11]', `Filiere`='$M[12]', `Tele`='$M[13]', `Email`='$M[14]' WHERE `Matricule`='$M[0]' ";

	
	$result=$con->exec($req) or die("Error Modifier Agent");
	return $result;
}
function AfficherEnfant($t)
{
	
	include 'conexion.php';
	$req="SELECT * FROM enfants WHERE Matricule='$t' ";
	$result=$con->query($req) or die("Error select Enfans");
	
	return $result;

}
function AjouterEnfant($t)
{
	
	include 'conexion.php';
	
	$sql="INSERT INTO enfants VALUES ('$t[0]','$t[1]','$t[2]','$t[3]','$t[4]') ";
	$nb=$con->exec($sql) or die("Error Ajouter enfant");

	return $nb;/**/
	//echo "<br>".$t[0]."<br>".$t[1]."<br>".$t[2]."<br>".$t[3]."<br>".$t[4]."<br>";

}
function SuprimerEnfant($t)
{
	
	include 'conexion.php';
	
	$sql="DELETE FROM  enfants WHERE Nom='$t[0]' AND Prenom='$t[1]' AND Matricule='$t[2]' ";
	$nb=$con->exec($sql) or die("Error Supp enfant");

	return $nb;/**/
	//echo "<br>".$t[0]."<br>".$t[1]."<br>".$t[2]."<br>".$t[3]."<br>".$t[4]."<br>";

}
function AjouterAgent($t)
{
	
	include 'conexion.php';
	//echo "$t[0]";
	$sql="INSERT INTO Agent VALUES ('$t[0]','$t[1]','$t[2]','$t[3]','$t[4]','$t[5]','$t[6]','$t[7]','$t[8]','$t[9]','$t[10]','$t[11]','$t[12]','$t[13]','$t[14]','756318') ";
	$nb=$con->exec($sql) or die("Error AjouterAgent");
	return $nb;/**/

}
function AfficherEnergie()
{	
	
	include 'conexion.php';
	$req="SELECT * FROM Energie";
	$result=$con->query($req) or die("Error selectEnergie");
	return $result;

}
function ConsulterEnergie($t)
{	
	
	include 'conexion.php';
	$req="SELECT * FROM Energie WHERE Contrat='$t' ";
	$result=$con->query($req) or die("Error selectEnergie");
	return $result;

}
function AjouterEnergie($t)
{
	
	include 'conexion.php';
	$sql="INSERT INTO Energie VALUES ('$t[0]','$t[1]','756318') ";
	$nb=$con->exec($sql) or die("Error AjouterEnergie");
	return $nb;/**/

}
function ModifierEnergie($t)
{	
	
	include 'conexion.php';
	$sql = "UPDATE Energie SET Contrat='$t[2]', Type_Contrat='$t[3]' WHERE Contrat='$t[0]' AND Code1='$t[1]'";
	$result=$con->exec($sql) or die("Error Modifier Energie");
	return $result;

}

function SuprimerEnergie($t)
{
	
	include 'conexion.php';
	$sql="DELETE FROM Energie WHERE Contrat='$t[0]' AND '$t[1]' ";
	$nb=$con->exec($sql) or die("Error AjouterEnergie");
	return $nb;/**/

}
function AfficherAbonne()
{	
	
	include 'conexion.php';
	$req="SELECT * FROM `abonnes` ORDER BY `Annee` ASC";
	$result=$con->query($req) or die("Error selectAbonne");
	return $result;

}
function AfficherCategorie()
{
	include 'conexion.php';
	$req="SELECT * FROM Categorie";
	$result=$con->query($req) or die("Error selectcategorie");
	return $result;
}
function AjouterAbonne($t)
{
	
	include 'conexion.php';
	$sql="INSERT INTO Abonnes VALUES ('$t[0]','$t[1]','$t[2]','756318') ";
	$nb=$con->exec($sql) or die("Error AjouterAbonne");
	return $nb;/**/

}
function ModifierAbonne($t)
{
	
	include 'conexion.php';
	$sql="UPDATE Abonnes SET Annee='$t[0]',Nombre='$t[1]',Categorie='$t[2]' WHERE Annee='$t[3]' AND Nombre='$t[4]' AND Categorie='$t[5]' AND Code1='$t[6]'  ";
	$nb=$con->exec($sql) or die("Error Modifier Abonne");
	return $nb;/**/

}
function SuprimerAbonne($t)
{
	
	include 'conexion.php';
	$sql="DELETE FROM  Abonnes WHERE Annee='$t[0]' AND Nombre='$t[1]' AND Categorie='$t[2]' AND  Code1='$t[3]'  ";
	$nb=$con->exec($sql) or die("Error Suprimer Abonne");
	return $nb;/**/

}
function AfficherConsommation()
{
	include 'conexion.php';
	$req="SELECT * FROM `consommation` ORDER BY `consommation`.`Annee` ASC";
	$result=$con->query($req) or die("Error selectConsommation");
	return $result;
}
function AjouterConsommation($t)
{
	
	include 'conexion.php';
	$sql="INSERT INTO Consommation VALUES ('$t[0]','$t[1]','$t[2]','756318') ";
	$nb=$con->exec($sql) or die("Error AjouteraConsommation");
	return $nb;/**/

}
function ModifierConsommation($t)
{
	
	include 'conexion.php';
	$sql="UPDATE Consommation SET Annee='$t[0]',Volume='$t[1]',Categorie='$t[2]' WHERE Annee='$t[3]' AND Volume='$t[4]' AND Categorie='$t[5]' AND Code1='$t[6]'  ";
	$nb=$con->exec($sql) or die("Error Modifier Consommation");
	return $nb;/**/

}
function SuprimerConsommation($t)
{
	include 'conexion.php';
	/* for ($i=0; $i <4 ; $i++) { 
		echo $i." ".$t[$i]."<br>";}
		echo var_dump($con); */
	$sql="DELETE FROM  consommation WHERE Annee='$t[0]' AND Volume='$t[1]' AND Categorie='$t[2]' AND  Code1='$t[3]'  ";
	$nb=$con->exec($sql) or ("Error Suprimer Abonne");
	return $nb;/**/

}
function AfficherMarches()
{
	include 'conexion.php';
	$req="SELECT * FROM `marches` ORDER BY `marches`.`N_Marches` ASC";
	$result=$con->query($req) or die("Error select Marches");
	return $result;
}
function AjouterMarches($t)
{
	include 'conexion.php';
	$sql="INSERT INTO Marches VALUES ('$t[0]','$t[1]','$t[2]','$t[3]','$t[4]','$t[5]','756318') ";
	$nb=$con->exec($sql) or die("Error AjouterMarches");
	return $nb;/**/

}
function ModifierMarches($t)
{
	
	include 'conexion.php';
	$sql="UPDATE marches SET N_Marches = '$t[0]', Intitule = '$t[1]', Genre = '$t[2]', Type = '$t[3]', Date_Os = '$t[4]', Date_Reception = '$t[5]' WHERE N_Marches = '$t[6]'AND  Intitule = '$t[7]'AND  Genre = '$t[8]'AND  Type = '$t[9]'AND  Date_Os = '$t[10]'AND  Date_Reception = '$t[11]' AND Code1='$t[12]' ";
	$nb=$con->exec($sql) or die("Error Modifier Marches");
	return $nb;/**/

}
function SuprimerMarches($t)
{
	
	include 'conexion.php';
	$sql="DELETE FROM  Marches WHERE N_Marches = '$t[0]'AND Intitule = '$t[1]'AND Genre = '$t[2]'AND Type = '$t[3]'AND Date_Os = '$t[4]'AND Date_Reception = '$t[5]' AND Code1='$t[6]' ";
	$nb=$con->exec($sql) or die("Error Suprimer Marches");
	return $nb;/**/

}
function AfficherReleveEnergie()
{

	include 'conexion.php';
	$req="SELECT * FROM `releveenergie` ORDER BY `releveenergie`.`Contrat` ASC";
	$result=$con->query($req) or die("Error select Marches");
	return $result;
}
function AjouterReleveEnergie($t)
{

	include 'conexion.php';
	$sql="INSERT INTO releveenergie (Contrat,Date_Releve,IndexR,Code1)VALUES ('$t[0]','$t[1]','$t[2]','756318') ";
	$nb=$con->exec($sql) or die("Error AjouterReleveEnergie");
	return $nb;
}
function ModifierReleveEnergie($t)
{
	
	include 'conexion.php';
	$sql="UPDATE releveenergie SET Date_Releve= '$t[1]',IndexR = '$t[2]',Contrat = '$t[0]' WHERE Date_Releve = '$t[4]'AND IndexR = '$t[5]'AND Contrat = '$t[3]' AND Code1='$t[6]' ";
	$nb=$con->exec($sql) or die("Error Modifier ReleveEnergie");
	return $nb;/**/

}
function SuprimerReleveEnergie($t)
{
	
	include 'conexion.php';
	$sql="DELETE FROM  releveenergie WHERE Date_Releve = '$t[1]'AND IndexR = '$t[2]'AND Contrat = '$t[0]' AND Code1='$t[3]' ";
	$nb=$con->exec($sql) or die("Error Suprimer Marches");
	return $nb;/**/

}
function Afficherindex()
{
	include 'conexion.php';
	$req="SELECT * FROM indexr";
	$result=$con->query($req) or die("Error selectindex");
	return $result;
}













?>