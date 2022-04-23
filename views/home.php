<?php require_once 'nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    

</head>
<body>
    <div class="container">
        <div class="item">
                city<input type="text" name="city" id="city">
                <button type="submit" onclick="display()">submit</button>    

        </div>
         <div class="item">
            <div class=""><p id="temp"></p></div>
            <div class=""><p id="weather"></p></div>
            <div class=""> <img id="myimg"></div>
        </div>
    </div>



    <script src="app\src\ajax.js"></script>
</body>
</html>

<?php
require_once 'footer.php';
?>