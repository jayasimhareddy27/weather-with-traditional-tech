<!-- model -->
<?php
    require_once 'mysql.php';
    session_start();
    if( isset($_POST['account']) && isset($_POST['pw']) ){
        unset( $_SESSION['account']);
        $username=$_POST['account'];
        $password=$_POST['pw'];
        $stat="SELECT name FROM users WHERE name = '$username' AND password = '$password'";
        $sql=$con->query($stat);
        $row=$sql->fetch_array(MYSQLI_ASSOC);
        var_dump($row);
        if($row!=false){
            $_SESSION['account']=$_POST['account'];
            $_SESSION['pw']=$_POST['pw'];
            $_SESSION['success']="logged in";
            header('Location: app.php');
            return;
        }
        else {
            $_SESSION['error']="Incorrect password";
            header('Location: login.php');
            return;     
        }
    }
?>
<!-- view -->

<?php
    require_once 'views\nav.php';
?>

<html>
<head>
</head>
<body style="font-family: sans-serif;">
<h1>Please Log In</h1>
    <?php
    if(isset($_SESSION['error'])){
        echo('<p style="color:red">'.$_SESSION['error'].'</p>');
        unset($_SESSION['error']);
    }
    ?>
<form method="post">
<p>Account: <input type="text" name="account" value=""></p>
<p>Password: <input type="text" name="pw" value=""></p>
<!--username:jayasimha1,gmail:jayasimhareddy1@gmail.com, password:kmit123$ -->
<p><input type="submit" value="Log In">
<a href="home.php">Cancel</a></p>
</form>
</body>



<?php
    require_once 'views\footer.php';
?>
