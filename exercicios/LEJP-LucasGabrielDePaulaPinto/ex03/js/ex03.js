function calcular() {
    const base = parseFloat(document.getElementById("base").value);
    const altura = parseFloat(document.getElementById("altura").value);

    if (isNaN(base) || isNaN(altura)) {
    alert("Por favor, digite valores válidos!");
    return;
    }

    const area = base * altura;
    const perimetro = 2 * (base + altura);

    document.getElementById("resultado").innerHTML = `
    <strong>Resultados:</strong><br>
    Área: ${area.toFixed(2)}<br>
    Perímetro: ${perimetro.toFixed(2)}
    `;
}