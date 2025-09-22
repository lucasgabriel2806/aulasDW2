// Função para juntar nome e sobrenome

function juntarNome() {

    let nome = document.getElementById("nome").value;
    let sobrenome = document.getElementById("sobrenome").value;

    let nomecompleto = nome + ' ' + sobrenome;

    document.getElementById("nomecompleto").innerText = nomecompleto;

}

function janelaNome() {

    let nome = prompt("Entre com seu nome: ", "Exemplo: Carlos");
    let sobrenome = prompt("Entre com seu sobrenome: ", "Exemplo: Oliveira");

    if (nome != null && sobrenome != null) {

        // 2. Uso de interpolação string (template strings).
        let nomecompleto1 = `<i>${nome} <br>${sobrenome}</i>`;

        // 3. 

        // 4. 

    } else {

        document.writeln("<p><strong>Nome e/ou sobrenome não foram informados</strong></p>");

    }

}