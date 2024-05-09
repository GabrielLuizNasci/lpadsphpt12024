<?php
    namespace BLL;
    include_once 'D:\xampp\htdocs\lpadsphpt12024\DAL\Equipamento.php';

    class equipamento{
        public function Select(){
            $dalEquip = new \DAL\Equipamento();
            return $dalEquip = $dalEquip->Select();
        }
    }


?>