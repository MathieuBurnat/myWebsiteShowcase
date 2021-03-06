<?php
    require('view/header.php');

    $ctrl = new UserManager();
    $ctrl->CheckUserIsConnected();
?>

<!-- Display the connected button if the user is not connected-->
<?php if($ctrl->displayConnectedButton){ ?>
<button onclick="document.getElementById('login').style.display='block'" class="contact-connection-button">Se connecter</button>
<?php }else{ ?>
<div class="vertical-menu">
  <a href="" class="contact-hey-user-box">Welcome <?= $_SESSION["user"];?>!</a>
  <a href="/action-disconnect" class="contact-disconcect-box">Disconnect</a>
</div>
<?php } ?>

<form action="/action-submit-content" method="post">
    <div class="contact-container default-container"> 
        <div class="contact-content">
            <div class="container-calendar"> <?php require("view/calendar.php"); ?> </div>
        </div>

        <div class="contact-content">
            <div class="contact-case case-normal">objet</div>
            <div class="contact-case case-list">
                <select name="list" id="list">
                    <option value="diver">Divers</option>
                    <option value="info-dev">Développement</option>
                    <option value="info-crea">Créatif</option>
                    <option value="marketing">Marketing</option>
                </select>
            </div>
            <textarea id="contact-area" name="contact-area" rows="4" cols="50"> </textarea>
            <!-- Display the submit button if the user is connected-->
            <?php if($ctrl->displaySubmitButton){ ?>
            <button class="form-button" type="submit">Envoyer</button>
            <?php }else{ ?>
            <button class="contact-button disconnected">Vous devez vous connecter afin de pouvoir envoyer votre message.</button>
            <?php } ?>
            <?= Messager::$contactOutputMessage; ?>

        </div>
    </div>
</form>


<?php
    require("view/login.php");
    require('view/footer.php');
?>