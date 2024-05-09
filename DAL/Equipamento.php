<?php
 namespace DAL;
 include_once 'D:\xampp\htdocs\lpadsphpt12024\DAL\conexao.php';
 include_once 'D:\xampp\htdocs\lpadsphpt12024\MODEL\Equipamento.php';

 class Equipamento{
    public function Select(){ 
           
        $sql = "Select * from equipamento;";
        $con = Conexao::conectar(); 
        $registros = $con->query($sql);
        $con = Conexao::desconectar(); 


        foreach ($registros as $linha){
            $equip = new \MODEL\Equipamento(); 
            $equip->setId($linha['id']); 
            $equip->setDescricao($linha['descricao']);
            $equip->setResponsavel($linha['responsavel']);
            $equip->setDepartamento($linha['departamento']);
            $equip->setCompra($linha['compra']);
            $lstEquip[] = $equip; 
        }
        return $lstEquip;
         
     }
 }

?>