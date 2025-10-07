function calcular() {
    const n1 = parseFloat(document.getElementById("num1").value);
    const n2 = parseFloat(document.getElementById("num2").value);

    if (isNaN(n1) || isNaN(n2)) {
    alert("Por favor, digite dois números válidos!");
    return;
    }

    const soma = n1 + n2;
    const sub = n1 - n2;
    const mult = n1 * n2;
    const div = n2 !== 0 ? (n1 / n2).toFixed(2) : "Divisão por zero!";

    document.getElementById("resultado").innerHTML = `
    <strong>Resultados:</strong><br>
    Soma: ${soma}<br>
    Subtração: ${sub}<br>
    Multiplicação: ${mult}<br>
    Divisão: ${div}
    `;
}