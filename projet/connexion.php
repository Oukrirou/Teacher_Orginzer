<?php

if (isset($_POST["submit"])) {
    if ($_POST["username"]=="ostad" && $_POST["password"]=="1234") {

        echo "<h1>helllo motherfucker </h1> ";
    }
}
else echo "is not set yet";



?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="loginstyle.css">
    <title>Document</title>
</head>
<body>
<h1>  this a new h S</h1>


<div id="plate_login">
    <img src="Icon_login.jpg" id="icon">
    <fieldset>
        <p id="titre">Espace Admin</p>

        <form action="connexion.php" method="post">
            <label for="username">Utilisateur :</label>
            <input  id="username" type="text" name="username" >
            <br> <br> Mot de passe : <input type="password" name="password"> <br> <br>
            <center><input type="submit" name="submit" value="Connecter"></center>
        </form>
    </fieldset>
</div>
</body>
</html>