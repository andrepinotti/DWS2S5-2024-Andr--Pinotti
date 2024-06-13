<?php 

$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_EMAIL);
$cor = filter_input(INPUT_GET, 'cor', FILTER_SANITIZE_SPECIAL_CHARS);

if (empty($nome) && empty($email) && empty($cor)) {
  $nome = $_COOKIE['nome'] ?? '';
  $email = $_COOKIE['email'] ?? '';
  $cor = $_COOKIE['cor'] ?? '';
  setcookie('nome', $nome, time() + 3600);
  setcookie('email', $email, time() + 3600);
  setcookie('cor', $cor, time() + 3600);
} else {
  setcookie('nome', $nome, time() + 3600);
  setcookie('email', $email, time() + 3600);
  setcookie('cor', $cor, time() + 3600);
}

?>
<html>
  <head>
    <title>Formulário de destino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        <?php 
          
        if ($cor) {
          echo "background-color: $cor";
        }  

        ?>
      }

      body{
        margin: 40px;
      }

      .quadrado {
        height: 300px;
        border: 1px solid #000;
      }

      #red {
        background-color: red;
      }

      #green {
        background-color: green;
      }

      #blue {
        background-color: blue;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Destino GET</h1>
      <hr/>
      <?php 
        
        if ($nome) {
            echo "<p>Nome: $nome</p>";
        }  

        if ($email) {
            echo "<p>Email: $email</p>";
        }

      ?>
      <p>
        <a href="index.php?nome=Eder&email=epansani@gmail.com&cor=<?= $cor ?>">[nome = Eder | email = epansani@gmail.com]</a>
      </p>
      <p>
        <a href="index.php?nome=André&email=andrepinotti0@gmail.com&cor=<?= $cor ?>">[nome = André | email = andrepinotti0@gmail.com]</a>
      </p>
      <p>
        <a href="index.php">Limpar tudo</a>
      </p>
      <div class="row" style="display: flex; justify-content: space-around">
        <a href="index.php?nome=<?= $nome ?>&email=<?= $email ?>&cor=lightcoral" class="col-3">
          <div id="red" class="quadrado"></div>
        </a>
        <a href="index.php?nome=<?= $nome ?>&email=<?= $email ?>&cor=lightgreen" class="col-3">
          <div id="green" class="quadrado"></div>
        </a>
        <a href="index.php?nome=<?= $nome ?>&email=<?= $email ?>&cor=lightblue" class="col-3">
          <div id="blue" class="quadrado"></div>
        </a>
      </div>
    </div>
  </body>
</html>