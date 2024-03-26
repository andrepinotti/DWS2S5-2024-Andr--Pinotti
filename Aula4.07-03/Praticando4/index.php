<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Gerador de Tabela</title>

    <style>
        body{
            margin: 40px;
        }

    </style>
</head>
<body>
    <h1>Praticando 4 - Gerador de Tabela</h1>
    <hr>

 
    <form method="get" action="destino.php">
            <div class="form-row">
                <div class="form-group col-md-2 mb-3">
                    <label for="linha">Linhas</label>
                    <input class="form-control" type="number" name="linha">
                </div>
                <div class="form-group col-md-2 mb-3">
                    <label for="coluna">Colunas</label>
                    <input type="number" class="form-control" name="coluna">
                </div>
                <div class="form-group col-md-2 mb-3">
                    <label for="cor">Estilo</label>
                    <select name="cor" class="form-select">
                        <option value="table table-danger">table-danger</option>
                        <option value="table table-success">table-success</option>
                        <option value="table table-warning">table-warning</option>
                        <option value="table table-dark">table-dark</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
            <button type="reset" class="btn btn-warning">Limpar</button>
        </form>

</body>
</html>




