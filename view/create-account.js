
function test(){
    var test = document.getElementById('name').value;

    if(test == "cactus"){
        document.getElementById("name").style.color = "green";
    }
}


function verifyPassword(){
    var password1 = document.getElementById('psw').value;
    var password2 = document.getElementById('psw-repeat').value;

    if(password1 !== password2)
    {
        document.getElementById("psw").classList.add('password-invalid');
        document.getElementById("psw-repeat").classList.add('password-invalid');
        document.getElementById("submitButton").classList.add('registerbtnDisabled');
        document.getElementById("error").innerHTML = "les mots de passe ne correspondent pas";
        document.getElementById('submitButton').disabled = true;
    }else{
        document.getElementById("psw").classList.remove('password-invalid');
        document.getElementById("psw-repeat").classList.remove('password-invalid');
        document.getElementById("submitButton").classList.remove('registerbtnDisabled');
        document.getElementById("error").innerHTML = "";
        document.getElementById('submitButton').disabled = false;
    }
}