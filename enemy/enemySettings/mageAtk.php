<?php
    $mysqli = new mysqli ("localhost","Mario","Mailswif22","rpg_php"); 
    require ('../player.php');
    session_start();
    $sqlm= "SELECT * FROM mob WHERE id = 4";
    $resultm = $mysqli->query($sqlm);
    $rowm = mysqli_fetch_assoc($resultm);
 
        
    if (isset($_POST["valider"])) {
            $tirageJoueur= $_POST["game-select"];
            $tirageOrdi = array(1, 2, 3);
            $chanceKey = array_rand($tirageOrdi,1);
            $tirageMage = $tirageOrdi[$chanceKey];
                
            echo "Tirage joueur : $tirageJoueur";
            echo "Tirage mage : $tirageMage";
                if ($tirageJoueur == $tirageMage){
                    $_SESSION["morpion"]="Egalité";
                    $tirageJoueur = null;
                    $tirageMage= null;
                    header("location: ../mage.php");
    
                   } else if (($tirageJoueur == 1 && $tirageMage== 3) || ($tirageJoueur== 2 && $tirageMage== 1) || ($tirageJoueur== 3 && $tirageMage== 2) ){
                    $_SESSION["morpion"]= "Le joueur gagne";
                                mysqli_query($mysqli,"UPDATE mob  SET hp = hp - $row[strength] / $rowm[defenses] WHERE id =4" );
                                $tirageJoueur = null;
                                $tirageMage= null;
               
                                 header("location: ../mage.php");
                        } else {
                            $_SESSION["morpion"]="Le mage gagne";
                                mysqli_query($mysqli,"UPDATE player  SET hp = hp - $rowm[strength] / $row[defense] WHERE name ='$_SESSION[name]'" );
                                $tirageJoueur = null;
                                $tirageMage= null;
                                header("location: ../mage.php");
                    }}
                             
    
                    
                   
                            