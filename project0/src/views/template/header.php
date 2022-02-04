<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/template.css">
    <title>Project0</title>
</head>

<body>
    <header class="header">
        <div class="menu-toggle">
            <i class="icofont-rounded-left"></i>
        </div>

        <div class="text-title">
            <span class="font-weight-light">project0 MONOLITICO </span>
        </div>
        
      
        <div class="dropdown">
            <div class="dropdown-button">
                <img class="avatar"
                        src="<?= "http://www.gravatar.com/avatar.php?gravatar_id="
                               . md5(strtolower(trim($_SESSION['user']->email))) 
                             ?>" 
                alt="user">
                <span class="ml-3">
                    <?= $_SESSION['user']->name ?>
                </span>
                <div id="Sair__BV_toggle_" class="menuIcon" onclick="myFunction()">
                    <i  class="icofont-navigation-menu mx-2"></i>
                </div>
            </div>
            <div id="myDropdown" class="dropdown-content">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a id="logout" href="logout.php">
                            <i class="icofont-logout mr-2"></i>
                            Sair
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>