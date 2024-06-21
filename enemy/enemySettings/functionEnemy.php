<?php 

require ('../player.php');
$mysqli = new mysqli ("localhost","Mario","Mailswif22","rpg_php"); 

$sqli= "SELECT * FROM mob WHERE id =1 ";
            $resulti = $mysqli->query($sqli);
            $rowi = mysqli_fetch_assoc($resulti);


mysqli_query($mysqli,"UPDATE mob  SET hp = hp - $row[strength] / $rowi[defenses] WHERE id =1" ); 
mysqli_query($mysqli,"UPDATE player  SET hp = hp - $rowi[strength] / $row[defense] WHERE name ='$_SESSION[name]'" ); 

    
    



header("location: ../Poulet.php");
