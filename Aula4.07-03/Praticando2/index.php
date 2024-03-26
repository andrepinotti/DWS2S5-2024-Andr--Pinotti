<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>

    <link rel="stylesheet" href="dist/css/bootstrap.min.css">

    <style>
        body{
            margin: 40px;
        }

        .form-control{
            width: 150px;
        }

        

    </style>


</head>
<body>
    <h1>Contador</h1>
    <hr>

        <form action="destino.php" method="get">


            <div class="mb-3 " >
                <label for="inicio" class="col-form-label">Início:</label>
                <input type="number" class="form-control" name="inicio" min="0" max="100">
            </div>


            <div class="mb-3">
                <label for="fim" class="col-form-label">Fim:</label>
                <input type="number" class="form-control" name="fim" min="0" max="100">
            </div>

            <div class="mb-3">
                <label for="incremento" class="col-form-label">Incremento:</label>
                <input type="number" class="form-control" name="incremento">
            </div>

            <button class="btn btn-success" type="submit">Enviar</button>
            <button class="btn btn-warning" type="reset">Limpar</button>
        
        </form>
        
</body>
</html>