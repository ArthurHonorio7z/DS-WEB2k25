function criarCartao() {
    var cartao = document.createElement("div");
    cartao.textContent = document.getElementById("nome").value + " - " + document.getElementById("descricao").value;

    var botao = document.createElement("button");
    botao.textContent = "X";
    botao.style.marginTop = "10px";
    botao.style.width = "auto";
    botao.style.padding = "5px";
    botao.style.backgroundColor = "transparent";
    botao.style.border = "none";
    botao.style.color = "black";
    botao.style.fontSize = "16px";
    botao.style.cursor = "pointer";

    var cartoes = document.getElementById("cartoes");
    cartoes.appendChild(cartao);
    
    // Aplicando novas cores suaves
    cartao.style.backgroundColor = "lightblue";
    cartao.style.border = "2px solid darkblue";
    cartao.style.borderRadius = "20px";
    cartao.style.margin = "20px auto";
    cartao.style.padding = "20px";
    cartao.style.color = "darkslategray";
    cartao.style.width = "200px";
    cartao.style.textAlign = "center";

    botao.addEventListener("click", function() {
        cartao.remove();
    });

    cartao.appendChild(botao);
}
