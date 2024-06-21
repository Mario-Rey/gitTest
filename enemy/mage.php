<?php   
        
        require ('../settings/dataConnect.php');
        require ('player.php');
        include ('header.php');
        $sqlm= "SELECT * FROM mob WHERE id = 4";
        $resultm = $mysqli->query($sqlm);
        $rowm = mysqli_fetch_assoc($resultm);
    
       
    if ($rowm['hp'] <= 0 ){
        mysqli_query($mysqli, "UPDATE player SET xp=xp +500 WHERE name='$_SESSION[name]' ");
        mysqli_query($mysqli, "UPDATE mob SET hp= maxHP WHERE id=4");
        header("Refresh:0; url=mage.php");
    }
?>
        <div class="containerMobStats">   
            <div>
                    <div class="mobAtk">
                        <p>Dégâts infligés:</p>
                        <div><?php echo  $row['strength'] / $rowm['defenses'];?></div>
                    </div>
                    <div class="mobAtk">
                        <p>Dégats recus;</p>
                        <div><?php echo $rowm['strength'] / $row['defense'];?></div>
                    </div>
            </div>
            <div class="statentity">    
                <h2>Stats ennemi</h2>
                <div><?php echo "Nom: ".$rowm['name'];?></div>
                <div><?php echo "Force: ".$rowm['strength'];?></div>
                <div><?php echo "Défence: ".$rowm['defenses'];?></div>
            </div>
        </div>  
    <div class="containerMob">
        
        
        <div class="imgAnime"><img  src="..\img\mage.png" width="200" 
        height="150" alt="poule" ></div>
        <div><h2><?php echo "".$rowm['hp']."" ?></h2></div>
    
        <div><meter  id="hpPoulet"  min="0"  max="100" value=<?php $rowm['hp']?>><?php $rowm['hp']?></meter></div>
        <?php echo $_SESSION["morpion"];?>
    </div>
        <form class="formAtk" action="enemySettings/mageAtk.php" method="post"> 
                <select name="game-select" id="game-select">
                    <option  value='1'>pierre</option>
                    <option value='2'>feuille</option>
                    <option value='3'>ciseau</option><br>
            </select>
                <input class="btnAtk" name="valider" type="submit" value="VALIDER" />
        </form><br>
        
    
            
        <?php mysqli_close($mysqli); 
        include ('footer.php'); ?>
