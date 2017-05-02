document.querySelector("#registro").addEventListener("click", validar);
document.querySelector("#pass2").addEventListener("keyup", validarPass);

function validar(){
    nombre = document.querySelector("#nom");
    apellidos = document.querySelector("#ap");
    direccion = document.querySelector("#dir");
    telefono = document.querySelector("#tel");
    mail = document.querySelector("#mail");
    usuario = document.querySelector("#usu");
    password1 = document.querySelector("#pass");
    password2 = document.querySelector("#pass2");
    apellidosSep = apellidos.value.split(" ");
    apellidoP = apellidosSep[0];
    apellidoM = apellidosSep[1];
    if(apellidosSep.length != 2){
        apellidoM = "";
    }
    if(nombre.value == ""){
        apellidos.style.border = "none";
        direccion.style.border = "none";
        telefono.style.border = "none";
        mail.style.border = "none";
        usuario.style.border = "none";
        password1.style.border = "none";
        password2.style.border = "none";
        nombre.style.border = "1px solid #c90035";
    }else if(apellidos.value == ""){
        nombre.style.border = "none";
        direccion.style.border = "none";
        telefono.style.border = "none";
        mail.style.border = "none";
        usuario.style.border = "none";
        password1.style.border = "none";
        password2.style.border = "none";
        apellidos.style.border = "1px solid #c90035";
    }else if(direccion.value == ""){
        nombre.style.border = "none";
        apellidos.style.border = "none";
        telefono.style.border = "none";
        mail.style.border = "none";
        usuario.style.border = "none";
        password1.style.border = "none";
        password2.style.border = "none";
        direccion.style.border = "1px solid #c90035";
    }else if(telefono.value == ""){
        nombre.style.border = "none";
        apellidos.style.border = "none";
        direccion.style.border = "none";
        mail.style.border = "none";
        usuario.style.border = "none";
        password1.style.border = "none";
        password2.style.border = "none";
        telefono.style.border = "1px solid #c90035";
    }else if(mail.value == ""){
        nombre.style.border = "none";
        apellidos.style.border = "none";
        direccion.style.border = "none";
        telefono.style.border = "none";
        usuario.style.border = "none";
        password1.style.border = "none";
        password2.style.border = "none";
        mail.style.border = "1px solid #c90035";
    }else if(usuario.value == ""){
        nombre.style.border = "none";
        apellidos.style.border = "none";
        direccion.style.border = "none";
        telefono.style.border = "none";
        mail.style.border = "none";
        usuario.style.border = "none";
        password1.style.border = "none";
        password2.style.border = "none";
        usuario.style.border = "1px solid #c90035";
    }else if(password1.value == ""){
        nombre.style.border = "none";
        apellidos.style.border = "none";
        direccion.style.border = "none";
        telefono.style.border = "none";
        mail.style.border = "none";
        usuario.style.border = "none";
        password1.style.border = "none";
        password1.style.border = "1px solid #c90035";
    }else if(password2.value != password1.value){
        nombre.style.border = "none";
        apellidos.style.border = "none";
        direccion.style.border = "none";
        telefono.style.border = "none";
        mail.style.border = "none";
        usuario.style.border = "none";
        password1.style.border = "none";
        password2.style.border = "1px solid #c90035";
    }else{
        nombre.style.border = "none";
        apellidos.style.border = "none";
        direccion.style.border = "none";
        telefono.style.border = "none";
        mail.style.border = "none";
        usuario.style.border = "none";
        password1.style.border = "none";
        password2.style.border = "none";
        alert(
            "Nombre: " + nombre.value + "\n" +
            "Apellido paterno: " + apellidoP + "\n" +
            "Apellido materno: " + apellidoM + "\n" +
            "Direccion: " + direccion.value + "\n" +
            "Telefono: " + telefono.value + "\n" +
            "Mail: " + mail.value + "\n" +
            "usuario: " + usuario.value + "\n" +
            "pass1: " + password1.value + "\n" +
            "pass2: " + password2.value
        );
    }

}

function validarPass(){
    password1 = document.querySelector("#pass");
    password2 = document.querySelector("#pass2");
    if(password1.value != password2.value){
        password2.style.border = "1px solid #c90035";
    }else{
        password2.style.border = "none";
    }
}
