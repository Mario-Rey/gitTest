<?php
 
 require ('../settings/dataConnect.php');
$sql = "SELECT * From player
WHERE name ='$_SESSION[name]' ";

$result = $mysqli->query($sql);
 if ($result->num_rows > 0) {
  ?> <div class="footer"><?php
    if($row = $result->fetch_assoc()) {
    
      echo " <div>name: " . $row["name"]. " </div><div> class: ". $row["class"]. " </div><div>hp: ". $row["hp"]. " </div><div>lv: ". $row["level"]. " </div><div>xp: " . $row["xp"]." </div><div>force: " . $row["strength"]. " </div><div>défense: " . $row["defense"]. "<br></div>";
    ?> </div><?php 
    }
  } else {
    echo "0 results";
  }

  $mysqli->close();
?> </div> <?php
 ?>