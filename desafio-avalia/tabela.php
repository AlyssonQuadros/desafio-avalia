<?php
session_start();
include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro de Veí­culos</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/89/89102.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<div class="title tabela" style="text-align: center; margin-top: 50px;">Veículos no estoque</div></br>

<?php
    $mysqli = new mysqli('localhost', 'root', '', 'desafio');
    $consulta = "SELECT * FROM veiculo";
    $con = $mysqli->query($consulta) or die($mysqli->error);


?>
    <body>
        <table class="table table-hover table-inverse">
            <tr>
                <td style="font-size:16px; text-align: center; background-color:#3c6a85ad"><b>Marca</b></td>
                <td style="font-size:16px; text-align: center; background-color:#3c6a85ad"><b>Modelo</b></td>
                <td style="font-size:16px; text-align: center; background-color:#3c6a85ad"><b>Ano</b></td>
                <td style="font-size:16px; text-align: center; background-color:#3c6a85ad"><b>Valor</b></td>
                <td style="font-size:16px; text-align: center; background-color:#3c6a85ad"><b>Data</b></td>
            </tr>
            <?php while($dado = $con->fetch_array()){ ?>
            <tr>
                <td style="font-size:14px; text-align: center; text-transform:capitalize;"><?php echo $dado["marca"]; ?></td>
                <td style="font-size:14px; text-align: center; text-transform:capitalize;"><?php echo $dado["modelo"]; ?></td>
                <td style="font-size:14px; text-align: center;"><?php echo $dado["ano"]; ?></td>
                <td style="font-size:14px; text-align: center;"><?php echo $dado["valor"]; ?></td>
                <td style="font-size:14px; text-align: center;"><?php echo date("d/m/Y", strtotime($dado["data_cadastro"])); ?></td>
            </tr>
            <?php } ?>
        </table>
        <div class="has-text-centered">
            <a href="/index.php"><button class="botao">Voltar</button></a>
        </div>
    </body>
</html>