<?php
require './model/mod.php';
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['password']))
{
require 'view/view.php';


//pour selectioner depuis la base de donnes

if(isset($_GET['Agent']))
{
	//selectioner les agent
	$result=AfficherAgent();
	require 'view/Agent.php';
}

elseif(isset($_GET['ConsulterAgent']) )
{
	$Mat=$_GET['ConsulterAgent'];
	$result=ConsulterAgent($Mat);
	require 'view/ConsulterAgent.php';

}
elseif(isset($_GET['ModifierAgent']) && isset($_GET['Matricule']) && !isset($_POST['ModifierAgent']) )
{
	$Mat=$_GET['Matricule'];
	$result=ConsulterAgent($Mat);
	require 'view/ModifierAgent.php';

}
//Appliquer la modification
elseif(isset($_POST['ModifierAgent']) && isset($_GET['Matricule'])) {

        //echo '<script>alert("gooooooood")</script>';
		$M[0]=$_POST["Matricule"];
        $M[1]=$_POST["CIN"];
        $M[2]=$_POST["Nom"];
        $M[3]=$_POST["Prenom"];
        $M[4]=$_POST["DNS"];	        
        $M[5]=$_POST["Echelle"];
        $M[6]=$_POST["Echelon"];
        $M[7]=$_POST["College"];
        $M[8]=$_POST["Sexe"];
        $M[9]=$_POST["Affiliation"];
        $M[10]=$_POST["Immatriculation"];
        $M[11]=$_POST["SituationFamiliale"];
        $M[12]=$_POST["Filiere"];
        $M[13]=$_POST["Tele"];
        $M[14]=$_POST["Email"];
        
        $result=ModifierAgent($M);
        if($result>0)
        {
        	echo '<script>alert("Bien modifier")</script>';
        }
        else{
        	echo "il ya une erreur";
        }
        $result=AfficherAgent();
        require 'view/Agent.php';

}
//Consulter Les enfant
elseif(isset($_GET['Enfant']) && $_GET['Matricule'])
{
	$s=$_GET['Enfant'];
	$t=$_GET['Matricule'];
	$result=AfficherEnfant($t);
	require 'view/Enfants.php';
	// verfifier les ligne retourne pour savoir si il ya d'enfant ou non ;
	/*if ($result->rowcount() > 0) {
		require 'view/Enfants.php';
	}
	else
	{
		echo "ya pas d'enfant";
	}*/
	

}
//Ajouter un enfant
elseif(isset($_GET['AjouterEnfant']) && isset($_GET['Matricule']) )
{
	//echo $_GET['AjouterEnfant']." ".;
	require 'view/AjouterEnfants.php';
	if (isset($_POST['AjouterEnfants'])) {
		//Verifier les champs
		if (empty($_POST['Nom']) || empty($_POST['Prenom']) ||empty($_POST['Date_Naissance']) ||empty($_POST['Sexe']) ) {
			echo "Remplire tous";
		}
		else {
			//Appliquer l'ajoute
			
			$t[0]=$_POST['Nom'];
			$t[1]=$_POST['Prenom'];
			$t[2]=$_POST['Date_Naissance'];
			$t[3]=$_POST['Sexe'];
			$t[4]=$_GET['Matricule'];
			$result=AjouterEnfant($t);
			if ($result>0) {
                	echo "Bien Ajouter";
                }
            else{
            	echo "Err ajout";
            }
		}
	}
}
//Suprimer Enfant
elseif(isset($_GET['SuprimerEnfant']) && isset($_GET['Matricule']) && isset($_GET['Nom']) && isset($_GET['Prenom']))
{	
	//echo $_GET['SuprimerEnfant']."<br>".$_GET['Matricule']."<br>".$_GET['Nom']."<br>".$_GET['Prenom'];

	//echo "<script>alert ('Voulez vous suprimer  ')</script>" ;
	//echo '<button onclick="confirmAction()">Confurm Action</button>';
	$t[0]=$_GET['Nom'];
	$t[1]=$_GET['Prenom'];
	$t[2]=$_GET['Matricule'];
	$result=SuprimerEnfant($t);
	if($result > 0){
	
		//echo "<script>alert (un a ete suprimer)</script>" ;
		$matricule = urlencode($_GET['Matricule']);
    	header("Location: index.php?Enfant=1&Matricule=$matricule");
		//echo "<script>location.href = window.location.href;</script>";
	}
	
	
	
}
elseif(isset($_GET['Energie']))
{
	$result=AfficherEnergie();
	require 'view/Energie.php';
}
elseif(isset($_GET['SuprimerEnergie']) && isset($_GET['Contrat']) && isset($_GET['Code1']))
{

	
	$t[0]=$_GET['Contrat'];
	$t[1]=$_GET['Code1'];
	$result=SuprimerEnergie($t);
	if($result > 0){
	
		//echo "<script>alert (un a ete suprimer)</script>" ;
		$matricule = urlencode($_GET['Contrat']);
    	header("Location: index.php?Energie=1");
		//echo "<script>location.href = window.location.href;</script>";
	}
	
}
elseif(isset($_GET['ModifierEnergie']) && isset($_GET['Contrat']) )
{
	$Contrat=$_GET['Contrat'];
	$result=ConsulterEnergie($Contrat);
	require 'view/ModifierEnergie.php';
	if (isset($_POST['ModifierEnergie'])) {
		
		$t[0]=$_GET['Contrat'] ;
		$t[1]=$_GET['Code1'] ;
		$t[2]=$_POST['Contrat'] ;
		$t[3]=$_POST['TypeContrat'] ;
		$result=ModifierEnergie($t);
		 if($result>0)
        {
        	echo "Bien modifier";
        }
        else{
        	echo "il ya une erreur";
        }
		
	}
}
elseif(isset($_GET['Abonne']) )
{	
	$result=AfficherAbonne();
	require 'view/Abonne.php';
}
elseif(isset($_GET['ModifierAbonne']) && isset($_GET['Annee']) && isset($_GET['Code1']) )
{	
	//Afficher les categorie
	$cat=AfficherCategorie();
	$Afficher=AfficherEnergie();

	$v[0]=$_GET['Annee'];
	$v[1]=$_GET['Code1'];
	$v[2]=$_GET['Nombre'];
	$v[3]=$_GET['Categorie'];
	require 'view/ModifierAbonne.php';
	
	if(isset($_POST['ModifierAbonne']))
	{
		
		$t[0]=$_POST['Annee'];
		$t[1]=$_POST['Nombre'];
		$t[2]=$_POST['Categorie'];
		$t[3]=$v[0];
		$t[4]=$v[2];
		$t[5]=$v[3];
		$t[6]=$v[1];
		$Result=ModifierAbonne($t);
		//for ($i=0; $i <=6; $i++) {echo "<br>".$i." ".$t[$i]."<br>";}
	 	if($Result>0)
	 	{
	 		echo "Bien modifier";
	 	}
	 	else{
	 		echo "Err modifier";
	 	}
		

	}
}
elseif(isset($_GET['SuprimerAbonne']) && isset($_GET['Annee']) && isset($_GET['Code1']))
{	
	

	$t[0]=$_GET['Annee'];
	$t[1]=$_GET['Nombre'];
	$t[2]=$_GET['Categorie'];
	$t[3]=$_GET['Code1'];

	$result=SuprimerAbonne($t);
	if($result>0)
	{
		header("Location: index.php?Abonne=1");
	}
	
}
elseif(isset($_GET['Consommation']))
{
	$result=AfficherConsommation();
	require 'view/Consommation.php';
}
elseif(isset($_GET['ModifierConsommation']) && isset($_GET['Annee']) && isset($_GET['Volume']) && isset($_GET['Categorie']) )
{
	$cat=AfficherCategorie();
	$v[0]=$_GET['Annee'];
	$v[1]=$_GET['Volume'];
	$v[2]=$_GET['Categorie'];
	$v[3]=$_GET['Code1'];
	require 'view/ModifierConsommation.php';
	if (isset($_POST['ModifierConsommation'])) {

		$t[0]=$_POST['Annee'];
		$t[1]=$_POST['Volume'];
		$t[2]=$_POST['Categorie'];
		$t[3]=$v[0];
		$t[4]=$v[1];
		$t[5]=$v[2];
		$t[6]=$v[3];
		$result=ModifierConsommation($t);
		if($result>0)
	 	{
	 		echo "Bien modifier";
	 	}
	 	else{
	 		echo "Err modifier";
	 	}
	}
}
elseif(isset($_GET['SuprimerConsommation']) && isset($_GET['Annee']) && isset($_GET['Code1']) && isset($_GET['Volume']) && isset($_GET['Categorie']))
{	
	

	$t[0]=$_GET['Annee'];
	$t[1]=$_GET['Volume'];
	$t[2]=$_GET['Categorie'];
	$t[3]=$_GET['Code1'];
	/* for ($i=0; $i <4 ; $i++) { 
		echo $i." ".$t[$i]."<br>";} */

	$result=SuprimerConsommation($t);
	if($result>0)
	{
		header("Location: index.php?Consommation=1");
	}
	
}
elseif(isset($_GET['Marches']))
{	
	$result=AfficherMarches();
	require 'view/Marchés.php';
}


elseif(isset($_GET['ModifierMarches']) && isset($_GET['N_Marches']) && isset($_GET['Intitule']) && isset($_GET['Genre']) && isset($_GET['Type']) && isset($_GET['date_os']) && isset($_GET['date_R']) && isset($_GET['Code1']))
{
	
	$v[0]=$_GET['N_Marches'];
	$v[1]=$_GET['Intitule'];
	$v[2]=$_GET['Genre'];
	$v[3]=$_GET['Type'];
	$v[4]=$_GET['date_os'];
	$v[5]=$_GET['date_R'];
	$v[6]=$_GET['Code1'];
	require 'view/ModifierMarches.php';
	if (isset($_POST['ModifierMarches'])) {

		$t[0]=$_POST['N_Marches'];
		$t[1]=$_POST['Intitule'];
		$t[2]=$_POST['Genre'];
		$t[3]=$_POST['Type'];
		$t[4]=$_POST['DateOs'];
		$t[5]=$_POST['DateReception'];
		$t[6]=$v[0];
		$t[7]=$v[1];
		$t[8]=$v[2];
		$t[9]=$v[3];
		$t[10]=$v[4];
		$t[11]=$v[5];
		$t[12]=$v[6];

		/*for ($i=0; $i <=12 ; $i++) { 
			echo $i." ".$t[$i]."<br>";
		}*/
		$result=ModifierMarches($t);
		if($result>0)
	 	{
	 		echo "Bien modifier";
	 	}
	 	else{
	 		echo "Err modifier";
	 	}
	}
}
elseif(isset($_GET['SuprimerMarches']) && isset($_GET['N_Marches']) && isset($_GET['Intitule']) && isset($_GET['Genre']) && isset($_GET['Type']) && isset($_GET['date_os']) && isset($_GET['date_R']) && isset($_GET['Code1']))
{	
	

	$t[0]=$_GET['N_Marches'];
	$t[1]=$_GET['Intitule'];
	$t[2]=$_GET['Genre'];
	$t[3]=$_GET['Type'];
	$t[4]=$_GET['date_os'];
	$t[5]=$_GET['date_R'];
	$t[6]=$_GET['Code1'];

	$result=SuprimerMarches($t);
	if($result>0)
	{
		header("Location: index.php?Marches=1");
	}
	
}



elseif(isset($_GET['ReleveEnergie']))
{
	$result=AfficherReleveEnergie();
	require 'view/ReleveEnergie.php';
}


elseif(isset($_GET['ModifierReleveEnergie']) && isset($_GET['Contrat']) && isset($_GET['Date_Releve']) && isset($_GET['IndexR']) && isset($_GET['Code1']))
{
	$ind=Afficherindex();
	$v[0]=$_GET['Contrat'];
	$v[1]=$_GET['Date_Releve'];
	$v[2]=$_GET['IndexR'];
	$v[3]=$_GET['Code1'];
	require 'view/ModifierReleveEnergie.php';
	if (isset($_POST['ModifierReleveEnergie'])) {

		$t[0]=$_POST['Contrat'];
		$t[1]=$_POST['DateReleve'];
		$t[2]=$_POST['index'];
		$t[3]=$v[0];
		$t[4]=$v[1];
		$t[5]=$v[2];
		$t[6]=$v[3];
		$result=ModifierReleveEnergie($t);
		if($result>0)
	 	{
	 		echo "Bien modifier";
	 	}
	 	else{
	 		echo "Err modifier";
	 	}
	}
}
elseif(isset($_GET['SuprimerReleveEnergie']) && isset($_GET['Contrat']) && isset($_GET['Date_Releve']) && isset($_GET['IndexR']) && isset($_GET['Code1']) )
{	
	

	$t[0]=$_GET['Contrat'];
	$t[1]=$_GET['Date_Releve'];
	$t[2]=$_GET['IndexR'];
	$t[3]=$_GET['Code1'];
	for ($i=0; $i <=3 ; $i++) { echo $i." ".$t[$i]."<br>";}

	$result=SuprimerReleveEnergie($t);
	if($result>0){header("Location: index.php?ReleveEnergie=1");}
	
}


//Pour l'ajout dans la base de donnes
elseif(isset($_GET['AjouterAgent']))
{
	require 'view/AjouterAgent.php';
	//verifier le click
	if(isset($_POST['AjouterAgent']))
		{
			//Verifier les champs 
	        if(empty($_POST["Matricule"]) || empty($_POST["CIN"]) || 
	        empty($_POST["DNS"]) || empty($_POST["Nom"]) || empty($_POST["Prenom"]) || 
	        empty($_POST["Echelle"]) || empty($_POST["Echelon"]) || empty($_POST["College"]) || 
	        empty($_POST["Sexe"]) || empty($_POST["Affiliation"]) || empty($_POST["Immatriculation"]) || 
	        empty($_POST["SituationFamiliale"]) || empty($_POST["Filiere"]) || empty($_POST["Telephone"]) || 
	        empty($_POST["Email"])) 
	        {
	        	//Avertissement
	        	echo "Remplir tous les champs.";
        	}
	        else {
	        	//tout est correct
		        $t[0]=$_POST["Matricule"];
		        $t[1]=$_POST["CIN"];
		        $t[2]=$_POST["Nom"];
		        $t[3]=$_POST["Prenom"];
		        $t[4]=$_POST["DNS"];	        
		        $t[5]=$_POST["Echelle"];
		        $t[6]=$_POST["Echelon"];
		        $t[7]=$_POST["College"];
		        $t[8]=$_POST["Sexe"];
		        $t[9]=$_POST["Affiliation"];
		        $t[10]=$_POST["Immatriculation"];
		        $t[11]=$_POST["SituationFamiliale"];
		        $t[12]=$_POST["Filiere"];
		        $t[13]=$_POST["Telephone"];
		        $t[14]=$_POST["Email"];

		        $A=AjouterAgent($t);
		        if ($A>0) {
                	echo "Bien Ajouter";
                }
		       
		        //for ($i=0; $i < 15; $i++) { echo $i." ".$t[$i]."<br>";}

		        //echo $Matricule."<br> ".$CIN."<br> ".$DNS."<br> ".$Nom."<br> ".$Prenom."<br> ".$Echelle."<br> ".$Echelon."<br> ".$College."<br> ".$Sexe."<br> ".$Affiliation."<br> ".$Immatriculation."<br> ".$SituationFamiliale."<br> ".$Filiere."<br> ".$Telephone."<br> ".$Email ;

		    	}   
		}
}
elseif(isset($_GET['AjouterAbonne']))
{	
	$cat=AfficherCategorie();
	require 'view/AjouterAbonne.php';
		if (isset($_POST['AjouterAbonne'])) {
            if(empty($_POST['Annee']) || empty($_POST['Nombre']))
            {
                echo "Remplire tout";
            }
            else
            {
            	$t[0]=$_POST['Annee'];
            	$t[1]=$_POST['Nombre'];
            	$t[2]=$_POST['Categorie'];
            	$result=AjouterAbonne($t);
            	if ($result>0) {
                	echo "Bien Ajouter";
                }
                
            }
                    
            }
}
elseif(isset($_GET['AjouterReleveEnergie']))
{
	$result=AfficherIndex();
	require 'view/AjouterReleveEnergie.php';
	if (isset($_POST['AjouterReleveEnergie'])) {
            if(empty($_POST['Contrat']) || empty($_POST['DateReleve']) || empty($_POST['index']))
            {
                echo "Remplire tout";
            }
            else
            {
                $t[0]=$_POST['Contrat'];
                $t[1]=$_POST['DateReleve'];
                $t[2]=$_POST['index'];
                $result=AjouterReleveEnergie($t);
                /*$result=AjouterMarches($t);*/

                if ($result>0) {
                	echo "Bien Ajouter";
                }
            }
		}
}

elseif(isset($_GET['AjouterMarchés']))
{
	require 'view/AjouterMarchés.php';
	if (isset($_POST['AjouterMarches'])) {
            if(empty($_POST['N_Marches']) || empty($_POST['Intitule']) || empty($_POST['Genre']) || empty($_POST['Type']) || empty($_POST['DateOs']) || empty($_POST['DateReception']))
            {
                echo "Remplire tout";
            }
            else
            {
                $t[0]=$_POST['N_Marches'];
                $t[1]=$_POST['Intitule'];
                $t[2]=$_POST['Genre'];
                $t[3]=$_POST['Type'];
                $t[4]=$_POST['DateOs'];
                $t[5]=$_POST['DateReception'];
                
                $result=AjouterMarches($t);

                if ($result>0) {
                	echo "Bien Ajouter";
                }
                
                
                }
                
            }
}
elseif(isset($_GET['AjouterEnergie']))
{
	require 'view/AjouterEnergie.php';

        if (isset($_POST['AjouterEnergie'])) {
            if(empty($_POST["Contrat"]) || empty($_POST["TypeContrat"]) )
                {
                    echo "Remplire tout";
                    
                }
            else
            {
                $t[0]=$_POST['Contrat'];
                $t[1]=$_POST['TypeContrat'];

                $result=AjouterEnergie($t);
                if ($result>0) {
                	echo "Bien Ajouter";
                }

            }
        }
}
elseif(isset($_GET['AjouterConsommation']))
{	
	$cat=AfficherCategorie();
	require 'view/AjouterConsommation.php';
	if (isset($_POST['AjouterConsommation'])) {
            if(empty($_POST['Annee']) || empty($_POST['Volume']) || empty($_POST['Categorie']))
            {
                echo "Remplire tout";
            }
            else
            {
                $t[0]=$_POST['Annee'];
                $t[1]=$_POST['Volume'];
                $t[2]=$_POST['Categorie'];
                $result=AjouterConsommation($t);

                if ($result>0) {
                	echo "Bien Ajouter";
                }
                
                
            }
                
            }
                    
}

else
{
	?>
	<div style="text-align: center;height: 50vh;padding-top: 30vh;font-size: 20px;">Bienvenue </div>
<?php }
}
else{
	require 'view/Authentification.php';
	if(isset($_POST['Identifier'])) {
	    if(!empty($_POST['id']) && !empty($_POST['password'])) {  
	        $id = $_POST['id'];  
	        $pass = $_POST['password'];  
	        $aut[0]=$id;
	        $aut[1]=$pass;
	        $result= Authentification($aut);
	        

	        if($result->rowCount() == 1) {  
	            //echo "Valid username and password!";
	            $_SESSION['id'] = $id;
	            $_SESSION['password'] = $pass;
	            header("location:index.php");
	        } else {  
	            //echo "Invalid username or password!";
	            echo '<script>alert("identifiant ou mot de pass incorrect")</script>';
	        }  
	    }
	}
}