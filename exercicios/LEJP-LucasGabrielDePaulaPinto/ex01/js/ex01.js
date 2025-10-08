function mostrarInfo() {
    const nome = document.getElementById("nome").value;
    const email = document.getElementById("email").value;
    const telefone = document.getElementById("telefone").value;
    const idade = document.getElementById("idade").value;

    if (nome && email && telefone && idade) {
    document.getElementById("resultado").innerText =
        `${nome} tem ${idade} anos. Seu email: ${email} e telefone: ${telefone}`;
    } else {
    document.getElementById("resultado").innerText =
        "Por favor, preencha todos os campos.";
    }
}