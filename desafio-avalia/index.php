<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema de Cadastro de Veículos</title>
        <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/89/89102.png">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/bulma.min.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body has-text-centered">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h1 class="title has-text-black">Sistema de Cadastro de Veículos</h3>
                    <div class="box has-text-centered">
                        <a href="/cadastro.php"><button class="btn btn-primary">Cadastrar Veículo</button></a>
                        <div>
                        <a href="/tabela.php"><button class="btn btn-primary">Estoque</button></a> <br/><br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>