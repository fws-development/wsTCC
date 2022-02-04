<aside class="sidebar">
    <nav class="menu mt-3">
        <ul class="nav-list">
            <li class="nav-item">
                <a id="linkInicio" href="home.php">
                    <i class="icofont-ui-home mr-2"></i>
                    Ínicio
                </a>
            </li>
            <li class="nav-item">
                <a href="status.php">
                    <i class="icofont-dashboard-web mr-2"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a id="linkCondominio" href="condominiums.php">
                    <i class="icofont-building mr-2"></i>
                    Condomínios
                </a>
            </li>
            <?php if($user->is_admin === 't'): ?>
                <li class="nav-item">
                    <a href="users.php">
                        <i class="icofont-ui-user mr-2"></i>
                        Usuários
                    </a>
                </li>
            <?php endif ?>
        </ul>
    </nav>
    
</aside>