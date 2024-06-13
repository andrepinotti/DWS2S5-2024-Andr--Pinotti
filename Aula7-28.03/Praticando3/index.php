<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script>
        // Função para criar/atualizar o cookie com o valor do campo
        function updateCookie(fieldId, cookieName) {
            var fieldValue = document.getElementById(fieldId).value;
            document.cookie = cookieName + "=" + fieldValue + ";path=/";
            console.log("Cookie " + cookieName + " criado/atualizado com o valor: " + fieldValue);
        }

        // Função para carregar os valores dos cookies e preencher os campos do formulário
        function loadCookies() {
            var cookies = document.cookie.split("; ");
            for (var i = 0; i < cookies.length; i++) {
                var cookie = cookies[i].split("=");
                var field = document.getElementById(cookie[0]);
                if (field) {
                    field.value = cookie[1];
                    console.log("Campo " + cookie[0] + " preenchido com o valor do cookie: " + cookie[1]);
                }
            }
        }

        // Event listener para os campos do formulário
        document.addEventListener("DOMContentLoaded", function () {
            loadCookies();

            var formFields = document.querySelectorAll('input, select, textarea');
            formFields.forEach(function (field) {
                field.addEventListener("input", function () {
                    updateCookie(field.id, field.id);
                });
            });
        });
    </script>

    <style>
        body{
            margin: 40px;
        }
    </style>

</head>

<body>
    <div class="container">

        <h1 class="my-3">Formulário de cadastro</h1>
        <hr>

        <div class="row">
            <div class="col-8">
                <form class="row g-3" action="#" method="POST">
                    <div class="col-12">
                        <div class="mb-2">
                            <label for="nome">Nome completo:</label>
                            <input class="form-control" type="text" name="nome" id="nome" required>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="tel">Telefone</label>
                        <input class="form-control" type="tel" name="tel" id="tel" placeholder="(DD)XXXXX-XXXX"
                            required>
                    </div>
                    <div class="col-md-8 mb-2">
                        <label for="email">E-mail</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Digite seu email"
                            required>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="date">CPF</label>
                        <input class="form-control" type="text" name="cpf" id="cpf" placeholder="XXX.XXX.XXX-XX"
                            required>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="date">Data de Nascimento</label>
                        <input class="form-control" type="date" name="date" id="date" required>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="cep">CEP</label>
                        <input class="form-control" type="text" name="cep" id="cep" placeholder="XX.XXX-XXX" required
                            pattern="\d{2}\.\d{3}-\d{3}" title="Digite o CEP no formato XX.XXX-XXX">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        <button type="reset" class="btn btn-warning">Limpar</button>
                    </div>
                </form>
            </div>
            
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>