<?php
    session_start();

    if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
        $_SESSION['erro'] = "Você já está autenticado!";
        header("Location: index.php");
    }

    require "header.php";
?>

    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Autenticação</h1>
    </div>

     <div class="d-flex justify-content-center">
        <form action="destino-login.php" class="col-md-2" method="post">
            
            <div class="mb-2">
                <label for="user" class="form-label">Usuário</label>
                <input type="text" class="form-control" name="user" required>
            </div> 
            
            
            <div class="mb-2">
                <label for="user" class="form-label">Senha</label>
                <input type="password" class="form-control" name="password" required> 
            </div>
            
            
            <button class="btn btn-primary" type="submit">Enviar</button>
            <button class="btn btn-warning" type="reset">Limpar</button>
            
        </form>

    </div> 





<?php
    require "footer.php"
?>