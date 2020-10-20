<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Joey van der Kuijl | MD1A</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Joey van der Kuijl">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="style.css"> -->
    </head>
    
    <body>
    <form name="inlggen" action="" method="POST">
    <input type="text" name="email" value="iemand@mail.com">
    <input type="password" name="password" value="wachtwoord">
    <input type="submit" name="submit" value=" Inloggen ">
    </form>
    <?php 
    if(isset($_POST['submit'])) {
        echo "-----------Backend----------";
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        echo "<br>e-mail: $email";
        echo "<br>wachtwoord: $password";
    }
    ?>

    </body>
    <!-- <script src="script.js"></script> -->
</html>