<?php
    include_once('./conexao.php');

    $delete = "DELETE FROM admins WHERE id='" . $_SESSION['idAdm'] . "'";
    $response = mysqli_query($conn, $delete);
    
    header('Location: ./logout.php');
?>