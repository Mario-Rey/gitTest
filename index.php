<?php require ('settings/dataConnect.php');

 ?>

<body>
    <div class="homeFond">
        <?php include ('header.php');?>
        <div class="containerTitle">
            <div><img src="img\sword.png" width="70" 
            height="70" alt="poule" ></div>
            <div><p>Bonjour hero <?php echo $_SESSION['name']?>,<br> le monde à besoin de pour délivrer le monde<br>du térrible mage </p></div>
        </div>  
        <div class="btnTitle">
            <button class="btnOut" type="button"><a href="logSetting/logOut.php">se déconecté</a</button>
        </div>    
    </div>
    
           
    
</body>

