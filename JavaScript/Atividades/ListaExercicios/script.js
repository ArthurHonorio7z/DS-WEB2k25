//Atividade 1

//Questão 1
function nomeboas(){
    var nomeP = document.getElementById("nome").value;

    var nome = nomeP;
    
    document.getElementById("resNome").innerHTML = "Resultado: " + nome;
}
//Questão 2

function numImpar(){
    var numImp = document.getElementById("numImp").value; 
    numImp = Number.parseInt(numImp); 
    if (numImp % 2 !== 0) { 
        document.getElementById("resImp").innerHTML = "O número " + numImp + " é ímpar.";
    } else {
        document.getElementById("resImp").innerHTML = "O número " + numImp + " é par"; 
    }
}
//Questão 3 
function caixaAlta(){
    var strBaixa = document.getElementById("strBaixa").value;
    var strAlta = strBaixa.toUpperCase();
    document.getElementById("strAlta").innerHTML = "O texto em caixa alta é :"+ strAlta;
    
}
//Questão 4
function porcentagem(){
    var numPorcentagem = parseFloat(document.getElementById("numPorcentagem").value);
    var porcentagem = parseFloat(document.getElementById("porcentagem").value);

    var resPorcentagem = numPorcentagem*(porcentagem/100);

    document.getElementById("resPorcentagem").innerHTML = "O valor com porcentagem aplicada é :" + resPorcentagem.toFixed(2);

}
//Quetsão 5
function mudarCor() {
    var div = document.getElementById("minhaDiv");
    var cores = ["vermelho", "azul", "verde", "amarelo", "roxo", "laraja", "rosa"]; 
    var corAleatoria = cores[Math.floor(Math.random() * cores.length)];
    div.style.backgroundColor = corAleatoria;
}
//LISTA 2

//Questão 1 
function maiorIdade(){
    var idade =parseInt(document.getElementById("idade").value);

    if (idade >= 18){
        document.getElementById("resIdade").innerHTML = "Com "+idade+" você é maior de idade";
    }
    else{
        document.getElementById("resIdade").innerHTML = "Com "+idade+" você é menor de idade";
    }
}
//Questão 2
function condicaoNum(){
    var numCondicao = parseFloat(document.getElementById("numCondicao").value);
    if (numCondicao >=0){
        document.getElementById("condicao").innerHTML = "O número "+numCondicao+" é positivo";
    }
    if(numCondicao <0){
        document.getElementById("condicao").innerHTML = "O número "+numCondicao+" é negativo";
    }
    if(numCondicao == 0){
        document.getElementById("condicao").innerHTML = "O número "+numCondicao+" é vazio então 0";
    }
}
//Questão 3
function login() {
    var usuario = document.getElementById("usuario").value;
    var senha = document.getElementById("senha").value;

    if (usuario === "admin" && senha === "12345") {
        document.getElementById("verLogin").innerHTML = "Seja bem-vindo administrador";
    } else {
        document.getElementById("verLogin").innerHTML = "Usuário ou senha inválidos";
    }
}
//Questão 4
function calculadora(){
    var num1Cal = parseFloat(document.getElementById("num1Cal").value);
    var num2Cal = parseFloat(document.getElementById("num2Cal").value);
    var operacao = document.getElementById("operacao").value;

    if (operacao === "+"){
        resCal = num1Cal + num2Cal ;
        document.getElementById("resCal").innerHTML = "A soma dos produtos é :"+resCal;
    }
    if(operacao === "-"){
        resCal = num1Cal - num2Cal;
        document.getElementById("resCal").innerHTML = "A subtração dos produtos é :"+resCal;
    }
    if(operacao === "/"){
        resCal = num1Cal / num2Cal;
        document.getElementById("resCal").innerHTML = "A divisao dos produtos é :"+resCal;
    }
    if(operacao === "*"){
        resCal = num1Cal * num2Cal;
        document.getElementById("resCal").innerHTML = "A multiplicação dos produtos é :"+resCal;
    }
}
//Questão 5
function numImpar2(){
    var numImp2 = document.getElementById("numImp2").value; 
    numImp2 = Number.parseInt(numImp2); 
    if (numImp2 % 2 !== 0) { 
        document.getElementById("resImp2").innerHTML = "O número " + numImp2 + " é ímpar.";
    } else {
        document.getElementById("resImp2").innerHTML = "O número " + numImp2 + " é par"; 
    }
}
//Questão 6
function maiorNumero(){
    var num1 = parseFloat(document.getElementById("num1"));
    var num2 = parseFloat(document.getElementById("num2"));
    var num3 = parseFloat(document.getElementById("num3"));

    if(num1>num2 && num3){
        document.getElementById("resMaior").innerHTML = "O número " + num1 + " é o maior número";   
    }
    if(num2>num1 && num3){
        document.getElementById("resMaior").innerHTML = "O número " + num2 + " é o maior número"; 
    }
    if(num3>num2 && num1){
        document.getElementById("resMaior").innerHTML = "O número " + num3 + " é o maior número";
    }
    }
    //Questão 7
    function tipo(){   
        const lado1 = parseFloat(document.getElementById("lado1").value);
        const lado2 = parseFloat(document.getElementById("lado2").value);
        const lado3 = parseFloat(document.getElementById("lado3").value);
    
    
        if (isNaN(lado1) || isNaN(lado2) || isNaN(lado3) || lado1 <= 0 || lado2 <= 0 || lado3 <= 0 ||
            lado1 + lado2 <= lado3 || lado1 + lado3 <= lado2 || lado2 + lado3 <= lado1) {
            document.getElementById("triangulo").innerHTML = "Valores inválidos ou não formam um triângulo.";
            return;
      }
      
          if (lado1 === lado2 && lado1 === lado3) {
            document.getElementById("triangulo").innerHTML = "O triangulo é equilatero "; 
    
          } else if (lado1 === lado2 || lado1 === lado3 || lado2 === lado3) {
            document.getElementById("triangulo").innerHTML = "O trianguo é isoceles ";
    
          } else {
            document.getElementById("triangulo").innerHTML = "O triangulo é escaleno " ; 
          }
        }