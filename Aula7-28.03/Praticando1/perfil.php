<?php
    session_start();
    date_default_timezone_get('America/Sao_Paulo');

    if(!isset($_SESSION['user']) || empty($_SESSION['user'])){
        $_SESSION['erro'] = "Você está tentando acessar uma página restrita";
        header("Location: index.php");
    }


    require "header.php";
?>

    <?php
        if($_SESSION["user"] == "epansani"){
    ?>
        <p>Nome:<strong>Eder Pansani</strong></p>
        <p>Email:<strong>epansani@gmail.com</strong></p>
        <p>Telefone:<strong>(17)3426-6999</strong></p>
        <p>Endereço:<strong>Rua dos Alfeneteiros, número 4</strong></p>
        <p>Cidade:<strong>Little Whinging</strong></p>
        <p>Estado:<strong>Surrey</strong></p>
    <?php
        }
    ?>

    <?php
        if($_SESSION['user'] == 'andrepinotti'){
    ?>
        <p>Nome:<strong>André Pinotti</strong></p>
        <p>Email:<strong>andrepinotti0@gmail.com</strong></p>
        <p>Telefone:<strong>(17)3231-4271</strong></p>
        <p>Endereço:<strong>Rua Antônio Fernandes Billar, número 166</strong></p>
        <p>Cidade:<strong>São José do Rio Preto</strong></p>
        <p>Estado:<strong>São Paulo</strong></p>
    <?php
        }
    ?>

<?php
    require "footer.php"
?>