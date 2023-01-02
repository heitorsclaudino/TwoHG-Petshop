<?php
    include_once('./conexao.php');

    session_unset();
    session_destroy();
?>

<script>
    window.location.href = '../index.php';
</script>