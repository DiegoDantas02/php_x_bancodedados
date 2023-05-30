<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Usuario & Senha </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>


    <br>
    <br>
    <div class="container text-center ">
        <div class="p-5">

            <h1>😊👌 TELA DE LOGIN 😊👌</h1>
            <br>
            <br>
            <br>
            <br>
            <form action="validar.php" method="post" class="">
                <p >Digite Seu E-mail:</p>
                <input placeholder="usuario@email.com" name="usuario" > <br>
                <br>
                <br>
                
                <p>Digite Sua Senha:</p>
                <input type="password" placeholder="Senha" name="senha"> <br>
                <br>
                <br>

                <button type="submit" class="btn btn-danger">Entrar</button>
            </form>
        </div>

    </div>
</body>

</html>