<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 2</title>

   <link rel="stylesheet" href="/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">


   <!--  -->



</head>
<body>
    <h1>Formulário</h1>

    <hr>

    <form class="forms" method="POST" action="/destino.php">
        <div class="mb-3">
                <label for="titulo" class="form-label" >Título da Página</label>
                <input type="text" class="form-control" id="exampleInputText" name="titulo">
        </div>
        
        <div class="mb-3">
            <label for="corpo_pagina" class="form-label">Corpo da Página</label>
            <textarea class="form-control" name="corpo_pagina"></textarea>
        </div>

        <div class="mb-3">
            <label for="cor_letra" class="form-label" >Cor da Letra</label>
            <input type="color" class="form-control form-control-color" name="cor_letra">
        </div>
        
        <div class="mb-3">
            <label for="url_image" class="form-label">Url de uma imagem</label>
            <input type="text" class="form-control" name="url_image">
        </div> 
        
        <div class="mb-3">
            <label for="url_link" class="form-label">URL de link</label>
            <input type="text" class="form-control" name="url_link">
        </div>

        <div class="mb-3 ">
            <label for="cor_fundo" class="form-label" >Cor do Fundo</label>
            <input type="color" class="form-control form-control-color" name="cor_fundo">
        </div>

        <button type="submit" class="btn btn-primary" action="destino.php">Enviar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
    </form>
    

</body>
</html>