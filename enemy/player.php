<?php 

session_start();
$mysqli = new mysqli ("localhost","Mario","Mailswif22","rpg_php");


$sql= "SELECT * FROM player WHERE name ='$_SESSION[name]' ";
$result = $mysqli->query($sql);
$row = mysqli_fetch_assoc($result);

if ($row['hp'] <= 0 ){
    header("location:../index.php");
    mysqli_query($mysqli,"UPDATE player  SET hp = hpMax WHERE name ='$_SESSION[name]'" );
}
//le syteme de leveling
if ($row['xp'] > $row['strength'] * $row['defense'] / 50){
    if($row['class']== "Mage"){
        mysqli_query($mysqli,"UPDATE player  SET strength = strength + 150 WHERE name ='$_SESSION[name]'" );
        mysqli_query($mysqli,"UPDATE player  SET xp = 0 WHERE name ='$_SESSION[name]'" );
        mysqli_query($mysqli,"UPDATE player  SET level = level + 1 WHERE name ='$_SESSION[name]'" );
     }if ($row['class']== "Chevalier"){
        mysqli_query($mysqli,"UPDATE player  SET strength = strength + 50 WHERE name ='$_SESSION[name]'" );
        mysqli_query($mysqli,"UPDATE player  SET defense = defense + 50 WHERE name ='$_SESSION[name]'" );
        mysqli_query($mysqli,"UPDATE player  SET hpMax = hpMax + 50 WHERE name ='$_SESSION[name]'" );
        mysqli_query($mysqli,"UPDATE player  SET xp = 0 WHERE name ='$_SESSION[name]'" );
        mysqli_query($mysqli,"UPDATE player  SET level = level + 1 WHERE name ='$_SESSION[name]'" );
     }if ($row['class']== "Guerrier"){
        mysqli_query($mysqli,"UPDATE player  SET defense = defense + 75 WHERE name ='$_SESSION[name]'" );
        mysqli_query($mysqli,"UPDATE player  SET hpMax = hpMax + 50 WHERE name ='$_SESSION[name]'" );
        mysqli_query($mysqli,"UPDATE player  SET strength = strength + 25 WHERE name ='$_SESSION[name]'" );
        mysqli_query($mysqli,"UPDATE player  SET xp = 0 WHERE name ='$_SESSION[name]'" );
        mysqli_query($mysqli,"UPDATE player  SET level = level + 1 WHERE name ='$_SESSION[name]'" );
     }
    
    
    
}   
    
    
        
            
    
?>