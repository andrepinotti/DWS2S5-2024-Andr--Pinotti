<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino de Dados</title>
    
    <link rel="stylesheet" href="/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <h1>Formulário</h1>

    <?php
    
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $color = $_POST["color"];

        print_r($_POST);
    ?>

    <p>
        <a href="index.php">Voltar para a Home</a>
    </p>
</body>
</html>