<?php

include_once "conexao.php";

$query_animais = "SELECT id, nome, idade, porte FROM animais";
$result_animais = $pdo->prepare($query_animais);
$result_animais->execute();

$contagem = 0;
while($row_animal = $result_animais->fetch(PDO::FETCH_ASSOC)) {
    extract($row_animal);
    $contagem++;
    
}

echo $contagem;