<?php require ('settings/dataConnect.php');

?>
<head> <link rel="stylesheet" href="styles.css"> </head>
<div class="loginContainer">

<h1 class="phprpg">RPG PHP<img src="img/sword.png" alt=""width="50" 
height="50"> </h1>
<!--formulaire d'inscription -->
<div class="formConnect">
            <p>Inscription:</p>
        <div class="formRegister">
            <form action="logSetting\register.php" method="post">       
                <div><label for="name">nom:</label> 
                    <input id="name" name="name" required="" type="text" /></div>
                <div><label for="password">mot de passe:</label>
                    <input id="password" name="password" required="" type="text" /></div>

                <div><label for="class-select">la class</label>
                    <select name="class-select" id="class-select">
                        <option  value="Guerrier">Guerrier</option>
                        <option value="Chevalier">Chevalier</option>
                        <option value="Mage">Mage</option><br>
                </select></div>
                    <div><input name="register" type="submit" value="s'inscrire" /></div>
            </form><br>
        </div>




        <!--formulaire de login-->
            <p>login:</p>
        <div class="formLogin">
            <form action="logSetting/loging.php" method="post"> 
                <div><label for="name">nom:</label> 
                    <input id="name" name="name" required="" type="text" /></div>
                <div><label for="password">mot de passe:</label>
                    <input id="password" name="password" required="" type="text" /></div>
                    <div><input name="login" type="submit" value="se connecter" /></div>
            </form>     
        </div>
    </div>
</div>