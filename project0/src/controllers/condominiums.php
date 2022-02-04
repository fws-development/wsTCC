<?php
    session_start();
    requireValidSession();

    $exception = null;

    if(count($_POST) > 0) {
        if (strtoupper($_POST['filtro']) === 'TODOS'){
            $condominiums = Condominium::get();
        }elseif (strtoupper($_POST['filtro']) != '') {
            $filtro = trim($_POST['filtro']);
            if(ctype_upper($filtro)){
                $filtroUP = strtolower($filtro);    
            }else{
                $filtroUP = strtoupper($filtro);
            }
            $condominiums = Condominium::get(['raw' => "(bairro LIKE '%".$filtro."%' OR 
                                                         logradouro LIKE '%".$filtro."%' OR
                                                         name LIKE '%".$filtro."%' OR
                                                         bairro LIKE '%".$filtroUP."%' OR 
                                                         logradouro LIKE '%".$filtroUP."%' OR
                                                         name LIKE '%".$filtroUP."%') "]);
        }
    }

    $activeCount = Condominium::getActiveCondominiumsCount();

    loadTemplateView('condominiums', [
        'condominiums' => $condominiums,
        'exception' => $exception,
        'filtro' => $filtro,
        'activeCount' => $activeCount
    ]);

?>    