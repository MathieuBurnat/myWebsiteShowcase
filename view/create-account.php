<?php
    require('view/header.php');
?>
<script src="view/create-account.js" defer></script>

<form action="/action_page.php" class="register-container">
    <h1> Créer un compte ! </h1>

    <label for="name"><b>Nom</b></label>
    <input type="text" placeholder="Enter votre nom" name="name" id="name" onchange="test()" required>

    <label for="psw"><b>Mot de passe</b></label>
    <input type="password"  placeholder="Entrer votre mot de passe" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Répéter le mot de passe</b></label>
    <input type="password" placeholder="Répéter votre mot de passe" name="psw-repeat" id="psw-repeat" onchange="verifyPassword()" required>
    <p id="error" class="error"></p>
    <button type="submit" id="submitButton" class="registerbtn">Enregistrer</button>
</form>