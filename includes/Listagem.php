<?php

$mensagem = '';
if(isset($_GET['status'])) {
    switch($_GET['status']) {
        case 'success' :
            $mensagem = '<div class="alert alert-success"> Ação executada com sucesso!</div>';
            break;

        case 'error':
            $mensagem = '<div class="alert alert-danger"> Ação não executada!</div>';
            break;
    }
}

$resultados = '';



//echo '<p align="center"> <iframe width="560" height="315" src="https://www.youtube.com/embed/uxpDa-c-4Mc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>';



    