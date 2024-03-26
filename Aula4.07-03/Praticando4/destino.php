<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Tabela</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        body{
            margin: 40px;
        }

        table{
            margin: auto;
            width: 10vw;

        }
    </style>

</head>
<body>
    
    <h1>Praticando 4 - Gerador de Tabela</h1>
    <hr>

    <?php
    
        $linha = filter_input(INPUT_GET,"linha",FILTER_SANITIZE_NUMBER_INT);
        $coluna = filter_input(INPUT_GET, "coluna", FILTER_SANITIZE_NUMBER_INT);
        $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);

    ?>

    <h3>Tabela <?= $linha ?>x<?= $coluna?></h3>

    <table class="<?= $cor ?> border border-dark">
        
        <?php

            for($i=1; $i<=$linha; $i++){
                echo "<tr>";
                for($c=1; $c<=$coluna; $c++){
                    echo "<td class='border border-dark'>-</td>";
                }
                echo "</tr>";
            }

        ?>

    </table>

    <a href="index.php">Voltar ao formulário</a>

</body>
</html>