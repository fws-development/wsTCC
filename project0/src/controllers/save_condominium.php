<?php
    session_start();
    requireValidSession(true);

    $exception = null;
    $condominiumData = [];

    if(count($_POST) === 0 && isset($_GET['update'])) {
        $condominium = Condominium::getOne(['id' => $_GET['update']]);
        $condominiumData = $condominium->getValues();
    } elseif(count($_POST) === 0 && isset($_GET['delete'])) {
        $condominium = Condominium::getOne(['id' => $_GET['delete']]);
        $condominiumData = $condominium->getValues();
    } elseif(count($_POST) > 0) {
        try {
            if(isset($_GET['delete'])){
                try {
                    Condominium::deleteById($_GET['delete']);
                    addSuccessMsg('Condominio excluído com sucesso.');
                    header('Location: condominiums.php');
                    exit();
                } catch(Exception $e) {
                    $exception = $e;
                }
            }else{    
                $dbCondominium = new Condominium($_POST);
                if($dbCondominium->id) {
                    $dbCondominium->update();
                    addSuccessMsg('Condominio alterado com sucesso!');
                    header('Location: condominiums.php');
                    exit();
                } else {
                    $dbCondominium->insert();
                    addSuccessMsg('Condominio cadastrado com sucesso!');
                    header('Location: condominiums.php');
                    exit();
                }
            }    
            $_POST = [];
        } catch(Exception $e) {
            $exception = $e;
        } finally {
            $condominiumData = $_POST;
        }
    }

    loadTemplateView('save_condominium', $condominiumData + ['exception' => $exception]
    );
?>    