<!DOCTYPE html>
<html lang="en">
<head>
    <?php  session_start();
    

    if(!isset($_SESSION['name'])){
       header("location: connect.php");
       die();
    }
 ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <ul>
                <li><a href="Index.php">Home</a></li>
                <li><a href="stats.php">stats</a></li>
                <li><a href="mob.php">monstre</a></li>
                <li><a href="rank.php">Rank</a></li>
            </ul>
        </div>
    </div>
    



    
</body>
</html>