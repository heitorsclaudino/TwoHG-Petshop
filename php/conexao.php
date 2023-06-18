<?php
    session_start();

    $servername = 'sql305.infinityfree.com';
    $username = 'if0_34434310';
    $password = 'Araqa6JKaMyEPI';
    $dbname = 'if0_34434310_twohg';

    $conn = mysqli_connect($servername, $username, $password, $dbname) or die('A conexão com o servidor falhou!');
?>