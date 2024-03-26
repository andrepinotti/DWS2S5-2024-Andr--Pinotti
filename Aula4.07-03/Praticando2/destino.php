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
    </style>

</head>
<body>
    <h1>Contador</h1>
    <hr>

    <div class="mb-4 mt-4">
        <h1>Parâmetros Informados</h1>
    </div>

    <?php
    

        $inicio = $_GET['inicio'];
        $fim = $_GET['fim'];
        $incremento = $_GET['incremento'];

        echo "Início: $inicio<p>";
        echo "Fim: $fim<br>";
        echo "Incremento: $incremento<p>";

        

        for($i=$inicio; $i<=$fim; $i += $incremento ){
          
            echo "$i ";
        }


    ?>

</body>
</html>