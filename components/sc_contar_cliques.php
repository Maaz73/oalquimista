<?php

require_once __DIR__ . '/../components/connection.php';

$link = new_db_connection();

if(isset($_GET['id']) && is_numeric($_GET['id'])){

    $idBebida =(int) $_GET['id'];

    $stmt = mysqli_stmt_init($link);

    $queryCliques= "UPDATE bebidas SET numero_cliques = numero_cliques + 1 WHERE id_bebida = ? ;";

    if (mysqli_stmt_prepare($stmt, $queryCliques)) {
        mysqli_stmt_bind_param($stmt, "i", $idBebida);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }

    header("Location: ../pages/receita.php?id=" . $idBebida);
    exit;

}
?>
