document.querySelector("#continuar").addEventListener("click", validar);
document.querySelector("#reg").addEventListener("click", registrar);

function registrar(){
    window.location = "Registro.html";
}

function validar(){
    usuario = document.querySelector("#usu");
    password = document.querySelector("#pass");
    if(usuario.value == ""){
        password.style.border = "none";
        usuario.style.border = "1px solid #c90035";
    }else if(password.value == ""){
        usuario.style.border = "none";
        password.style.border = "1px solid #c90035";
    }else{
        usuario.style.border = "none";
        password.style.border = "none";
        alert("validar");
    }
}
