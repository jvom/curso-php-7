<?php
/*
    Polimorfismo: Métodos com o mesmo nome, em clases diferentes (herdadas),
    têm comportamentos difentes

*/

abstract class Animal {
    public function falar(){
        return "Som";
    }

    public function mover(){
        return "Anda";
    }
}

class Cachorro extends Animal {
    public function falar() {
        return "Late";
    }
}

$cachorro  = new Cachorro();

echo $cachorro->mover();




?>