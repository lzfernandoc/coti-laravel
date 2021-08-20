<?php

class Aluno {
    
    public $nome;
    
    public function criarFrase(){
        return $this->nome . " é aluno da Coti";
    }

    public function setNome($param){
        $this->nomme = $param;
    }

    public function getNome(){
        return $this->nome;
    }

    public function estudar(){

    }


}

?>
