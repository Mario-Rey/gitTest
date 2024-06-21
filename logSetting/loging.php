
    <?php session_start(); if (isset($_POST['login'])) { 

        
        $mysqli = new mysqli ("localhost","Mario","Mailswif22","rpg_php"); 
        
        
        if ($mysqli->connect_error) { die("Connection failed: " . $mysqli->connect_error); } 
        
        
            $stmt= $mysqli->prepare("SELECT id, password FROM player WHERE name = ?"); $stmt->bind_param("s", $name); 
        
        
            $name = $_POST['name']; 
            $password = $_POST['password']; 
        
                // Execute the SQL statement 
                $stmt->execute(); $stmt->store_result(); 
        
                // regarde si il existe
                if ($stmt->num_rows > 0) { 
        
                    // lie le resultat au variable
                    $stmt->bind_result($id, $hashed_password); 
        
                    // Fetch the result 
                    $stmt->fetch(); 
        
       
        
                     //Set les variable de la session 
                     $_SESSION['login'] = true; $_SESSION['id'] = $id; $_SESSION['name'] = $name; 
                     
                 // redirige la page  
                 header("location: ../index.php"); } } 

                // ferme connection 
                $stmt->close(); $mysqli->close();
        