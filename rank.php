<?php require ('settings/dataConnect.php');
include ('header.php');



//affiche le rank
$sql = "SELECT id, name, password, class, xp, level, strength,defense FROM player ORDER BY strength DESC";
$result = $mysqli->query($sql);
 ?><div class=ranking><h1>Ranking:</h1></div><?php
if ($result->num_rows > 0) {
  ?> <div class="rank"><?php
    while($row = $result->fetch_assoc()) {
      echo " Nom: " . $row["name"]. " Class: ". $row["class"]. " Xp: " . $row["xp"]." Force: " . $row["strength"]. " Défense: " . $row["defense"]. "<br> ";
    }
  } else {
    echo "0 results";
  }
  ?></div><?php
  $mysqli->close();
  
 ?>
