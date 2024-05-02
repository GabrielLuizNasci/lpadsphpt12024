<?php
    namespace MODEL;
    class Software {
        private ?int $id; 
        private ?string $descricao;
        private ?string $fabricante;
        private ?int $tipo;
        private ?float $valor;
        private ?int $qtdcopias;

        public function __construct() { }

        public function getId(){
            $this->id;
        }

        public function setId(int $id){
            $this->id = $id;
        }

        public function getDescricao(){
            $this->descricao;
        }

        public function setDescricao(string $descricao){
            $this->descricao = $descricao;
        }

        public function getFabricante(){
            $this->fabricante;
        }

        public function setFabricante(string $fabricante){
            $this->fabricante = $fabricante;
        }

        public function getTipo(){
            $this->tipo;
        }

        public function setTipo(int $tipo){
            $this->tipo = $tipo;
        }

        public function getValor(){
            $this->valor;
        }

        public function setValor(float $valor){
            $this->valor = $valor;
        }

        public function getQtdCopias(){
            $this->qtdcopias;
        }

        public function setQtdCopias(int $qtdcopias){
            $this->qtdcopias = $qtdcopias;
        }
    }
?>