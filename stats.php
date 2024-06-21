<div class="containerStats">
<?php require ('settings/dataConnect.php');
include ('header.php');

//$set = "INSERT INTO player (name, password , class)
//VALUES ('mario', '4', 'guerrier')";

//$mysqli->query($set);

$sql= "SELECT * FROM player WHERE name ='$_SESSION[name]' ";
$result = $mysqli->query($sql);
$row = mysqli_fetch_assoc($result);
  //modifie l'image selon la classe
      ?> <div class="statBox">
      <div class="imgClass"><?php
      if ($row['class']=="Chevalier"){
        ?><img src="img/chevalier.png" width="500" 
        height="500" alt=""><?php
      }else if ($row['class']=="Mage"){
        ?><img src="img/mageP.png" width="500" 
        height="500" alt=""><?php
      }else{
        ?><img src="img/guerier.png" width="250" 
        height="500" alt=""><?php
      };
      ?></div><?php
      // affiche les stats
          $result = $mysqli->query($sql);
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
              ?><div class="stats"> <?php 
                echo "<div>Name: " . $row["name"]. " </div><div> Class: ". $row["class"]. " </div><div>Lv: ". $row["level"]. " </div><div>Xp: " . $row["xp"]." </div><div>Force: " . $row["strength"]. " </div><div>Défense: " . $row["defense"]. "<br></div>";
              ?> </div> </div><?php 
              }
            } else {
              echo "0 results";
            }
  $mysqli->close();

 ?>
 </div>