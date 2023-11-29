<?php 

class Animal {

    public function fazerBarulho() : string {
        return "Animais Fazem Barulhos";
    }
}

class Cachorro extends Animal {

    public function fazerBarulho() : string {
        return "Au Au";
    }
}

class Gato extends Animal {

    public function fazerBarulho() : string {
        return "Miau";
    }
}
class Galinha extends Animal {

    public function fazerBarulho() : string {
        return "Cocorico";
    }
}
class Passaro extends Animal {

    public function fazerBarulho() : string{
        return "Piu Piu";
    }
}

$cachorro = new Cachorro();
$gato = new Gato();
$galinha = new Galinha();
$passaro = new Passaro();

echo $cachorro->fazerBarulho() . "\n"; // Au au!
echo $gato->fazerBarulho() . "\n"; // Miau!
echo $galinha->fazerBarulho() . "\n"; // Có có!
echo $passaro->fazerBarulho() . "\n"; // Piu!

?>