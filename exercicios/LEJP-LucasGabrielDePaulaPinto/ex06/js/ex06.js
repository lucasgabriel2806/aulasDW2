function calcularMedia() {
  const inputs = document.querySelectorAll("#inputs input");
  let numeros = [];

  for (let input of inputs) {
    const valor = parseFloat(input.value);
    if (isNaN(valor)) {
      document.getElementById("resultado").innerText = "Preencha todos os campos corretamente.";
      return;
    }
    numeros.push(valor);
  }

  const soma = numeros.reduce((acc, val) => acc + val, 0);
  const media = soma / numeros.length;

  document.getElementById("resultado").innerText = `A média é ${media.toFixed(2)}.`;
}
