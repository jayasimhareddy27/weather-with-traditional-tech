<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_SESSION['success'])){
            echo('<p style="color:green">'. $_SESSION['account'].' '.$_SESSION["success"].'</p>');
        }
        unset($_SESSION['success']); 
    ?>
        <p>This is where a cool application would be.</p>
        <p>Please <a href="logout.php">Log Out</a> when you are done.</p>
    <?php 
    
    ?>

</body>
</html>