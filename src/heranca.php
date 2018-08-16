<?php
/*
    Herança: Ocorre quando um atributo ou método é PUBLIC ou PROTECTED
    na classe pai.
    
    Uma boa prática é não ter atributos e métodos tão estpecíficos.
    
    Abstração: O quão genérico posso fazer uma classe para que ela 
    possa ser usada em vários lugares

    *Entender bem obre UML
*/

class Documento {

    private $numero;
    
    public function getNumero (){
        return $this->numero;
    }

    public function setNumero ($numero){
        $this->numero = $numero;
    }
}

class CPF extends Documento {
    public function validar():bool {
        $numeroCPF = $this->getNumero();
        //Validação do CPF
        return true;
    }
}

$doc = new CPF();
$doc->setNumero("543.347.482-87");

var_dump($doc->Validar());

echo "<br/>";

echo $doc->getNumero();

?>