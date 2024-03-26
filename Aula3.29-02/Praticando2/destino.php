<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="dist/css/bootstrap.min.css">


    <style>
        body{
            margin: 40px;
        }

        #reprovado{
            color: crimson;
            text-decoration: underline;
        }

        #aprovado{
            color: forestgreen;
            text-decoration: underline;
        }

        #recuperacao{
            color: gold;
            text-decoration: underline;
        }

    </style>

    <title>Resultado</title>
</head>
<body>
    
    <?php
    
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        $resultado = ($nota1 + $nota2 + $nota3) / 3;

    ?>

    <h1 class="h1">Praticando 2 - Calculadora Média PHP</h1>
    <hr>

    <h3 class="h3">Um aluno com as notas <strong><?= $nota1?></strong>, <strong><?= $nota2?></strong> e <strong><?= $nota3?></strong> tem uma média igual a <?= $resultado?></h3>
        <br>
    <h3 class="h3">Com essa média o aluno está <?php
        if($resultado <= 4){
            echo "<span id='reprovado'>REPROVADO</span>";
        } elseif($resultado > 4 && $resultado < 6){
            echo "<span id='recuperacao'>de Recuperação</span>";
        } else{
            echo "<span id='aprovado'>APROVADO</span>";
        }
    
    ?></h3>

</body>
</html>