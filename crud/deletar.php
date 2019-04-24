<?php

include 'conexao.php';



$sql = "DELETE FROM pessoa WHERE id=4";



if ($conexao->query($sql) === TRUE) {

    echo "Dado excluído com sucesso.";

}



$conexao->close();

?> 