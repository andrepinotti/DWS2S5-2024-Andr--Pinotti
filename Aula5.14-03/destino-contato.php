<?php
    require 'header.php';
?>

<div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Formulário de Contato</h1>
</div>

<?php
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $mensagem = $_GET['mensagem'];

?>

    <p>Nome Informado: <?= $nome?></p>
    <p>Email: <?= $email?></p>
    <p>Mensagem: <?= $mensagem?></p>
    <p>Data: <?= date("d/m/y")?> - <?= date('H:i:s')?></p>

    <?php 
        // fopen fwrite fclose
        if(!empty($nome) && !empty($email) && !empty($mensagem)){
            $name = 'Contatos/Contato.txt';
            $dados = "Nome informado: $nome \n 
                        E-mail: $email \n 
                        Mensagem: $mensagem \n";

            $arquivo = fopen($name, "w");
            fwrite($arquivo, $dados);
            fclose($arquivo);
        }
    ?>

<?php
    require 'footer.php';
?>