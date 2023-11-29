<?php 

interface Animal {
    public function fazerBarulho() : string;
}

Class Gato implements Animal{
    public function fazerBarulho() : string {
        return "Miau Miau!";
    }
}

Class Cachorro implements Animal {
    public function fazerBarulho() : string {
        return "Au Au!";
    }
}

function barulhosDeAnimais(Animal $animal) : string {
    $barulho = $animal->fazerBarulho();
    return $barulho;
}

$gatoBarulho = barulhosDeAnimais(new Gato());
$cachorroBarulho = barulhosDeAnimais(new Cachorro());

echo $cachorroBarulho;
echo $gatoBarulho;

?>