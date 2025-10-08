function calcularFatorial(n) {
  let fatorial = 1;
  for (let i = 1; i <= n; i++) {
    fatorial *= i;
  }
  return fatorial;
}

document.getElementById('calcular').addEventListener('click', function() {
  const n = parseInt(document.getElementById('numero').value);
  const resultadoDiv = document.getElementById('resultado');

  if (isNaN(n) || n < 0) {
    resultadoDiv.textContent = "Digite um número inteiro não negativo!";
  } else {
    const resultado = calcularFatorial(n);
    resultadoDiv.textContent = `O fatorial de ${n} é ${resultado}`;
  }
});