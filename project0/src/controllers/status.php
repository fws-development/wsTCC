<?php
    session_start();
    requireValidSession();

    $activeUsersCount = User::getActiveUsersCount();
    $desativeUsersCount = User::getDesativeUsersCount();
    $activeCondominiumsCount = Condominium::getActiveCondominiumsCount();

    loadTemplateView('status', [
        'activeUsersCount' => $activeUsersCount,
        'desativeUsersCount' => $desativeUsersCount,
        'activeCondominiumsCount' => $activeCondominiumsCount,
    ]);


?>