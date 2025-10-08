function verificar() {
    const nota = parseFloat(document.getElementById("nota").value);
    const presenca = parseFloat(document.getElementById("presenca").value);
    const resultado = document.getElementById("resultado");

    if (isNaN(nota) || isNaN(presenca)) {
    resultado.innerText = "Por favor, preencha todos os campos.";
    return;
    }

    if (presenca < 75) {
    resultado.innerText = "Reprovado por falta.";
    } else if (nota >= 6) {
    resultado.innerText = "Aprovado!";
    } else if (nota >= 4) {
    resultado.innerText = "Segunda época.";
    } else {
    resultado.innerText = "Reprovado.";
    }
}