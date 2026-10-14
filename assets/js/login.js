
// LOGIN USANDO JQUERY

$(document).ready(function () {

    validarFormulario();

});


function validarFormulario() {

    const mensagem = document.getElementById("mensagem");

    $("#formLogin").validate({

        // Regras de validação
        rules: {

            email: {
                required: true,
                email: true
            },

            senha: {
                required: true,
                minlength: 6
            }

        },

        // Mensagens em português
        messages: {

            email: {
                required: "Informe o e-mail.",
                email: "Informe um e-mail válido."
            },

            senha: {
                required: "Informe a senha.",
                minlength: "A senha deve possuir no mínimo 6 caracteres."
            }

        },

        // Exibe a mensagem abaixo do campo
        errorElement: "div",

        errorPlacement: function (error, element) {

            error.addClass("invalid-feedback");

            error.insertAfter(element);

        },

        // Campo inválido
        highlight: function (element) {

            $(element)
                .removeClass("is-valid")
                .addClass("is-invalid");

        },

        // Campo válido
        unhighlight: function (element) {

            $(element)
                .removeClass("is-invalid")
                .addClass("is-valid");

        },

        // Executado quando o formulário estiver válido
        submitHandler: async function (formulario) {

            const dados = new FormData(formulario);

            console.table(
                Object.fromEntries(dados.entries())
            );

            if (mensagem) {
                mensagem.className = "alert alert-info mt-3";
                mensagem.textContent = "Verificando dados...";
            }

            /*
             * Próxima etapa:
             * Enviar os dados para controllers/LoginController.php
             */

            return false;

        }

    });

}
