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

    public function SelectById(int $id){    
        $sql = "Select * from equipamento where id=?;";
        $con = Conexao::conectar(); 
        $query = $con->prepare($sql);
        $query->execute(array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar(); 


        $equip = new \MODEL\Equipamento(); 
        $equip->setId($linha['id']); 
        $equip->setDescricao($linha['descricao']);
        $equip->setResponsavel($linha['responsavel']);
        $equip->setDepartamento($linha['departamento']);
        $equip->setCompra($linha['compra']);
        
        return $equip;
    }

    public function Insert(\MODEL\Equipamento $equipamento){
        $sql = "INTERT INTO equipamento (descricao, responsavel, departamento, compra) VALUES (
            {$equipamento -> getDescricao()}, 
            {$equipamento -> getResponsavel()}, 
            {$equipamento -> getDescricao()},  
            {$equipamento -> getCompra()}
        ));";

        $con = Conexao::conectar(); 
        $result = $con->query($sql);
        $con = Conexao::desconectar(); 

        return $result;
    }

    public function Update(\MODEL\Equipamento $equipamento){
        $sql = "UPDATE equipamento SET descricao = ?, responsavel = ?, departamento = ?, compra = ? WHERE id = ?;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array(
            $equipamento->getDescricao(), 
            $equipamento->getResponsavel(), 
            $equipamento->getDepartamento(), 
            $equipamento->getCompra(), 
            $equipamento->getID()
        ));
        $con = Conexao::desconectar();
      
        return $result; 
    }

    public function Delete(\MODEL\Equipamento $equipamento){
        $sql = "DELETE from equipamento WHERE id = ?;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array( $id ));
        $con = Conexao::desconectar();
      
        return $result; 
    }

 }
?>