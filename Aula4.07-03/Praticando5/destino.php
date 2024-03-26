<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        body{
            margin: 40px;
        }

        .padding{
            padding: 20px;
        }
    </style>


</head>
<body>
    <h1>Formulário</h1>
    <hr>


    <h3>Dados da requisição</h3>
    <div class="padding border border-success">
        <?php

        //    $checkbox = filter_input(INPUT_POST, 'checkbox' , FILTER_REQUIRE_ARRAY);
            $checkbox = $_POST['checkbox'];
            var_dump($checkbox);
        ?>

        
    </div>
    <br><br>
    <h3>Interesses Selecionados(em ordem alfabética)</h3>

    <ul>
    <?php
         sort($checkbox);
        
        
        for($i=0; $i<3; $i++){
            if(isset($checkbox[$i]) && !empty($checkbox[$i])){
                echo "<li>$checkbox[$i]</li>"; 
            }
        }
        if(count($checkbox) > 3){
            echo "<li>...</li>";
        }
    ?>
    </ul>

    <br><br>
    <a href="index.php">Voltar para o formulário</a>

</body>
</html>