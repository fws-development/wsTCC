<main class="content">
    <?php
        renderTitle(
            'Cadastro de Condomínio',
            'Crie e atualize o condomínio',
            'icofont-building-alt'
        );

        include(TEMPLATE_PATH . "/messages.php");
    ?>

    <form action="#" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="cnpj_cpf">CNPJ</label>
                <input type="text" id="condominium-cnpj_cpf" name="cnpj_cpf" placeholder="Informe o CNPJ"
                    class="form-control <?= $errors['cnpj_cpf'] ? 'is-invalid' : '' ?>"
                    value="<?= $cnpj_cpf ?>">
                <div class="invalid-feedback">
                    <?= $errors['cnpj_cpf'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" id="condominium-name" name="name" placeholder="Informe o nome"
                    class="form-control <?= $errors['name'] ? 'is-invalid' : '' ?>"
                    value="<?= $name ?>">
                <div class="invalid-feedback">
                    <?= $errors['name'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="logradouro">Logradouro</label>
                <input type="text" id="condominium-logradouro" name="logradouro" placeholder="Informe o logradouro"
                    class="form-control <?= $errors['logradouro'] ? 'is-invalid' : '' ?>"
                    value="<?= $logradouro ?>">
                <div class="invalid-feedback">
                    <?= $errors['logradouro'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="bairro">Bairro</label>
                <input type="text" id="condominium-bairro" name="bairro" placeholder="Informe o bairro"
                    class="form-control <?= $errors['bairro'] ? 'is-invalid' : '' ?>"
                    value="<?= $bairro ?>">
                <div class="invalid-feedback">
                    <?= $errors['bairro'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="cep">Cep</label>
                <input type="text" id="condominium-cep" name="cep" placeholder="Informe o cep"
                    class="form-control <?= $errors['cep'] ? 'is-invalid' : '' ?>"
                    value="<?= $cep ?>">
                <div class="invalid-feedback">
                    <?= $errors['cep'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="cidade">Cidade</label>
                <input type="text" id="condominium-cidade" name="cidade" placeholder="Informe o cidade"
                    class="form-control <?= $errors['cidade'] ? 'is-invalid' : '' ?>"
                    value="<?= $cidade ?>">
                <div class="invalid-feedback">
                    <?= $errors['cidade'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="uf">UF</label>
                <input type="text" id="condominium-uf" name="uf" placeholder="Informe o uf"
                    class="form-control <?= $errors['uf'] ? 'is-invalid' : '' ?>"
                    value="<?= $uf ?>">
                <div class="invalid-feedback">
                    <?= $errors['uf'] ?>
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="email" id="condominium-email" name="email" placeholder="Informe o email"
                    class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>"
                    value="<?= $email ?>">
                <div class="invalid-feedback">
                    <?= $errors['email'] ?>
                </div>
            </div>
        </div>
        <div>
            
            <?php if($_GET['delete']){ ?>
                <button id="btnExcluir" class="btn btn-danger btn-lg">Excluir</button>
            <?php } else { ?>        
                <button id="btnGravar" class="btn btn-primary btn-lg">Salvar</button>
            <?php } ?>   
            <a href="/condominiums.php" class="btn btn-secondary btn-lg">Cancelar</a>
        </div>
    </form>
</main>