<?php
    namespace VIEW\Equipamento;
    include_once 'D:\xampp\htdocs\lpadsphpt12024\MODEL\Equipamento.php';
    include_once 'D:\xampp\htdocs\lpadsphpt12024\BLL\Equipamento.php';

    $equipamento = new \MODEL\Equipamento();

    $equipamento->setId($_POST['txtID']);
    $equipamento->setDescricao($_POST['txtDesc']);
    $equipamento->setResponsavel($_POST['txtResp']);
    $equipamento->setDepartamento($_POST['txtDep']);
    $equipamento->setCompra($_POST['txtCompra']);

    $bllEqpto = new \BLL\Equipamento(); 
    $result =  $bllEqpto->Update($equipamento);  

  
    header("location: lstEquipamento.php");
    
?>