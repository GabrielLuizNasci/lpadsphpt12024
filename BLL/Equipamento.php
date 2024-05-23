<?php
    namespace BLL;
    include_once 'D:\xampp\htdocs\lpadsphpt12024\DAL\Equipamento.php';
    use DAL;

    class Equipamento{
        public function Select(){
            $dalEquip = new \DAL\Equipamento();
            return $dalEquip->Select();
        }

        public function SelectById(int $id){
            $dalEquip = new \DAL\Equipamento();
            return $dalEquip->SelectById($id);
        }

        public function Insert(\MODEL\Equipamento $equipamento){
            $dalEquip = new \DAL\Equipamento();
            
            return $dalEquip->Insert($equipamento);
        }

        public function Update(\MODEL\Equipamento $equipamento) {
            $dalEquip = new \DAL\Equipamento();

            return $dalEquip->Update($equipamento);
        }

        public function Delete(int $id) {
            $dalEquip = new \DAL\Equipamento();

            return $dalEquip->Delete($id);
        }

        
    }


?>