<?php
class Pessoas{
    public nome;
    protected idade;

    public function visDados{
        echo $this->nome."<br>";
        echo $this ->idade."<br>";
    }
}
class Funcionarios extends Pessoas{
    protected salario;
    
    function calcularBonus(){
        echo $this
    }
    class Gerente extends Funcionarios{
         protected salario = 4800;

        
    }
}



?>