<?php
    session_start();

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'twohg';

    $conn = mysqli_connect($servername, $username, $password, $dbname) or die('A conexão com o servidor falhou!');
?>