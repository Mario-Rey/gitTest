<?php   
        
        require ('../settings/dataConnect.php');
        require ('player.php');
        include ('header.php');
        $sqlv= "SELECT * FROM mob WHERE id = 3";
        $resultv = $mysqli->query($sqlv);
        $rowv = mysqli_fetch_assoc($resultv);
    
       
    if ($rowv['hp'] <= 0 ){
        mysqli_query($mysqli, "UPDATE player SET xp=xp +1500 WHERE name='$_SESSION[name]' ");
        mysqli_query($mysqli, "UPDATE mob SET hp= maxHP WHERE id=3");
        header("Refresh:0; url=fermier.php");
    }
?>
        <div class="containerMobStats">   
            <div>
                    <div class="mobAtk">
                        <p>Dégâts infligés:</p>
                        <div><?php echo  $row['strength'] / $rowv['defenses'];?></div>
                    </div>
                    <div class="mobAtk">
                        <p>Dégats recus;</p>
                        <div><?php echo $rowv['strength'] / $row['defense'];?></div>
                    </div>
            </div>
            <div class="statentity">    
                <h2>Stats ennemi</h2>
                <div><?php echo "Nom: ".$rowv['name'];?></div>
                <div><?php echo "Force: ".$rowv['strength'];?></div>
                <div><?php echo "Défence: ".$rowv['defenses'];?></div>
            </div>
        </div>  
    <div class="containerMob">
        
        
        <div class="imgAnime"><img  src="..\img\fermier.png" width="200" 
        height="200" alt="poule" ></div>
        <div><h2><?php echo "".$rowv['hp']."" ?></h2></div>
    
        <div><meter  id="hpPoulet"  min="0"  max="100" value=<?php $rowv['hp']?>><?php $rowv['hp']?></meter></div>
    </div>
        <form class="formAtk" action="enemySettings/fermierAtk.php" method="post"> 

                <input class="btnAtk" name="login" type="submit" value="attaque" />
        </form>     
        <?php mysqli_close($mysqli); 
        include ('footer.php'); ?>

