/* Arquivo: 
   => utilidades (arquivo js com funções)  
*/

//  Função para juntar nome e sobrenome.
function juntarNome() {
    let      nome = document.getElementById("nome").value;
    let sobrenome = document.getElementById("sobrenome").value;

    // 1. Concatenação de strings normal.
    let nomecompleto = nome + ' ' + sobrenome;

    //console.log('Nome: ' + nome);
    //console.log('Sobrenome: ' + sobrenome);
    //console.log('Nome Completo: ' + nomecompleto);

    // As três linhas acima (13,14 e 15) são substituídas 
    // pela linha abaixo na função mostrarLog(nome, sobrenome).
    mostrarLog(nome, sobrenome);

    // 2. Uso de interpolação strings (template strings).
    let nomecompleto1 = `<i>${nome} <br>${sobrenome}</i>`;    

    // 3. Injetar texto da variável nomecompleto na tag <p> no id "nomecompleto".
    document.getElementById("nomecompleto").innerText = nomecompleto;

    // 4. Executar a injeção de tags (elementos HTML) + textos:
    document.getElementById('nomecompleto1').innerHTML = nomecompleto1;    

}

//  Função para capturar nome e sobrenome no prompt.
function janelaNome() {
    let      nome = prompt("Entre com seu nome: ", "Carlos");
    let sobrenome = prompt("Entre com seu sobrenome: ", "Oliveira");
    
    if (nome === null || sobrenome === null ||
        nome === "" || sobrenome === "") {
            document.writeln("<p><strong>Nome e/ou sobrenome não foram informados!!!</strong></p>");
            console.log("Nome e sobrenome vazios!!!");        
    } else {
        // Uso de interpolação strings (template strings).
        let nomecompleto1 = `<i>${nome} <br>${sobrenome}</i>`;

        // Executar a injeção de tags (elementos HTML) + textos:
        document.getElementById('nomecompleto1').innerHTML = nomecompleto1;
        console.log(nome + ' ' + sobrenome);        
    }
 }

 // Função para limpar o formulário de dados.
function limparDados() {
    // Exclui os valores contidos em nome e sobrenome (inputs).
    document.getElementById("nome").value = "";
    document.getElementById('sobrenome').value = "";
    
    // Exclui os valores contidos no formulário nomes (nome e sobrenome).
    //document.getElementById("nomes").reset();

    // Limpar o parágrafo do nomecompleto e nomecompleto1.
    document.getElementById("nomecompleto").innerText = "";
    document.getElementById("nomecompleto1").innerHTML = "";

    // Após limpar o formulário e limpar os parágrafos nomecompleto
    // e nomecompleto1, posicionar o cursor no foco do campo nome.
    ajustarFoco();
}

// Função para mostrar o log de saída de dados.
function mostrarLog(n,s) {
    console.log("Nome: " + n);
    console.log("Sobrenome: " + s);
    console.log("Nome Completo: " + n + " " + s);
}

// Função para ajustar o foco no campo nome.
function ajustarFoco() {
    document.getElementById("nome").focus();
}

// Função para escrever o nome completo na página web (document).
function escreverNome() {
    let nome = document.getElementById("nome").value;
    let sobrenome = document.getElementById("sobrenome").value;
    alerta();
    let resultado = "<strong>" + nome + " " + sobrenome + "</strong><br />";                     
    document.writeln(resultado);
    document.writeln("<button id='voltar' onclick='location.reload()'>" +
                          "<i class='fa fa-arrow-left'></i>Voltar</button>");
    mostrarLog(nome, sobrenome);
}

// Função Alerta
function alerta() {
    window.alert("Enquanto não fechar esta janela, \nnão será mostrado o nome completo.");
}