<?php 

require ('../player.php');
$mysqli = new mysqli ("localhost","Mario","Mailswif22","rpg_php"); 

$sqlz= "SELECT * FROM mob WHERE id =2 ";
            $resultz = $mysqli->query($sqlz);
            $rowz = mysqli_fetch_assoc($resultz);


mysqli_query($mysqli,"UPDATE mob  SET hp = hp - $row[strength] / $rowz[defenses] WHERE id =2" ); 
mysqli_query($mysqli,"UPDATE player  SET hp = hp - $rowz[strength] / $row[defense] WHERE name ='$_SESSION[name]'" ); 

    
    



header("location: ../zombie.php");
