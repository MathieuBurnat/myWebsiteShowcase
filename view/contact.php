<?php
    require('view/header.php');
?>

<div class="contact-container default-container">
    <div class="contact-content">
        <div class="container-calendar"> <?php require("view/calendar.php"); ?> </div>
    </div>

    <div class="contact-content">
        <div class="contact-case">objet</div>
        <textarea id="contact-area" name="contact-area" rows="4" cols="50"> </textarea>
    </div>
</div>

<button onclick="document.getElementById('login').style.display='block'" class="contact-button">Se connecter</button>
<?php require("view/login.php"); ?>

<?php
    require('view/footer.php');
?>