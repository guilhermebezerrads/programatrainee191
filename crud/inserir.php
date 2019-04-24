<?php

include 'conexao.php';



$sql = "INSERT INTO pessoa(nome, idade) VALUES ('Mary', 23)";


if ($conexao->query($sql) === TRUE) {
    echo "Dado inserido com sucesso.";
}  else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}


$conexao->close();

?> 