function inicio(){
var password = document.getElementById("password");
var checkbox = document.getElementById("checkbox");
var Tcheckbox = document.getElementById("Tcheckbox");

if(checkbox.checked === true){
    password.type = "password";
    Tcheckbox.innerHTML = "Revelar Senha";
}else{
   password.type = "text"; 
   Tcheckbox.innerHTML = "Esconder Senha";
}
}

function Login() {
    var usuario = document.getElementById("usuario");
    var senha = document.getElementById("password");
    
    if(usuario.value.length < 1 || senha.value.length < 1){
        alert("Preencha todos os campos para prosseguir com o login!");
    }else{
        alert("Prosseguindo com o login!");
    }
}