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
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-black">Cadastre um veí­culo:</h3>
                    <?php
                    if(isset($_SESSION['status_cadastro'])):
                    ?>
                    <div class="notification is-success">
                      <p>Veículo cadastrado!</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>
                    <?php
                    if(isset($_SESSION['erro'])):
                    ?>
                    <div class="notification is-danger">
                      <p>Erro.</p>
                      <p>Dados informados inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['erro']);
                    ?>
                    <div class="box">
                        <h4 style="font-size: medium;" class="has-text-black">Informe os dados do veí­culo:</h4></br>
                        <form action="cadastrar.php" method="POST">
                            <div class="field has-text-black">
                                <div class="control">
                                    <input name="marca" type="text" class="input is-medium" placeholder="Marca">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="modelo" type="text" class="input is-medium" placeholder="Modelo">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="ano" type="text" class="input is-medium" placeholder="Ano">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="valor" type="text" class="input is-medium" placeholder="Valor">
                                </div>
                            </div>
                            <button class="btn btn-primary">Cadastrar</button>
                        </form>
                        <br/><a href="/index.php"><button class="button is-medium">Voltar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
