<?php
    abstract class Pessoa{
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $experiencia;

        protected function ganharExp(){
            $this->experiencia ++;
        }

        public function __construct($no, $id, $se) {
            $this->nome = $no;
            $this->idade = $id;
            $this->sexo = $se;
            $this->experiencia = 0;
        }
        //Getters and Setters
        public function getNome() {
            return $this->nome;
        }
        public function setNome($n) {
            $this->nome = $n;
        }
        public function getIdade() {
            return $this->idade;
        }
        public function setIdade($i) {
            $this->idade = $i;
        }
        public function getSexo() {
            return $this->sexo;
        }
        public function setSexo($s) {
            $this->sexo = $s;
        }
        public function getExperiencia() {
            return $this->experiencia;
        }
        public function setExperiencia($e) {
            $this->sexo = $e;
        }
    }
?>