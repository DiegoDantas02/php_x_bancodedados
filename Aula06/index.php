<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> Fortuna </title>

    <link rel="shortcut icon" href="../Aula06/img/money.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <!-- -------inicio ------------- -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img/money.png" width="40"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clientes.php"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Patrocinadores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre Nós</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ----------end menu------- -->
    
    <!-- ----------- inicio menu----------- -->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h2 class="display-6 text-center mt-4 mt-3"> Sistema de Finanças </h2>
            </div>
        </div>

        <div class="row text-center">
            <div class="col m-5 border rounded pt-3 pb-3">
                <a href="clientes.php" class="btn">
                    <img src="img/salario.png">
                    <br>
                    <strong>SALARIO</strong>
                    <BR></BR>
                    <P class="text-success">R$1.200,00</P>
                </a>
            </div>
            
            <div class="col m-5 border rounded pt-3 pb-3">
                <a href="economizado.php" class="btn">
                    <img src="img/Economia.png">
                    <br>
                    <strong>ECONOMIZADO</strong>
                    <br><br>
                    <P class="text-warning">R$200,00</P>
                </a>
            </div>
            <div class="col m-5 border rounded pt-3 pb-3">
            <a href="gastoscomocartao.php" class="btn">
                    <img src="img/cartao.png">
                    <br>
                    <strong>GASTOS COM O CARTÃO</strong>
                    <br><br>
                    <P class="text-danger">R$800,00</P>
                </a>
            </div>

        </div>

    </div>
    <!-- ---------------------- end menu -->

    <!-- ---------inicio menu -------- -->
   

        <div class="row text-center">
            <div class="col m-5 border rounded pt-3 pb-3">
                <a href="gastosemdinheiro.php" class="btn">
                    <img src="img/dinheiro.png">
                    <br>
                    <strong>GASTOS EM DINHEIRO</strong>
                    <br> <br>
                    <P class="text-danger">R$100,00</P>
                    
                </a>
            </div>
            
            <div class="col m-5 border rounded pt-3 pb-3">
                <a href="paineldegastos.php" class="btn">
                    <img src="img/painel.png">
                    <br>
                    <strong>PAINEL DE GASTOS </strong>
                    <br> <br>
                    <P class="text-secondary">R$2.000,00</P>
                </a>
            </div>
            <div class="col m-5 border rounded pt-3 pb-3">
            <a href="configuracao.php" class="btn">
                    <img src="img/configuracoes.png">
                    <br>
                    <strong>CONFIGURAÇÕES</strong>
                </a>
            </div>

        </div>

    </div>
<!-- ------------------end menu------------- -->

    <footer class="container-fluid g-0 bg-dark text-light">
        <div class="row p-3">
            <div class="col text-center ">
                &reg; Sistema de Finanças Desde 2015 - Desenvolvido por <a href="mailto:diegorodriguesdantas02@gmail.com">Diego Dantas</a>
            </div>
        </div>
    </footer>
</body>

</html>