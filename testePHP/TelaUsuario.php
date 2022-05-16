<?php
include_once('config.php');

if (isset($_POST['submit'])) {
    $passageiro = $_POST['passageiro'];
    $local_saida = $_POST['local'];
    $destino = $_POST['destino'];
    $data_viagem = $_POST['data_viagem'];
    $hora_saida = $_POST['saida'];
    $hora_retorno = $_POST['retorno'];

    $resultado = mysqli_query($conexao, "INSERT INTO viagens(passageiro,local_saida,destino,data,hora_saida,hora_retorno) 
    VALUES ('$passageiro','$local_saida','$destino','$data_viagem','$hora_saida','$hora_retorno')");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HOME</title>
    <link rel="stylesheet" href="css/styleTela.css">
</head>

<body>
    <header>
        <h1>Bem vindo(a), Nome!</h1>
        <nav>
            <ul>
                <li><a href="ViagensPendentes.php">MINHAS VIAGENS</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="TelaUsuario.php" method="POST">
            <fieldset>
                <!-- USUÁRIO -->
                <legend><b>Fórmulário de Pedido</b></legend>
                <br>
                <div class="cadastro">
                    <input type="text" name="passageiro" id="passageiro" class="usuario" required>
                    <label for="passageiro" class="rotulo">Passageiro</label>
                </div>
                <br><br>
                <div class="cadastro">
                    <input type="text" name="local" id="local" class="usuario" required>
                    <label for="local" class="rotulo">Local De Saída</label>
                </div>
                <br><br>
                <div class="cadastro">
                    <input type="text" name="destino" id="destino" class="usuario" required>
                    <label for="destino" class="rotulo">Destino</label>
                </div>
                <br><br>
                <div class="Datas">
                    <!-- DATA DA VIAGEM -->
                    <label for="data_viagem"><b>Data da Viagem:</b></label>
                    <input type="date" name="data_viagem" id="data_viagem" required>
                    <br><br>
                    <!-- HORARIO -->
                    <label for="saida"><b>Horario De Saída: </b></label>
                    <input type="time" name="saida" id="saida" class="horario" required>
                    <br><br>
                    <label for="retorno"><b>Horario De Retorno(Previsão):</b></label>
                    <input type="time" name="retorno" id="retorno" class="horario" required>
                    <br><br>
                </div>

                <div class="botao">
                    <input type="submit" name="submit" id="submit">
                </div>

            </fieldset>
        </form>

    </main>

</body>

</html>