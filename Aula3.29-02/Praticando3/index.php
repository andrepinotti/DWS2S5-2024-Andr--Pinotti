

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 3</title>


    <link rel="stylesheet" href="dist/css/bootstrap.min.css">

    <style>
        body{
            margin: 40px;
        }

        .animais img{
            width: 300px;
            height: 300px;
            border: 2px solid black;
        }

        .collection__photos{
            display: flex;
            justify-content: center;
            flex-direction: row;
            margin-bottom: 30px;
            gap: 15px;
        }

        .borda-vermelha{
           border-color: red !important;
        }


    </style>

        

</head>
<body>
    <h1 class="h1">Praticando 3 - Animais</h1>
    <hr>


    
<?php 
    $animal = $_GET['animal'];
    $ultimos = $_GET['ultimo'];
    $primeiro = $_GET['primeiro'];

    var_dump($_GET);

    if(isset($_GET['animal'])){
                
        switch($animal){
            case 'rato':
                $animal = "Rato do Presidente"; 
               
                if(empty($primeiro)) {
                    $primeiro .= $animal;
                }
                $ultimos .= $animal;
                
                $frase1 = "<h4>Você clicou no $animal</h4><p>";
                $frase2 = "<p><h4>O Rato é da família dos Muridae</h4>";
                break;
            case 'pato':
                $animal = 'Pato Mergulhão';
                
                if(empty($primeiro)) {
                    $primeiro .= $animal;
                } 
                $ultimos .= $animal; 
                
                $frase1 = "<h4>Você clicou no $animal</h4><p>";
                $frase2 = "<h4>O Pato é da família dos Anatidae</h4>";
                break;
            case 'sapo':
                $animal = 'Sapo Cururu';
                
                if(empty($primeiro)) {
                    $primeiro .= $animal;
                } 
                $ultimos .= $animal;
                
                $frase1 = "<h4>Você clicou no $animal</h4><p>";
                $frase2 = "<p><h4>O Sapo é da família dos Amphibia</h4><p>";
                break;
            case 'seriema':
                $animal = 'Seriema';

                if(empty($primeiro)) {
                    $primeiro .= $animal;
                }
                $ultimos .= $animal;
                
                $frase1 = "<h4>Você clicou na $animal</h4><p>";
                $frase2 = "<p><h4>A Seriema é da família dos Cariamidae</h4><p>";
                break;
            }

    }
?>
    
    <div class="collection__photos">

        <a href="index.php?animal=rato&ultimo=<?= $ultimos  ?>" class="rato" id="#vermelho">
            <div class="animais" >
                <img src="img/rato-do-presidente.jpg" alt="" class="<?php echo ($_GET['animal'] == 'rato') ? 'borda-vermelha' : ''; ?>">
            </div>
        </a>

        <a href="index.php?animal=pato&ultimo=<?= $ultimos ?>" class="pato">
            <div class="animais">
                <img src="img/patomergulhao.jpg" alt="" class="<?php echo ($_GET['animal'] == 'pato') ? 'borda-vermelha' : ''; ?>">
            </div>
        </a>

        <a href="index.php?animal=sapo&ultimo=<?= $ultimos ?>" class="sapo">
            <div class="animais">
                <img src="img/sapocururu.jpeg" alt="" class="<?php echo ($_GET['animal'] == 'sapo') ? 'borda-vermelha' : ''; ?>">
            </div>
        </a>

        <a href="index.php?animal=seriema&ultimo=<?= $ultimos ?>" class="seriema" >
            <div class="animais" >
                <img src="img/siriema.jpg" alt="" class="<?php echo ($_GET['animal'] == 'seriema') ? 'borda-vermelha' : ''; ?>">
            </div>
        </a>

    </div>

<?php
    echo $frase1 . '<br>'; 
    echo $frase2 . '<br>';

    if($animal):
    
?>

    <a href="index.php">Limpar tudo</a>

<?php
    endif;

   
        echo "<p><h4>Histórico: </h4><p>";
      
    
            
        echo "<h4> $ultimos </h4><br>";
            
            
    
        
        // if(isset($primeiro)) {

        //      echo "<h4>Primeiro animal clicado: $primeiro</h4>";

        //  }
    
    
?>



</body>
</html>