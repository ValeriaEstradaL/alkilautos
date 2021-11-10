
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="pangrama.php" method="post">
        <div class="row">
            <label for="">Ingrese frase para Pangrama. </label>
    <input name="pangrama" type="text" class="form-control" placeholder="pangrama" aria-describedby="basic-addon1">
    <button type="submit" class="btn btn-primary">Validar</button>
    </div>
</form>
    <form action="fibonacci.php" method="post">
<div class="row">
    <label for="">Ingrese numero para Fibonacci. </label>
    <input name="fibo" type="text" class="form-control" placeholder="Fibonacci"  aria-describedby="basic-addon1">
    <button type="submit" class="btn btn-primary" >Generar</button>
    </div>
    </form>
    <form action="reloj.php" method="post">
<div class="row">
    <label for="">Ingrese cadena para reloj sin los dos puntos ej: 000200 . </label>
    <input name="reloj" type="text" class="form-control" placeholder="reloj"  aria-describedby="basic-addon1">
    <button type="submit" class="btn btn-primary" >Generar segmentos</button>
    </div>
    </form>
    
</div>
</body>

</html>

