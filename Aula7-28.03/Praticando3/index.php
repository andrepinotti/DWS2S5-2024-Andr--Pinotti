<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    
    

    <style>
        body{
            margin: 30px;
        }
    </style>

</head>

<body>
    <div class="container">
        <h1>Formulário de cadastro</h1>
        <hr/>
        <div class="row">
            <form>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome completo:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?= $nome ?>">
            </div>
            <div class="row mb-3">
                <div class="col-4">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="number" class="form-control" id="telefone" name="telefone" placeholder="(DD) XXXXX-XXXX" value="<?= $telefone ?>">
                </div>
                <div class="col-8">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" value="<?= $email ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="number" class="form-control" id="cpf" name="cpf" placeholder="XXX.XXX.XXX-XX" value="<?= $cpf ?>">
                </div>
                <div class="col-4">
                <label for="data" class="form-label">Data de nascimento:</label>
                <input type="date" class="form-control" id="data" name="data" value="<?= $data ?>">
                </div>
                <div class="col-4">
                <label for="cep" class="form-label">CEP:</label>
                <input type="number" class="form-control" id="cep" name="cep" placeholder="XX.XXX-XXX" value="<?= $cep ?>">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="reset" class="btn btn-warning">Limpar</button>
            </form> 
        </div>
    </div>

</body>
</html>