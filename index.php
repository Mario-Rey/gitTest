<?php require ('settings/dataConnect.php');
include ('header.php');
$sql= "SELECT * FROM player WHERE name ='$_SESSION[name]' ";
$result = $mysqli->query($sql);
$row = mysqli_fetch_assoc($result);
$_SESSION["class"]=$row['class'];
 ?>

<body>
    <div class="homeFond">
        
        <div class="containerTitle">
            <div><img src="img\sword.png" width="70tr" 
            height="70" alt="poule" ></div>
            <div><p>Bonjour <b><?php  echo $_SESSION['class']?> </b><?php echo $_SESSION['name']?>,<br> le monde à besoin de pour délivrer le monde<br>du térrible mage </p></div>
        </div>  
        <div class="btnTitle">
            <button class="btnOut" type="button"><a href="logSetting/logOut.php">se déconecté</a</button>
        </div>    
    </div>
    
           
    
</body>

