<?php

    include "Aluno.php";

    class Linguagem extends Aluno{

        private $linguagem;
        private $descricao;

        public function __construct(){
            $this->linguagem = null;
            $this->descricao = null;
        }

        public function getLinguagem(){
            return $this->linguagem;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function setLinguagem($param){
            $this->linguagem = $param;
        }

        public function setDescricao($param){
            $this->descricao = $param;
        }



    }
?>

