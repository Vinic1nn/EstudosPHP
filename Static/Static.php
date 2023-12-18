<?php 

/*
Uma variável estática existe somente no escopo local da função,
mas não perde seu valor quando o nível de execução do programa deixa o escopo. 

Sendo assim, é um valor compartilhado entre os objetos
*/
Class Transaction {

    private static int $count = 0;

    public int $value;
    public string $name;

    public function __construct(int $value, string $name){
        $this->value = $value;
        $this->name = $name;
        self::$count++;
    }
    
    public static function getCount() : int {
        return self::$count;
    }


}

$compra = new Transaction(50, 'livro');
$compra = new Transaction(50, 'livro');
$compra = new Transaction(50, 'livro');
$compra = new Transaction(50, 'livro');



var_dump(Transaction::getCount())

?>
