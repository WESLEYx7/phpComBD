<?php 


    // Informações das conexões com o banco de dados
    $servernamer = "localhost";
    $username = "samuel";
    $senha = "123";
    $database = "aulaphp";

    // Criar conexão
    $conn = mysqli_connect($servernamer, $username, $senha, $database);
    if ( !$conn ) {
        die("Error de conexão: " . mysqli_connect_error());
    }

    echo"Conexão OK";

    $resultado = mysqli_query($conn,"SELECT * FROM `tb_dados` WHERE 1;");

    $valorCampoNome = htmlspecialchars($_POST['nomeCampo']);
    $valorSobrenome = htmlspecialchars($_POST['campoSobrenome']);
    $valorCampo = htmlspecialchars($_POST['campoValor']);

    $valorNumero = intval($valorCampo);

    /*$sql = "CREATE TABLE tb_dados (".
        "ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,".
        "NOME VARCHAR(255),".
        "SOBRENOME VARCHAR(255),".
        "IDADE INT".
    ")";*/

    $sql = "INSERT INTO tb_dados".
    "(NOME, SOBRENOME, IDADE) values".
    "('$valorCampoNome', '$valorSobrenome', $valorNumero);";



    $status = mysqli_query($conn, $sql);

    mysqli_close($conn);

    //Redirecionar fluxo
    header("Location: ./index.php");
    die();

?>