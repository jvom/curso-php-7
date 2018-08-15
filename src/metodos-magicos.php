<?php
/*
    __ siginifica que é um método mágico
    ex: __construct
*/

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct ($a, $b, $c) {
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    /* __destruct: Última coisa a ser executada antes de liberar memória. Similar ao unset() */
    public function __destruct () { 
        //var_dump(" - DESTRUIDA");
    }

    /*__toString:  Sempre que for dado um echo no objeto, transforma pra string  com o formato indicado dentro da função */
    public function __toString() {
        return $this->logradouro.", ".$this->numero." - ".$this->cidade;
    }

}


$endereco = new Endereco ("Rua da Mata", "850", "Belém");
echo $endereco;

?>
