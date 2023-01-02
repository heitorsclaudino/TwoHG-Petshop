<?php
    include_once('./conexao.php');

    $consulta = "SELECT * FROM admins WHERE id='" . $_SESSION['idAdm'] . "'";

    $response = mysqli_query($conn, $consulta);

    $_SESSION['adm'] = mysqli_fetch_assoc($response);

    header('Location: ../html/admin.php');
?>