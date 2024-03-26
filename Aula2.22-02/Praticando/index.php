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

    <form class="forms" method="post" action="/destino.php">
        <div class="mb-3">
            <label for="exampleInputText" class="form-label" >Name</label>
            <input type="text" class="form-control" id="exampleInputText" name="nome">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" >Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" >
            <label class="form-check-label" for="exampleCheck1" name="check">Check me out</label>
        </div>
            <div class="mb-3 form-check">
            <label for="exampleColorInput" class="form-label" >Color picker</label>
            <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color" name="color">

        </div>

        <button type="submit" class="btn btn-primary" action="destino.php">Submit</button>
        <button type="reset" class="btn btn-warning">Clean</button>
    </form>
    

</body>
</html>