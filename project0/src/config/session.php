<?php
    function requireValidSession($requireAdmin = false) {
        $user = $_SESSION['user'];
        //var_dump($user);
        //die();
        if(!isset($user)) {
            header('Location: login.php');
            exit();
        } elseif($requireAdmin && $user->is_admin  === 'f') {
            addErrorMsg('Acesso negado!');
            header('Location: start.php');
            exit();            
        } 

    }