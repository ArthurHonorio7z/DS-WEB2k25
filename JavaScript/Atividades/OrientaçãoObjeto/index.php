<?php

class Garrafa {
    public $capacidade;
    public $material;
    public $tampa;
    public $forma;
    public $logo;

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
        return "Capacidade: {$this->capacidade}L<br>" .
               "Material: {$this->material}<br>" .
               "Tipo de tampa: {$this->tampa}<br>" .
               "Forma: {$this->forma}<br>" .
               "Logo: {$this->logo}<br><br>";
    }
}

class VideoGame {
    public $modelo;
    public $marca;
    public $lancamento;
    public $exclusivos;
    public $memoria;

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
        return "Modelo: {$this->modelo}<br>" .
               "Marca: {$this->marca}<br>" .
               "Ano de lançamento: {$this->lancamento}<br>" .
               "Jogos exclusivos: {$this->exclusivos}<br>" .
               "Memória: {$this->memoria}GB<br><br>";
    }
}

class Lampada {
    public $voltagem;
    public $tipo;
    public $potencia;
    public $cor;
    public $modelo;

    public function ligar() {
        return "A lâmpada está acesa.<br>";
    }

    public function apagar() {
        return "A lâmpada está apagada.<br>";
    }

    public function iluminar() {
        return "A lâmpada está iluminando forte!<br>";
    }

    public function exibirLampada() {
        return "Voltagem: {$this->voltagem}V<br>" .
               "Tipo: {$this->tipo}<br>" .
               "Potência: {$this->potencia}W<br>" .
               "Cor: {$this->cor}<br>" .
               "Modelo: {$this->modelo}<br><br>";
    }
}

class Tenis {
    public $tamanho;
    public $modelo;
    public $material;
    public $marca;
    public $cor;

    public function correr() {
        return "O tênis está pronto para correr.<br>";
    }

    public function andar() {
        return "O tênis está pronto para andar.<br>";
    }

    public function saltar() {
        return "O tênis está pronto para saltar.<br>";
    }

    public function exibirTenis() {
        return "Modelo: {$this->modelo}<br>" .
               "Tamanho: {$this->tamanho}<br>" .
               "Material: {$this->material}<br>" .
               "Cor: {$this->cor}<br>" .
               "Marca: {$this->marca}<br><br>";
    }
}

class Computador {
    public $processador;
    public $memoriaRam;
    public $armazenamento;
    public $sistemaOperacional;
    public $placaVideo;

    public function programar() {
        return "O computador está pronto para codar.<br>";
    }

    public function jogar() {
        return "O computador está preparado para jogar.<br>";
    }

    public function trabalhar() {
        return "O computador está pronto para o trabalho.<br>";
    }

    public function exibirComputador() {
        return "Processador: {$this->processador}<br>" .
               "Memória RAM: {$this->memoriaRam}GB<br>" .
               "Armazenamento: {$this->armazenamento}GB<br>" .
               "Sistema Operacional: {$this->sistemaOperacional}<br>" .
               "Placa de Vídeo: {$this->placaVideo}<br><br>";
    }
}

class ContaBancaria {
    public $saldo;
    public $numeroConta;
    public $nomeTitular;

    public function exibirConta(){
        return "Nome do Titular: {$this->nomeTitular}<br>" .
               "Número da Conta: {$this->numeroConta}<br>" .
               "Saldo: R$ " . number_format($this->saldo, 2, ',', '.') . "<br><br>";
    }
}

// Instanciando objetos e exibindo suas propriedades

$garrafa = new Garrafa();
$garrafa->capacidade = 1.5;
$garrafa->material = "Plástico";
$garrafa->tampa = "Rosca";
$garrafa->forma = "Cilíndrica";
$garrafa->logo = "Coca-Cola";

echo $garrafa->abrir();
echo $garrafa->fechar();
echo $garrafa->beber();
echo $garrafa->exibirGarrafa();

$videogame = new VideoGame();
$videogame->modelo = "PlayStation 5";
$videogame->marca = "Sony";
$videogame->lancamento = 2020;
$videogame->exclusivos = "God of War, The Last of Us";
$videogame->memoria = 825;

echo $videogame->ligar();
echo $videogame->jogar();
echo $videogame->salvar();
echo $videogame->exibirVideoGame();

$lampada = new Lampada();
$lampada->voltagem = 220;
$lampada->tipo = "LED";
$lampada->potencia = 15;
$lampada->cor = "Branca";
$lampada->modelo = "E27";

echo $lampada->ligar();
echo $lampada->apagar();
echo $lampada->iluminar();
echo $lampada->exibirLampada();

$tenis = new Tenis();
$tenis->modelo = "Air Max";
$tenis->tamanho = 42;
$tenis->material = "Couro sintético";
$tenis->marca = "Nike";
$tenis->cor = "Preto";

echo $tenis->correr();
echo $tenis->andar();
echo $tenis->saltar();
echo $tenis->exibirTenis();

$computador = new Computador();
$computador->processador = "Intel Core i9";
$computador->memoriaRam = 32;
$computador->armazenamento = 1000;
$computador->sistemaOperacional = "Windows 11";
$computador->placaVideo = "NVIDIA RTX 4090";

echo $computador->programar();
echo $computador->jogar();
echo $computador->trabalhar();
echo $computador->exibirComputador();

$arthur = new ContaBancaria();
$arthur->nomeTitular = "Arthur Ernane de Freitas Honorio";
$arthur->numeroConta = "18488534968";
$arthur->saldo = 5000000.99;

echo $arthur->exibirConta();

$guilherme = new ContaBancaria();
$guilherme->nomeTitular = "Guilherme Oliveira Gomes";
$guilherme->numeroConta = "98766787908";
$guilherme->saldo = 25;

echo $guilherme->exibirConta();

$matheus = new ContaBancaria();
$matheus->nomeTitular = "Matheus Pacheco Machado Vieira dos Santos";
$matheus->numeroConta = "1987773823";
$matheus->saldo = 0.86;

echo $matheus->exibirConta();

?>
