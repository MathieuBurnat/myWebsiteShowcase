<?php
    require('view/header.php');
    require('controller/controller.php');

    $ctrl = new Controller();
    $ctrl->CheckUserIsConnected();
?>

<!-- Display the connected button if the user is not connected-->
<?php if($ctrl->displayConnectedButton){ ?>
<button onclick="document.getElementById('login').style.display='block'" class="contact-connection-button">Se connecter</button>
<?php }else{ ?>
<div class="vertical-menu">
  <a href="" class="contact-hey-user-box">Welcome <?= $_SESSION["user"];?>!</a>
  <a href="/disconnect" class="contact-disconcect-box">Disconnect</a>
</div>
<?php } ?>

<div class="contact-container default-container"> 
    <div class="contact-content">
        <div class="container-calendar"> <?php require("view/calendar.php"); ?> </div>
    </div>

    <div class="contact-content">
        <div class="contact-case">objet</div>
        <textarea id="contact-area" name="contact-area" rows="4" cols="50"> </textarea>
        <!-- Display the submit button if the user is connected-->
        <?php if($ctrl->displaySubmitButton){ ?>
        <button onclick="document.getElementById('login').style.display='block'" class="contact-button">Envoyer</button>
        <?php }else{ ?>
        <button onclick="document.getElementById('login').style.display='block'" class="contact-button disconnected">Vous devez vous connecter afin de pouvoir envoyer votre message.</button>
        <?php } ?>
    </div>
</div>

<?php require("view/login.php"); ?>

<?php
    require('view/footer.php');
?>