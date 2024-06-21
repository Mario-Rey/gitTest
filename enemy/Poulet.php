<?php   
        
        require ('../settings/dataConnect.php');
        require ('player.php');
        include ('header.php');
        $sqli= "SELECT * FROM mob WHERE name ='Poulet' ";
        $resulti = $mysqli->query($sqli);
        $rowi = mysqli_fetch_assoc($resulti);
    
       
    if ($rowi['hp'] <= 0 ){
        mysqli_query($mysqli, "UPDATE player SET xp=xp +100 WHERE name='$_SESSION[name]' ");
        mysqli_query($mysqli, "UPDATE mob SET hp= maxHP WHERE id=1");
        header("Refresh:0; url=Poulet.php");
    }
?>
        <div class="containerMobStats">   
            <div>
                    <div class="mobAtk">
                        <p>Dégâts infligés:</p>
                        <div><?php echo  $row['strength'] / $rowi['defenses'];?></div>
                    </div>
                    <div class="mobAtk">
                        <p>Dégats recus;</p>
                        <div><?php echo $rowi['strength'] / $row['defense'];?></div>
                    </div>
            </div>
            <div class="statentity">    
                <h2>Stats ennemi</h2>
                <div><?php echo "Nom: ".$rowi['name'];?></div>
                <div><?php echo "Force: ".$rowi['strength'];?></div>
                <div><?php echo "Défence: ".$rowi['defenses'];?></div>
            </div>
        </div>  
    <div class="containerMob">
        
        
        <div class="imgAnime"><img  src="..\img\chicken.png" alt="poule"width="200" 
        height="200" ></div>
        <div><h2><?php echo "".$rowi['hp']."" ?></h2></div>
    
        <div><meter  id="hpPoulet"  min="0"  max="100" value=<?php $rowi['hp']?>><?php $rowi['hp']?></meter></div>
        </div>
        <form class="formAtk" action="enemySettings/functionEnemy.php" method="post"> 

                <input class="btnAtk" name="login" type="submit" value="attaque" />
        </form>     
        
        <?php mysqli_close($mysqli); 
        include ('footer.php'); ?>

