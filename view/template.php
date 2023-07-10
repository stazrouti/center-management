<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <script type="text/javascript" src="./public/js/script.js"></script>
    <script type="text/javascript" src="./public/js/jquery-3.6.0.min.js"></script>
    <!--script src="https://code.jquery.com/jquery-3.6.0.min.js"></script-->
    <script type="text/javascript" src="./public/js/Recherche.js"></script>
    <link rel="stylesheet" href="./public/css/formstyle.css">

    <title>Gestion des centre</title>
</head>
<body>
    <nav>
        <div><a href="index.php">Onee BO gestion des centres</div>
    </nav>
    <div class="Body" >
        <div class="Humberger">
            
                  <a href="index.php?Agent=<?='1'?>"><div onclick="fonct()" id="Agent">Agent</div></a>
                  <a href="index.php?Energie=<?='1'?>"><div>Energie</div></a>
                  <a href="index.php?Abonne=<?='1'?>"><div >Abonnés</div></a>
                  <a href="index.php?Consommation=<?='1'?>"><div >Consommation</div></a>
                  <a href="index.php?Marches=<?='1'?>"><div >Marchés</div></a>
                  <a href="index.php?ReleveEnergie=<?='1'?>"><div >Relevé Energie</div></a>
            </div>

        <div class="Centre">
            <!-- <img src="onep logo.png" alt="logo">  -->  
            <!--<h3>Bienvenue</h3>-->
             <?= $content ?>
             
        <!-- </div>
    </div> -->
    



<!--<script>
        function fonct() {
          document.getElementById("p2").style.backgroundColor = "#8ACEE8";
          document.getElementById("Agent").style.backgroundColor = "#8ACEE8";
        }
</script>-->

