<?php

class Garrafa {
    public $capacidade;
    public $material;
    public $tampa;
    public $forma;
    public $logo;

    public function siglas()($capacidade, $material, $tampa, $forma, $logo) {
        $this->capacidade = $capacidade;
        $this->material = $material;
        $this->tampa = $tampa;
        $this->forma = $forma;
        $this->logo = $logo;
    }

    public function abrir() {
        return "A garrafa está aberta.<br>";
    }

    public function fechar() {
        return "A garrafa está fechada.<br>";
    }

    public function beber() {
        return "Você está bebendo da garrafa.<br>";
    }

    public function exibirGarrafa() {
        return "Capacidade: {$this->capacidade}L<br>
                Material: {$this->material}<br>
                Tipo de tampa: {$this->tampa}<br>
                Forma: {$this->forma}<br>
                Logo: {$this->logo}<br><br>";
    }
}

class VideoGame {
    public $modelo;
    public $marca;
    public $lancamento;
    public $exclusivos;
    public $memoria;

    public function siglas()($modelo, $marca, $lancamento, $exclusivos, $memoria) {
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->lancamento = $lancamento;
        $this->exclusivos = $exclusivos;
        $this->memoria = $memoria;
    }

    public function jogar() {
        return "O jogo iniciou.<br>";
    }

    public function salvar() {
        return "O jogo foi salvo.<br>";
    }

    public function ligar() {
        return "O videogame está ligado.<br>";
    }

    public function exibirVideoGame() {
        return "Modelo: {$this->modelo}<br>
                Marca: {$this->marca}<br>
                Ano de lançamento: {$this->lancamento}<br>
                Jogos exclusivos: {$this->exclusivos}<br>
                Memória: {$this->memoria}GB<br><br>";
    }
}

class ContaBancaria {
    public $saldo;
    public $numeroConta;
    public $nomeTitular;

    public function siglas()($nomeTitular, $numeroConta, $saldo) {
        $this->nomeTitular = $nomeTitular;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function exibirConta() {
        return "Nome do Titular: {$this->nomeTitular}<br>
                Número da Conta: {$this->numeroConta}<br>
                Saldo: R$ {$this->saldo}<br><br>";
    }
}

// Criando objetos e exibindo informações

$garrafa = new Garrafa(1.5, "Plástico", "Rosca", "Cilíndrica", "Coca-Cola");
echo $garrafa->abrir();
echo $garrafa->fechar();
echo $garrafa->beber();
echo $garrafa->exibirGarrafa();

$videogame = new VideoGame("PlayStation 5", "Sony", 2020, "God of War, The Last of Us", 825);
echo $videogame->ligar();
echo $videogame->jogar();
echo $videogame->salvar();
echo $videogame->exibirVideoGame();

$arthur = new ContaBancaria("Arthur Ernane de Freitas Honorio", "18488534968", 5000000.99);
echo $arthur->exibirConta();

$guilherme = new ContaBancaria("Guilherme Oliveira Gomes", "98766787908", 25);
echo $guilherme->exibirConta();

$matheus = new ContaBancaria("Matheus Pacheco Machado Vieira dos Santos", "1987773823", 0.86);
echo $matheus->exibirConta();

?>
