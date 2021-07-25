<?php
    require_once 'AcoesVideo.php';
    class Video implements AcoesVideo {
        private $titulo;
        private $avaliacaoTotal; //Atributo bônus criado para consertar o cálculo da média apresentado no curso, pois o mesmo estava errado; Armazena a soma total das notas
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;

        public function play() {
            $this->reproduzindo = true;
        }
        public function pause() {
            $this->reproduzindo = false;
        }
        public function like() {
            $this->curtidas  ++;
        }

        public function __construct($ti) {
            $this->titulo = $ti;
            $this->avaliacaoTotal = 0;
            $this->avaliacao = 0;
            $this->views = 0;
            $this->curtidas = 0;
            $this->reproduzindo = false;
        }
        //Getters and Setters
        public function getTitulo() {
            return $this->titulo;
        }
        public function setTitulo($t) {
            $this->titulo = $t;
        }

        public function getAvaliacaoTotal() {
            return $this->avaliacao;
        }
        public function setAvaliacaoTotal($a) {
            $this->avaliacaoTotal = $this->avaliacaoTotal + $a;
            $this->setAvaliacao($this->avaliacaoTotal); //chama o método para realizar o cálculo da média de avaliações
        }
        public function getAvaliacao() {
            return $this->avaliacao;
        }
        public function setAvaliacao($a) {
            //Cálculo CORRIGIDO da média de avaliações
            /*Obs: O cálculo apresentado no curso estava errado
            O valor de $a será o valor do atributo avaliacaoTotal*/
            $this->avaliacao = $a / ($this->views);
        }
        public function getViews() {
            return $this->views;
        }
        public function setViews($v) {
            $this->views = $v;
        }
        public function getCurtidas() {
            return $this->curtidas;
        }
        public function setCurtidas($c) {
            $this->curtidas = $c;
        }
        public function getReproduzindo() {
            return $this->reproduzindo;
        }
        public function setReproduzindo($r) {
            $this->reproduzindo = $r;
        }
    }
?>