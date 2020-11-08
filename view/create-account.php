<?php
    require('view/header.php');
?>

<form action="/action_page.php">
    <div class="contact-container">
        <h1> Créer un compte ! </h1>

        <label for="name"><b>Nom</b></label>
        <input type="text" placeholder="Enter votre nom" name="name" id="name" required>

        <label for="psw"><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer votre mot de passe" name="psw" id="psw" required>

        <label for="psw-repeat"><b>Mot de passe</b></label>
        <input type="password" placeholder="Répéter votre mot de passe" name="psw-repeat" id="psw-repeat" required>

        <button type="submit" class="registerbtn">Enregistrer</button>
        </div>

        <div class="container signin">
    </div>
</form>