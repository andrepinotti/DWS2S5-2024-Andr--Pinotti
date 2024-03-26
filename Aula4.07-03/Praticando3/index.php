<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 3 - Números Primos</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
            margin: 40px;
        }

        .numeros__primos{
            display: flex;
            justify-content: space-evenly;
            flex-direction: row;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .numeros__primos p {
            width: 12px;
        }

        .box__verde__confirmacao{
            text-align: center;
            width: 20px;
            background-color: #90ee90;
            border: 1px solid green;
        }

        .box__verde__par{
            text-align: center;
            width: 100px;
            background-color: #90ee90;
            border: 1px solid green;
        }

        .box__verde__primo{
            text-align: center;
            width: 120px;
            background-color: #90ee90;
            border: 1px solid green;
        }

        .box__red__confirmacao{
            text-align: center;
            width: 20px;
            background-color: #ff6961;
            border: 1px solid red;
        }

        .box__red__primo{
            text-align: center;
            width: 120px;
            background-color: #ff6961;
            border: 1px solid red;
        }

        .box__red{
            text-align: center;
            width: 100px;
            background-color: #ff6961;
            border: 1px solid red;
        }


    </style>

</head>
<body>
    <h1>Praticando 3 - Números Primos</h1>
    <hr>

    <?php
        $numero = $_GET['numero'];



    ?>

    <div class="numeros__primos">
        <a href="index.php?numero=1">
            <p> Número 1</p>
        </a>

        <a href="index.php?numero=2">
            <p> Número 2</p>
        </a>

        <a href="index.php?numero=3">
            <p> Número 3</p>
        </a>

        <a href="index.php?numero=5">
            <p> Número 5</p>
        </a>

        <a href="index.php?numero=20">
            <p> Número 20</p>
        </a>

        <a href="index.php?numero=32">
            <p> Número 32</p>
        </a>

        <a href="index.php?numero=37">
            <p>  Número 37</p>
        </a>

    </div>


    <?php 
            $contador = 0;

            for($i=1; $i<=$numero; $i++){
                if($numero % $i === 0 ){
                    $contador++;
                }

            }

            if(isset($numero)){
                if(($contador == 2) && ($numero % 2 === 0 )){
                    echo "<p><h2>O número <span class='box__verde__confirmacao'>$numero</span> <span class='box__verde__confirmacao'>é</span> <span class='box__verde__primo'>PRIMO</span> . Além disso é um número <span class='box__verde__par'>PAR</span></h2>";
                }
                    else if((($contador == 2) && ($numero % 2 != 0 ))){
                        echo "<p><h2>O número <span class='box__verde__confirmacao'>$numero</span> <span class='box__verde__confirmacao'>é</span> <span class='box__verde__primo'>PRIMO</span> . Além disso é um número <span class='box__verde__par'>ÍMPAR</span></h2>";
                    }
                        else if((($contador != 2) && ($numero % 2 === 0 ))){
                            echo "<p><h2>O número <span class='box__red__confirmacao'>$numero</span> <span class='box__red'> não é </span> um número <span class='box__red__primo'>PRIMO</span>. Além disso é um número <span class='box__red'>PAR</span> </h2>";
                                }
                           
                            else if((($contador != 2) && ($numero % 2 != 0 ))){
                                echo "<h2>O número <span class='box__red__confirmacao'>$numero</span> <span class='box__red'> não é </span> um número <span class='box__red__primo'>PRIMO</span>. Além disso é um número <span class='box__red'>ÍMPAR</span> </h2>";
                            }
            }

        
        
    ?>

    <a href="index.php"><button class="btn btn-warning">Limpar</button></a>


</body>
</html>