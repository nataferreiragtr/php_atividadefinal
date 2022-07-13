<?php
    session_start();
    
    date_default_timezone_set('America/Sao_Paulo');

    @ini_set( 'display_errors', 0 );
    @ini_set( 'log_errors', 1 );

    if(!array_key_exists('login', $_SESSION) || empty(isset($_SESSION['login'])))
    {
        $page = "errorPage.php";
        setcookie('notify', $msg, time() + 10, "/gpe/{$page}", 'localhost');
        header("location: {$page}");
        exit;
    }

// define( 'WP_DEBUG', true );
// define( 'WP_DEBUG', 1 );