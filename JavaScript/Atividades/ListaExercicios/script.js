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
        document.getElementById("resImp").innerHTML = "O número " + numImp + " é par."; 
    }
}
//Questão 3 

