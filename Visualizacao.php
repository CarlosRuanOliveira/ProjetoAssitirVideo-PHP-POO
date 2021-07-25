<?php
    require_once 'Aluno.php';
    require_once 'Video.php';
    class Visualizacao {
        private $espectador;
        private $filme;

        public function avaliar() {
            $this->filme->setAvaliacaoTotal(5);
        }
        public function avaliarNota($nota) {
            $this->filme->setAvaliacaoTotal($nota);
        }
        public function avaliarPorc($porc) {
            $nota = 0;
            if ($porc <= 20) {
                $nota = 3;
            } else if ($porc <= 50) {
                $nota = 5;
            } else if ($porc <= 50) {
                $nota = 8;
            } else {
                $nota = 10;
            }
            $this->filme->setAvaliacaoTotal($nota);
        }

        public function __construct($es, $fi) {
            $this->espectador = $es;
            $this->filme = $fi;
            $this->filme->setViews($this->filme->getViews() + 1);
            $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
        }
        //Getters and Setters
        public function getEspectador() {
            return $this->espectador;
        }
        public function setEspectador($e) {
            $this->espectador = $e;
        }
        public function getFilme() {
            return $this->filme;
        }
        public function setFilme($f) {
            $this->filme = $f;
}
    }
?>