<?php
    session_start();
    unset($_SESSION['id_user']);
    unset($_SESSION['email']);
    unset($_SESSION['name']);
    unset($_SESSION['lName']);

    session_destroy();

    die('<script>window.location.href="index.php"</script>');
?>