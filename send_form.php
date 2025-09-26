<?php

    require './db/conexao.php';

    $nome = $_POST["nome"];
    $idade = (int)$_POST["idade"];
    $email = $_POST["email"];

    $sql = "INSERT INTO pessoa(NOME, IDADE, EMAIL) VALUES (?,?,?)";
    $stm = $con->prepare($sql);
    $stm->bind_param("sis", $nome, $idade, $email);

    if ($stm->execute()) {
        echo "Dados inseridos com sucesso!";
    }else{
        echo "Erro ao inserir dados: ".$stm->error;
    }
    $stm->close();
    $con->close();
?>