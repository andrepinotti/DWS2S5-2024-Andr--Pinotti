<?php

use Claudsonm\CepPromise\CepPromise;
use Claudsonm\CepPromise\Exceptions\CepPromiseException;
use Claudsonm\CepPromise\Exceptions\CepPromiseProviderException;

require 'vendor/autoload.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca de CEP</title>

    <link rel="stylesheet" href="/dist/css/bootstrap.min.css">

    <style>
        body{
            margin: 40px;
        }
    </style>

</head>
<body>
        <div>
            <h1>Busca de CEP com Composer</h1>
            <hr>
        </div>

    <form class="row g-3" action="" method="POST">
        <div class="col-3">
            <div class="mb-2">
                <label for="cep"><strong>CEP:</strong></label>
                <input class="form-control" type="text" name="cep" id="cep" required autofocus placeholder="XXXXX-XXX" pattern="\d{5}-?\d{3}"> 
            </div>
        </div>
        <div class="col-4 mb-4">
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
                <a href="/"class="btn btn-primary">Limpar tudo</a>
            </div>
        </div>
    </form>

    
    

    <?php    
    
    try{

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //Pega o valor do CEP
            $cep = $_POST['cep'];
    
            $response = CepPromise::fetch($cep);
        
            
                echo "<div class='alert alert-success'>
                                <h3>CEP: $response->zipCode</h3>
                                <p>Rua: $response->street</p>
                                <p>Bairro: $response->district</p>
                                <p>Cidade: $response->city</p>
                                <p>Estado: $response->state</p>
                            </div>";
            

            
    
        }
    
    }
    catch(CepPromiseException $e){
        $errorMessage = $e->toArray();

        $arr = array(
            0 => "CEP não encontrado na base do ViaCEP.",
            1 => "Erro ao se conectar com o serviço CEP Aberto.",
            2 =>  "CEP inválido(nas bases do correio)."
        );

        echo "<div class='alert alert-danger'>
            <h3>CEP: $cep</h3>
            <p>Detalhes do erro</p>
            <ul>
                <li>$arr[0]</li>
                <li>$arr[1]</li>
                <li>$arr[2]</li>
            </ul>
        </div>";

    }

?>    
  
</body>
</html>
