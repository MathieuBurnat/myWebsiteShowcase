<script src="view/scripts.js" defer></script>

<div id="login" class="login-modal">
    <form class="login-modal-content login-animate" action="/action-connect" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('login').style.display='none'" class="login-close" title="Close Modal">&times;</span>
            <img src="content/images/img_avatar.png" alt="Avatar" class="avatar">
        </div>

        <div class="login-container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="login-container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw"> Want to<a href="/create-account"> creat an account </a> ? </span>
        </div>
    </form>
</div>