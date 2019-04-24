<?php

include 'conexao.php';



$sql = "UPDATE pessoa SET nome = 'John Silva', idade = 19  WHERE id = 1";



if ($conexao->query($sql) === TRUE) {

    echo "Dado atualizado com sucesso.";

}



$conexao->close();

?> 