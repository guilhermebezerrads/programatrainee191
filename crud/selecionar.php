<?php

include 'conexao.php';


$sql = "SELECT nome, idade FROM pessoa";

$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {

    while($coluna = $resultado->fetch_assoc()) {
        echo "Nome: " . $coluna["nome"]. " - Idade: " . $coluna["idade"].  "<br>";
    }

} else {

    echo "0 resultados.";

}



$conexao->close();

?> 