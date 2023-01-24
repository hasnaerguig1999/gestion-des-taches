<?php
    session_start();
    session_unset();
    session_destroy();
    $_SESSION = null;
    header('location:index.php');
    