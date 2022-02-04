<main class="content">
    <?php
    renderTitle(
        'Cadastro de Condominios',
        'Mantenha os dados dos condominios atualizados',
        'icofont-building-alt'
    );

    include(TEMPLATE_PATH . "/messages.php");
    ?>

    <?php if($user->is_admin === 't'): ?>
        <a id="btnNovo" class="btn btn-lg btn-primary mb-3" href="save_condominium.php">Novo</a>
    <?php endif ?>    
    <form class="mb-4" action="#" method="post">
        <div class="input-group">
            <input type="text" id="filtro" name="filtro" placeholder="Informe seu filtro" class="form-control" value="<?= $filtro ?>">
            <button id="search" class="btn btn-primary ml-2">
                <i class="icofont-search"></i>
            </button>
        </div>
    </form>
    
    <div class="table-view">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>Nome</th>
                <th>Logradouro</th>
                <th>Bairro</th>
                <?php if($user->is_admin === 't'): ?>
                    <th>Ações</th>
                <?php endif ?>     
            </thead>
            <tbody>
                <?php $count = 0 ; foreach ($condominiums as $condominium) : ?>
                    <tr>
                        <? $count++ ?>
                        <td><?= $condominium->name ?></td>
                        <td><?= $condominium->logradouro ?></td>
                        <td><?= $condominium->bairro ?></td>
                        <?php if($user->is_admin === 't'): ?>
                            <td>
                                <a href="save_condominium.php?update=<?= $condominium->id ?>" class="btn btn-warning rounded-circle mr-2">
                                    <i class="icofont-edit"></i>
                                </a>
                                <a id="itemExcluir" href="save_condominium.php?delete=<?= $condominium->id ?>" class="btn btn-danger rounded-circle">
                                    <i class="icofont-trash"></i>
                                </a>

                            </td>
                        <?php endif ?> 
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</main>