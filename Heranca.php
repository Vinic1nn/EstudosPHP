
<?php 

class Pessoa {

    public $nome;
    public $idade;

}

class Aluno extends Pessoa {
    public $matricula;
}

class Carro {
    public $marca;
    public $modelo;
    public $ano;
}

class Ferrari extends Carro {
    public $potencia;
}

class Animal {

    public $nome;
    public $especie;
}
class Mamifero extends Animal {
    public $pelo;

}
class Cachorro extends Mamifero {
    public $raca;
}
?>