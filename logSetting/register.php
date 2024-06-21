<?php  

 if (isset($_POST['register'])) { 
    $mysqli = new mysqli ("localhost","Mario","Mailswif22","rpg_php");

    $stmt = $mysqli->prepare("INSERT INTO player (name, password, class) VALUES (?, ?, ?)"); $stmt->bind_param("sss", $name, $password, $class);
//$set = "INSERT INTO player (name, password , class)
//VALUES ('$name', '$password', '$class')";
//$mysqli->query($set);
        $name= $_POST["name"]; 
        $password= $_POST['password'];
        $class= $_POST['class-select'];
        $password= password_hash("$password", PASSWORD_DEFAULT);
        

            if ($stmt->execute()) { echo "nouveau compte créer!"; } else { echo "Error: " . $stmt->error; } 
            sleep: 10;
}
            $stmt->close(); $mysqli->close();
            session_start();
            $_SESSION["name"]=$name;
            
            
            header("location: ../index.php");