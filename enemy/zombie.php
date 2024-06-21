<?php   
        
        require ('../settings/dataConnect.php');
        require ('player.php');
        include ('header.php');
        $sqlz= "SELECT * FROM mob WHERE id = 2";
        $resultz = $mysqli->query($sqlz);
        $rowz = mysqli_fetch_assoc($resultz);
    
       
    if ($rowz['hp'] <= 0 ){
        mysqli_query($mysqli, "UPDATE player SET xp=xp +500 WHERE name='$_SESSION[name]' ");
        mysqli_query($mysqli, "UPDATE mob SET hp= maxHP WHERE id=2");
        header("Refresh:0; url=zombie.php");
    }
?>
        <div class="containerMobStats">   
            
            <div>
                    <div class="mobAtk">
                        <p>Dégâts infligés:</p>
                        <div><?php echo  $row['strength'] / $rowz['defenses'];?></div>
                    </div>
                    <div class="mobAtk">
                        <p>Dégats recus;</p>
                        <div><?php echo $rowz['strength'] / $row['defense'];?></div>
                    </div>
            </div>
            <div class="statentity">    
                <h2>Stats ennemi</h2>
                <div><?php echo "Nom: ".$rowz['name'];?></div>
                <div><?php echo "Force: ".$rowz['strength'];?></div>
                <div><?php echo "Défence: ".$rowz['defenses'];?></div>
            </div>
        </div>  
    <div class="containerMob">
        
        
        <div class="imgAnime"><img src="..\img\zombie.png" alt="poule" width="350" 
        height="200" ></div>
        <div><h2><?php echo "".$rowz['hp']."" ?></h2></div>
    
        <div><meter  id="hpPoulet"  min="0"  max="100" value=<?php $rowz['hp']?>><?php $rowz['hp']?></meter></div>
        </div>
        <form class="formAtk" action="enemySettings/zombieAtk.php" method="post"> 

                <input class="btnAtk" name="login" type="submit" value="attaque" />
        </form>     
        <?php mysqli_close($mysqli); 
        include ('footer.php'); ?>

