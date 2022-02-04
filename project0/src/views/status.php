<main class="content">
    <?php
        renderTitle(
            'Relatório Gerencial',
            'Resumo das quantidades de registros',
            'icofont-chart-histogram'
        );
    ?>

    <div class="summary-boxes">
        <div class="summary-box bg-primary">
            <i class="icon icofont-users"></i>
            <p class="title">Ativos</p>
            <h3 class="value"><?= $activeUsersCount ?></h3>
        </div>
        <div class="summary-box bg-danger">
            <i class="icon icofont-users"></i>
            <p class="title">Desativados</p>
            <h3 class="value"><?= $desativeUsersCount ?></h3>
        </div>
        <div class="summary-box bg-success">
            <i class="icon icofont-building"></i>
            <p class="title">Condominios</p>
            <h3 class="value"><?= $activeCondominiumsCount ?></h3>
        </div>
    </div>

    
</main>