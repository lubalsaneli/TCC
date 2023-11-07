<?php

include_once "conexao.php";

$query_animais = "SELECT id, nome, idade, porte FROM animais";
$result_animais = $pdo->prepare($query_animais);
$result_animais->execute();

$dados = "";
while($row_animal = $result_animais->fetch(PDO::FETCH_ASSOC)) {
    extract($row_animal);
    $dados .= "<a href=adocao-details.php><div class=felpudo-card id=teste><img src=><span>$nome</span></div></a>";
}

echo $dados;