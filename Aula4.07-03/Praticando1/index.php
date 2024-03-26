<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        body{
            margin: 40px;
        }
    </style>


</head>
<body>
    <h1 class="h1">Praticando 1 - Tabuada</h1>
    <hr>
    
    <?php

        $tabuada = $_GET['tabuada'];
       
        
    ?>

    <form action="" method="get">
            <div class="row mb-3">
                <label for="tabuada" class="col-sm-1 col-form-label">Tabuada:</label>
                <div class="col-sm-1">
                    <input type="number" class="form-control"  name="tabuada" min="0" max="10">
                </div>
            </div>

        <a href="index.php?tabuada=<?= $tabuada ?>&resultado=<?php $resultado ?>"><button class="btn btn-success">Enviar</button></a>
        <a href="index.php"><button class="btn btn-warning" type="reset">Limpar</button></a>
    </form>

    <?php

        if(!empty($tabuada)){
            
            echo "<p><h3>Tabuada do $tabuada</h3><p>";

            for($i=0; $i<=10; $i++){
                $resultado = ($tabuada * $i);
                echo "$tabuada x $i = $resultado <p>";
            }
        }

    ?>

</body>
</html>