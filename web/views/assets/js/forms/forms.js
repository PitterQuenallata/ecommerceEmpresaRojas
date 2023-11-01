/*=============================================
Validación Bootstrap 5
=============================================*/
// quita el mensaje de error al escribir en el input 
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
})();

/*=============================================
Función para validar formularios
=============================================*/

function validateJS(event, type){

    if(type == "email"){

    var pattern = /^[.a-zA-Z0-9_]+([.][.a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/;
    
        if(!pattern.test(event.target.value)){
            $(event.target).parent().addClass("was-validated");
            $(event.target).parent().children(".invalid-feedback").html("El correo electrónico está mal escrito");
            event.target.value = "";
            return;
        }
    }
}

/*=============================================
Función para recordar email en el login
=============================================*/
//funcion para capturar el evento y el campo
function rememberEmail(event){

    if(event.target.checked){

    localStorage.setItem("emailAdmin", $('[name="loginAdminEmail"]').val());
    localStorage.setItem("checkRem", true);

    }else{

    localStorage.removeItem("emailAdmin");
    localStorage.removeItem("checkRem");

    }

}

//funcion para mostrar el email capturado del local storage
function getEmail(){

    if(localStorage.getItem("emailAdmin") != null){

        $('[name="loginAdminEmail"]').val(localStorage.getItem("emailAdmin"));

    }

    if(localStorage.getItem("checkRem") != null && localStorage.getItem("checkRem")){

        $("#remember").attr("checked", true);
    }

}

getEmail();
