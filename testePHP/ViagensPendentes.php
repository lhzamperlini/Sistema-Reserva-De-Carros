<?php
include_once('config.php');

$sql = "SELECT *FROM viagens ORDER BY id";
$result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/StyPendente.css">
</head>

<body>
    <header>
        <h1>Olá, nome!</h1>
        <nav>
            <ul>
                <li><a href="TelaUsuario.php">VOLTAR</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Viagens Pendentes:</h1>

        <table>
            <thead class="topo">
                <tr>
                    <th>ID</th>
                    <th>PASSAGEIRO</th>
                    <th>LOCAL DE SAÍDA</th>
                    <th>DESTINO</th>
                    <th>DATA</th>
                    <th>HORARIO DE SAÍDA</th>
                    <th>PREVISÃO DE RETORNO</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($userdata = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $userdata['id'] . "</td>";
                    echo "<td>" . $userdata['passageiro'] . "</td>";
                    echo "<td>" . $userdata['local_saida'] . "</td>";
                    echo "<td>" . $userdata['destino'] . "</td>";
                    echo "<td>" . $userdata['data'] . "</td>";
                    echo "<td>" . $userdata['hora_saida'] . "</td>";
                    echo "<td>" . $userdata['hora_retorno'] . "</td>";
                    echo "<td>" . "Pendente..." . "</td>";
                    echo "<tr>";
                }
                ?>
            </tbody>
        </table>
    </main>

</body>

</html>