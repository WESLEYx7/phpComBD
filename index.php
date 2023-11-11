<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Novo</title>
</head>
<body>
    <form action="./conectar.php" method="POST">
        <label for="">Nome Digitado:</label>
        <input type="text" name="nomeCampo">
        <br>
        <label for="">Sobrenome</label>
        <input type="text" name="campoSobrenome">
        <br>
        <label for="">Novo Valor</label>
        <input type="number" name="campoValor">
        <br>
        <label for="">Enviar Dados: </label>
        <br>
        <input type="submit">
    </form>
    <a href="./conectar.php">CLIQUE AQUI PARA CONECTAR AO BANCO</a>

    <?php 
    if ( 0 ) {
        echo "<br>dados<br>";
    } else {
        echo "<h2>nenhum dado no banco<h2>";
    }

    ?>
</body>
</html>
