<?php 

/**
 * Situação onde é aplicado uma Herança Horizontal, onde as duas classes não possui um pai comum,
 * Mas utilizam das mesmas propriedades e metodos.
 * Possibilitando a reutilização de código!
 */
trait Nome{
    private string $nome;


    public function setNome(string $nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }

}

Class Cliente{

    use Nome;

}

Class Cachorro {
    use Nome;
}


$obCliente = new Cliente();
$obCachorro = new Cachorro();

$obCliente->setNome("Vanildo");
$obCachorro->setNome("Rafaelo");

echo $obCliente->getNome() . "\n";
echo $obCachorro->getNome();


?>