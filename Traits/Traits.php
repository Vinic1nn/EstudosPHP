<?php 

declare(strict_types= 1);

trait Veiculo{

    private string $marca;
    private string $modelo;
    private int $ano;


    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function getMarca() : string {
        return $this->marca;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function getModelo() : string {
        return $this->modelo;
    }

    public function setAno($ano){
        $this->ano = $ano;
    }
    public function getAno() : int {
        return $this->ano;
    }

    public function acelerar() : string{
        return "Acelerando ....";
    }
    public function frear() : string{
        return "Freando ....";
    }
    public function virar() : string{
        return "Virando ....";
    }
}

Class Carro {

    use Veiculo;
    private int $portas;


    public function setPorta($portas){
        $this->portas = $portas;
    }
    public function getPorta() : int {
        return $this->portas;
    }

    public function __construct($marca, $modelo, $ano, $portas){
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setAno($ano);
        $this->setPorta($portas);
    }
}

Class Motocicleta {

    use Veiculo;
    private int $cilindradas;


    public function setCilindradas($cilindradas){
        $this->cilindradas = $cilindradas;
    }
    public function getPorta() : int {
        return $this->cilindradas;
    }

    public function __construct($marca, $modelo, $ano, $cilindradas){
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setAno($ano);
        $this->setCilindradas($cilindradas);
    }
}

$obMoto = new Motocicleta("Honda", "Hornet", 2015, 755);
$obCarro = new Carro("Fiat", "Uno", 1995, 2);

print_r($obMoto);
print_r($obCarro);


?>