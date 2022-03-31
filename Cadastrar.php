<?php

//carrega o autoload
require_once __DIR__ . '/vendor/autoload.php';
use \App\core\Entity\Curso;

$Curso = new Curso;

//VALIDAÇÃO DO POST
if(isset($_POST['NomeCurso'], $_POST['descricao'], $_POST['ativo'])) {
    $Curso->NomeCurso   = $_POST['NomeCurso'];
    $Curso->descricao   = $_POST['descricao'];
    $Curso->ativo       = $_POST['ativo'];
    $Curso->cadastrar();

    header('location: index.php?status=success');
    exit;
}



include_once __DIR__ . '/Includes/Header.php';
include_once __DIR__ . '/Includes/TelaLogin.php';
include_once __DIR__ . '/Includes/Footer.php';