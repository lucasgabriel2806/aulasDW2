function calcularSoma() {
  const n = parseInt(document.getElementById("numero").value);
  if (isNaN(n) || n < 1) {
    document.getElementById("resultado").innerText = "Digite um número válido (maior ou igual a 1)";
    return;
  }
  
  const soma = (n * (n + 1)) / 2;
  document.getElementById("resultado").innerText = `A soma de 1 até ${n} é ${soma}.`;
}
