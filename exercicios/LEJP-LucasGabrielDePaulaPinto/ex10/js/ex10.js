let pares = 0;

function adicionarNumero() {
  const valor = parseInt(document.getElementById("numero").value);
  document.getElementById("numero").value = "";

  if (valor === 0) {
    document.getElementById("resultado").innerText =
      `Você digitou ${pares} número(s) par(es).`;
    return;
  }

  if (valor % 2 === 0) {
    pares++;
  }
}