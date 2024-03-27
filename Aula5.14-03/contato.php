<?php 
    require 'header.php'
?>

    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Formulário de Contato</h1>
    </div>


    <form action="destino-contato.php" method="get">

        <div class="row mb-3">
            <div class="form-group col-md-6">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Digite seu email">
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="mensagem">Mensagem</label>
            <textarea class="form-control" name="mensagem" rows="5"></textarea>
        </div>
        
<!-- d-flex justify-content-center -->
        <div class="d-flex justify-content-center ">
            <button class="btn btn-primary me-2" type="submit">Enviar</button>
            <button class="btn btn-warning" type="reset">Limpar</button>
        </div>        

    </form>


<?php
    require 'footer.php'
?>