<?php
    include_once('./conexao.php');

    $consulta = "SELECT * FROM animais WHERE id='" . $_GET['id'] . "'";

    $response = mysqli_query($conn, $consulta);

    $row = mysqli_fetch_assoc($response);

    if(isset($row)){
        $_SESSION['id_animal'] = $_GET['id'];
        $_SESSION['nome_animal'] = $row['nome'];
        $_SESSION['idade_animal'] = $row['idade'];
        $_SESSION['porte_animal'] = $row['porte'];
        $_SESSION['raca_animal'] = $row['raca'];
        $_SESSION['obs_animal'] = $row['obs'];
        
        header('Location: ../html/editaAnimal.php');
    }

?>