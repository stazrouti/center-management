<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title>ONEE BO gestion des centres</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="./public/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
    </head>
    <body class="signin-page">

        <div class="mn-content valign-wrapper">

            <main class="mn-inner container">
  <h4 align="center"><a href="#">ONEE BO gestion des centres</a></h4>
                <div class="valign" style="margin-top: 100PX;">
                      <div class="row">

                          <div class="col s12 m6 l4 offset-l4 offset-m3" >
                              <div class="card white darken-1">
                                  <div class="card-content ">
                                      <span class="card-title">Authentification</span>
                                       <div class="row">
                                           <form class="col s12" name="signin" method="post">
                                               <div class="input-field col s12">
                                                <p>Identifiant</p>
                                                   <input id="username" type="text" name="id" class="validate" autocomplete="off" required >
                                                   
                                               </div>
                                               <div class="input-field col s12">
                                                <p>Mot de passe</p>
                                                   <input id="password" type="password" class="validate" name="password" autocomplete="off" required>
                                                   
                                               </div>
                                               <div class="col s12 right-align m-t-sm">
                                                
                                                   <input type="submit" name="Identifier" value="Identifier" class="waves-effect waves-light btn teal">
                                               </div>
                                           </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                    </div>
                </div>
            </main>
        </div>
        
    </body>
</html>