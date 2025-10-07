function calcularMedias() {
  const inputs = document.querySelectorAll("#notasForm input");
  const resultadoDiv = document.getElementById("resultado");
  resultadoDiv.innerHTML = "";

  const matriz = [[], [], []]; // 3 alunos, 2 notas cada

  for (let i = 0; i < inputs.length; i++) {
    const valor = parseFloat(inputs[i].value);
    if (isNaN(valor)) {
      resultadoDiv.innerText = "Preencha todas as notas corretamente.";
      return;
    }
    const alunoIndex = Math.floor(i / 2);
    matriz[alunoIndex].push(valor);
  }

  matriz.forEach((notas, index) => {
    const media = (notas[0] + notas[1]) / 2;
    resultadoDiv.innerHTML += `<p>Aluno ${index + 1}: Média = ${media.toFixed(2)}</p>`;
  });
}
