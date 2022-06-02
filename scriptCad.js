function inicio() {
    var password = document.getElementById("senha");
    var checkbox = document.getElementById("checkbox");
    var Tcheckbox = document.getElementById("Tcheckbox");

    if (checkbox.checked === true) {
        password.type = "password";
        Tcheckbox.innerHTML = "Revelar Senha";
    } else {
        password.type = "text";
        Tcheckbox.innerHTML = "Esconder Senha";
    }
}

function Cadastrar() {
    var usuario = document.getElementById("usuario");
    var senha = document.getElementById("senha");
    var email = document.getElementById("email");
    
    if(usuario.value.length < 0 || senha.value.length < 0 || email.value.length < 0){
        alert("Preencha todos os campos para prosseguir com o cadastro!");
    }else{
        alert("Prosseguindo com o cadastro!");
    }
    }