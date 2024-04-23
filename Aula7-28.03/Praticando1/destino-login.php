<?php
session_start();

require "header.php";

$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

    //users <-- epansani --> <-- andrepinotti -->
    //password <-- senha_da_nasa -->
    if(isset($user) && isset($password)){
        if($user == "epansani" || $user == "andrepinotti"){
            if($password == "senha_da_nasa"){
                $_SESSION['user'] = $user;
                header("Location: index.php");
                exit();
            }
        } else 

            echo "<div class='alert alert-danger' role='alert'>
                <h4>Falha ao efetuar a autenticação</h4>";

            if($user != "epansani" || $user != "andrepinotti"){
                echo  "<p class=''>O usuário não foi encontrado</p>";
                unset($_SESSION['user']);
            }  
            
            if($password != 'senha_da_nasa'){
                echo "<p>Senha incorreta</p>";            
                unset($_SESSION['user']);
            }

            echo "<p class='ml-1'>Verifique as informações e tente novamente</p>
                <hr>
                <a href='autentication.php'>Clique aqui para voltar</a>
            </div>";

    }
    
?>


<?php
    require "footer.php";
?>