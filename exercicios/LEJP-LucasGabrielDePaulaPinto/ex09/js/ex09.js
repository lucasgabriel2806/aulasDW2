document.getElementById('calcular').addEventListener('click', function() {
  const num = parseFloat(document.getElementById('numero').value);
  const resultadoDiv = document.getElementById('resultado');

  if (isNaN(num)) {
    resultadoDiv.textContent = "Digite um número válido!";
  } else {
    const cima = Math.ceil(num);
    const baixo = Math.floor(num);
    resultadoDiv.innerHTML = `
      Número original: ${num} <br>
      Arredondado pra cima (ceil): ${cima} <br>
      Arredondado pra baixo (floor): ${baixo}
    `;
  }
});