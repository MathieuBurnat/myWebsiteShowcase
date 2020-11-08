<?php
    require('view/header.php');
    require('controller/controller.php');

    //dev-mode : set-unset the session's variable
    $enableSession = true;

    if($enableSession)
        $_SESSION["user"] = "Mathieu";
    else
        unset($_SESSION["user"]);

    $ctrl = new Controller();
    $ctrl->CheckUserIsConnected();
?>

<!-- Display the connected button if the user is not connected-->
<?php if($ctrl->displayConnectedButton){ ?>
<button onclick="document.getElementById('login').style.display='block'" class="contact-connection-button">Se connecter</button>
<?php }else{ ?>
<ul>
    <li>
        <div class="contact-hey-user-box-old">Welcome <?= $_SESSION["user"];?>!</div>
    </li>
    <li>
        <a class="contact-disconcect-box-old" href="https://www.w3schools.com">Disconnect</a>
    </li>
</ul>
<div class="vertical-menu">
  <a href="#" class="active">Welcome <?= $_SESSION["user"];?>!</a>
  <a href="#" class="disconnect">Disconnect</a>
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