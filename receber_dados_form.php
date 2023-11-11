<?php
    //Sem tratamento
    //$valorSemTratamento = $_POST['nomeCampo'];

    //Com tratamento
   /* $valorCampoNome = htmlspecialchars($_POST['nomeCampo']);
    $valorSobrenome = htmlspecialchars($_POST['campoSobrenome']);
    $valorCampo = htmlspecialchars($_POST['campoValor']);*/

    $valorNumero = intval($valorCampo);

    echo $valorNumero . " " . $valorCampoNome;



?>