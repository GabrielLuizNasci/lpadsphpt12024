<?php
    namespace VIEW\Equipamento;
    include_once 'D:\xampp\htdocs\lpadsphpt12024\MODEL\Equipamento.php';
    include_once 'D:\xampp\htdocs\lpadsphpt12024\BLL\Equipamento.php';

    $id = $_GET[' id '];

    $bllEqpto = new \BLL\Equipamento(); 
    $result =  $bllEqpto->Delete($equipamento);  

  
    header("location: lstEquipamento.php");
    
?>