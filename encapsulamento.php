<?php
/* Encapsulamento é a forma que protegemos e lidamos com o controle de acesso */

class Pessoa {
    public $nome = "Rasmus Lerdorf";

    /* protected: atributos e métodos da mesma classes ou quem herda (filho) */
    protected $idade = 46;

    /* private: atributos e métodos da mesma classes */
    private $senha = "123456";


    /* Método estando na mesma class consegue enxergar tudo */
    public function verDados (){
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }
}

class Programador extends Pessoa {
    

}



    $eu = new Pessoa();

    $eu->verDados();