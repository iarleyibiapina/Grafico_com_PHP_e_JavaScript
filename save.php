<?php
include_once 'db.php';

// var_dump($_POST);
$grupo = $_POST['group'];
$valor = $_POST['value'];

// echo "<pre>";
// var_dump($grupo);
// var_dump($valor);
// echo "</pre>";

switch ($valor) {
    case "1":
        return update("valor_1", $grupo, $pdo);
    case "2":
        return update("valor_2", $grupo, $pdo);
    case "3":
        return update("valor_3", $grupo, $pdo);
    default:
        return false;
}

// adicionar funcao
function update($valor, $grupo, $pdo)
{
    $stmt = $pdo->prepare("UPDATE valores
        SET $valor = $valor + 5
        WHERE id_grupo = :grupoBind");
    $stmt->bindValue(':grupoBind', $grupo, PDO::PARAM_STR);
    $results = $stmt->execute();
    header('Location: index.php');
}
