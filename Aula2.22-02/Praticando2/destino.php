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
    <?php
        $titulo = $_POST["titulo"];
        $corpo = $_POST["corpo_pagina"];
        $cor_letra = $_POST["cor_letra"];
        $url_img = $_POST["url_image"];
        $url_link = $_POST["url_link"];
        $cor_fundo = $_POST["cor_fundo"];
    ?>

    <h1><?php echo $titulo; ?></h1>

    <hr>

    <h3> <?php echo $corpo ?> </h3>

    <img src="<?php echo $url_img ?>" alt="">

   
    <p>
        <a href="index.php">Voltar para a Home</a>
    </p>

    <style>
        body{
            background-color: <?php  echo $cor_fundo; ?>;
            color: <?php echo $cor_letra ?>; 
        }
    </style>



</body>
</html>