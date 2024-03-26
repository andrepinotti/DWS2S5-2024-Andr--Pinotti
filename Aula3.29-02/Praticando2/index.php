<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>

    <link rel="stylesheet" href="dist/css/bootstrap.min.css">

    <style>
        body{
            margin: 40px;
        }

    </style>

</head>
<body>

    

    <h1 class="h1">Praticando 2 - Calculadora Média PHP </h1>
    <hr>

    <form action="destino.php" method="POST" class="form">
        <div class="row mb-3">
            <label for="nota2" class="col-sm-1 col-form-label">Nota 1:</label>
            <div class="col-sm-1">
                <input type="number" class="form-control" id="nota1" name="nota1" min="0" max="10">
            </div>
        </div>
        <div class="row mb-3">
            <label for="nota2" class="col-sm-1 col-form-label">Nota 2:</label>
            <div class="col-sm-1">
            <input type="number" class="form-control" id="nota2" name="nota2" min="0" max="10">
            </div>
        </div>
        <div class="row mb-3">
            <label for="nota3" class="col-sm-1 col-form-label">Nota 3:</label>
            <div class="col-sm-1">
                <input type="number" class="form-control" id="nota3" name="nota3" min="0" max="10">
            </div>
        </div>

        <button class="btn btn-success">Calcular Média</button>
        <button class="btn btn-warning" type="reset">Limpar</button>
    </form>

</body>
</html>