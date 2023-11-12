<?php

include_once "./src/conexao.php";

$query_animais = "SELECT * FROM animais";
$result_animais = $pdo->prepare($query_animais);
$result_animais->execute();

$dados = "";
while($row_animal = $result_animais->fetch(PDO::FETCH_ASSOC)) {
    extract($row_animal);
    $dados .= "<a href=adocao-details.php?id=$ID><div class=felpudo-card id=teste><img src=$imagem><span>$nome</span></div></a>";
}

echo $dados;