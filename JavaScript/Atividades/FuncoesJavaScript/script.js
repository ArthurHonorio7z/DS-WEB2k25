window.alert("Olá Mundo");

var nome = prompt("Nome:");
console.log("Nome:"+nome);
var sobrenome = prompt("Sobrenome:");
console.log("Sobrenome:"+sobrenome);
alert(nome + " " + sobrenome);

alert("Calculadora:");
alert("Soma");
var num1Soma = Number.parseInt(prompt("Digite o primeiro número:"));
var num2Soma = Number.parseInt(prompt("Digite o segundo número:"));
alert(console.log("Resultado: " + (num1Soma + num2Soma)));

//Subtração
alert("Subtração");
var num1Sub = Number.parseInt(prompt("Digite o primeiro número:"));
var num2Sub = Number.parseInt(prompt("Digite o segundo número:"));
console.log(num1Sub);
console.log(num2Sub);
alert("Resultado: " + (num1Sub - num2Sub));

//Multiplicação
alert("Multiplicação");
var num1Mult = Number.parseInt(prompt("Digite o primeiro número:"));
var num2Mult = Number.parseInt(prompt("Digite o segundo número:"));
console.log(num1Mult);
console.log(num2Mult);
alert("Resultado: " + (num1Mult * num2Mult));

//Divisão
alert("Divisão");
var num1Div = Number.parseFloat(prompt("Digite o primeiro número:"));
var num2Div = Number.parseFloat(prompt("Digite o segundo número:"));
console.log(num1Div);
console.log(num2Div);
alert("Resultado: " + (num1Div / num2Div));

//Ao cubo
alert("Multiplicado ao cubo:");
var numCub = Number.parseInt(prompt("Digite o número a ser elevado ao cubo:"));
console.log(numCub);
alert("Resultado: " + (numCub ** 3));

//Conversor de temperatura
alert("Conversor de temperatura F° para C°:");
var numF = Number.parseFloat(prompt("Digite a temperatura em Fahrenheit:"));
console.log(numF);
var resC = (numF - 32) * (5 / 9);
alert("Temperatura em Celsius: " + resC.toFixed(2));

// Juros compostos
alert("Juros compostos");
var numCap = Number.parseFloat(prompt("Digite o capital inicial:"));
console.log(numCap);
var numTemp = Number.parseInt(prompt("Digite a quantidade de meses:"));
console.log(numTemp);
var numTaxa = Number.parseFloat(prompt("Digite a taxa mensal (ex: 0.05 para 5%):"));
console.log(numTaxa);
var total = numCap * (1 + numTaxa) ** numTemp;
alert("Total: " + (total).toFixed(2));
