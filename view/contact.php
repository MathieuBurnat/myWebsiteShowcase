<?php
    require('view/header.php');
?>
<h1> Welcome to contact. </h1>

<h2>Modal Login Form</h2>


<?php require("view/calendar.php"); ?>


<button onclick="document.getElementById('login').style.display='block'" style="width:auto;">Se connecter</button>
<?php require("view/login.php"); ?>
