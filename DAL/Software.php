<?php
    namespace DAL;
    include_once 'D:\xampp\htdocs\lpadsphpt12024\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\lpadsphpt12024\MODEL\Software.php';

    class Software{
        public function Select() {
            $sql = "Select * from software;";
            $con = \DAL\Conexao::conectar(); 
            $registros = $con->query($sql);
            $con = \DAL\Conexao::desconectar();


            foreach ($registros as $linha){
                $sftw = new \MODEL\Software(); 
                $sftw->setId($linha['id']); 
                $sftw->setDescricao($linha['descricao']);
                $sftw->setFabricante($linha['fabricante']);
                $sftw->setTipo($linha['tipo']);
                $sftw->setValor($linha['valor']);
                $sftw->setQtdCopias($linha['qtdcopias']);
                $lstSftw[] = $sftw; 
            }
            return $lstSftw;
          
      }

      public function SelectId(int $id){}
      public function SelectDesc(string $descricao){}
      public function SelectFabricante(string $fabricante){}
      public function SelectTipo(int $tipo){}
      public function SelectValor(float $valor){}
      public function SelectQtdCopias(int $qtdcopias){}
        
    }
?>