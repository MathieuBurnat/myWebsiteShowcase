<script src="view/login.js" defer></script>

<div id="login" class="login-modal">
    <form class="login-modal-content login-animate" action="/action-connect" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('login').style.display='none'" class="login-close" title="Close Modal">&times;</span>
            <img src="content/images/img_avatar.png" alt="Avatar" class="avatar">
        </div>

        <div class="login-container">
            <label for="uname"><b>Utilisateur</b></label>
            <input type="text" placeholder="Entrer un nom d'utilisateur" name="uname" required>

            <label for="psw"><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer un mot de passe" name="psw" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
            </label>
        </div>

        <div class="login-container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Annuler</button>
            <span class="psw"> Envie de <a href="/create-account"> créer son compte </a> ? </span>
        </div>
    </form>
</div>