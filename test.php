<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mon Outil De Suivi Numérique</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>

    <?php

use LDAP\Result;

    $servername = "45.87.81.51";
    $username = "u762743532_Toinou3010";
    $password = "Matox3010";
    $dbname = "u762743532_test";
    
    // Create connection
    $conn = "mysql:dbname=$dbname;host=$servername";

    $db = new PDO($conn, $username, $password);

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    

    $sql = "SELECT * FROM `eleves` ORDER BY `eleves`.`nom` ASC";
    $requete = $db->query($sql);
    
    $result = $requete->fetchAll();
   
    
    ?>


    <body>
        <div class="e4_4">
            
        </div>


        <div id="hud">


        <div class="modal-container">
        <div class="overlay modal-trigger"> </div>
            <div class="modal" role="dialog">
            <button 
        aria-label="close modal"
        class="close-modal modal-trigger">X</button>
                <form>

                </form>
            </div>
        

        </div>


            <div id="buttons">
            <span  class="e4_8">Ma Classe</span>

            <div id="add"> 
                <button id="tt" class="modal-trigger" >
                <div id="l1"></div>
                <div id="l2"></div>
                </button>
            </div>
            </div>


            
            <div id="grid">
                <div id="center-grid">
                    
                <div class="container">

                    <?php foreach($result as $resulta): ?>

                        <div class="c">
                        <h2 class="infos"> <?= $resulta["Nom"]?> <?= $resulta["Prenom"] ?></h2>
                        </div>
                    <?php endforeach;?>
                </div>


            </div>



        </div>

        
        <script src="/app.js">
        </script>
    </body>
</html>