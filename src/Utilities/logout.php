<?php

    session_start();

    $_SESSION = array();

    if(ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() -42000, 
                  $params["path"], $params["domain"], 
                  $param["secure"], $params["httponly"]);
    }

    session_destroy();
    header("Location:/");
    die();
?>