<?php

if (isset($_POST["submit"])) {
    if ($_POST["username"]=="ostad" && $_POST["password"]=="1234") {

        echo "<h1>helllo motherfucker  </h1> ";
    }
    else echo "<h3> utilisateur /mot de passe errone </h3>>";
}




?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="loginstyle.css">
    <title>Document</title>
    <style> h3{ color: #ff2126;}</style>
</head>
<body>



<div id="plate_login">
    <img src="Icon_login.jpg" id="icon">
    <fieldset>
        <p id="titre">Espace Admin</p>

        <form action="connexion.php" method="post">
            <label for="username">Utilisateur :</label>
            <input  id="username" type="text" name="username" placeholder="enter votre username">
            <br> <br> Mot de passe : <input type="password" name="password" placeholder="entrer votre mot de passe"> <br> <br>
            <center><input type="submit" name="submit" value="Connecter"></center>
        </form>
    </fieldset>
</div>
</body>
</html>