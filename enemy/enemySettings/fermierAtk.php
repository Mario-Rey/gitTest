<?php 

require ('../player.php');
$mysqli = new mysqli ("localhost","Mario","Mailswif22","rpg_php"); 

$sqlv= "SELECT * FROM mob WHERE id =3 ";
            $resultv = $mysqli->query($sqlv);
            $rowv = mysqli_fetch_assoc($resultv);


mysqli_query($mysqli,"UPDATE mob  SET hp = hp - $row[strength] / $rowv[defenses] WHERE id =3" ); 
mysqli_query($mysqli,"UPDATE player  SET hp = hp - $rowv[strength] / $row[defense] WHERE name ='$_SESSION[name]'" ); 

    
    



header("location: ../fermier.php");
