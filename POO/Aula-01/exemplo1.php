<?
class ContaBancaria {
    public $saldo;
    public $numeroConta;
    public $nomeTitular;

    public function siglas()($nomeTitular, $numeroConta, $saldo) {
        $this->nomeTitular = $nomeTitular;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function depositar($deposito){
        $this->saldo += $deposito;
        return "Este é o novo saldo".$this->saldo;
    }
    public function sacar($saque){
        $this->saldo -=$saque;
        return "Este é o novo saldo".$this->saldo;,

    }
    public function exibirConta() {
        return "Nome do Titular: {$this->nomeTitular}<br>
                Número da Conta: {$this->numeroConta}<br>
                Saldo: R$ {$this->saldo}<br><br>";
    }
}


$arthur = new ContaBancaria("Arthur Ernane de Freitas Honorio", "18488534968", 5000000.99);

echo "Titular da conta: ".$arthur->nomeTitular;
echo"<br>";
echo $arthur->sacar(20);
echo"<br>";
echo $arthur->e

?>