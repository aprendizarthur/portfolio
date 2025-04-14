<?php
//arquivo exclusivo para destruir session e fazer logout
    session_start();
    session_unset();
    session_destroy();

    header("Location: ../sobre.php");
?>