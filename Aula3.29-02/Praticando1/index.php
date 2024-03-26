<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino GET</title>

    <link rel="stylesheet" href="dist/css/bootstrap.min.css">




    <style>
        body{
            margin: 50px;
            background-color: 
                    <?php    if(isset($_GET['cor'])){
                                $cor = $_GET['cor'];
                                if($cor == 'green' || $cor == 'red' || $cor = 'blue' ){
                                    echo $cor;
                                }
                                else if(empty($cor)){
                                    echo "#fff";
                                }
                            }
                    
                
            ?>;
        }

        .container__colors{
            display: flex;
            justify-content: space-around;
            flex-direction: row;
        }

        .square__1{
            margin-top: 10vh;
            width: 300px;
            height: 300px;
            background-color: green; 
            border: 2px solid black;
        }

        .square__2{
            margin-top: 10vh;
            width: 300px;
            height: 300px;
            background-color: red;
            border: 2px solid black;
        }
        .square__3{
            margin-top: 10vh;
            width: 300px;
            height: 300px;
            background-color: blue;
            border: 2px solid black;
        }
    </style>
</head>
<body>
    
    <h1>Destino GET</h1>
    <hr>


    <?php 
    
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $cor = $_GET['cor'];

        echo "<p> <h3>Nome: $nome</h3><p>
                <h3>Email: $email</h3><p>"
    ?>

    <a href="index.php?nome=Eder&email=epansani@gmail.com&cor=<?= $cor?>">
        Enviar dados [nome = Eder | email = epansani@gmail.com]
    </a>
    <br><br>
    <a href="index.php?nome=Dalva&email=dalvapede@gmail.com&cor=<?= $cor ?>">
        Enviar dados [nome=Dalva | email = dalvapede@gmail.com]
    </a>
    <br><br>
    <a href="index.php">
        Limpar Dados
    </a>


    <div class="container__colors">
        <a href="index.php?nome=<?= urlencode($nome)?>&email=<?= urlencode($email)?>&cor=green">
            <div class="square__1">
            </div>
        </a>
        <a href="index.php?nome=<?= urlencode($nome)?>&email=<?= urlencode($email)?>&cor=red">
            <div class="square__2">
            </div>
        </a>
        <a href="index.php?nome=<?= urlencode($nome)?>&email=<?= urlencode($email)?>&cor=blue">
            <div class="square__3">      
            </div>        
        </a>

    </div>


</body>
</html>