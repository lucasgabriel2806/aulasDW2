/** 
 * Função para validar o dia da semana, com opções:
 * 1 => Domingo, 2 => Segunda, até 7 => Sábado.
 * Caso as opções estejam fora de 1 a 7(default), então:
 * Dia da semana desconhecido!!!
*/

function validarDiaSemana() {

    let dia = parseInt(document.getElementById("valor1").value);
    let diaDaSemana = "";

    switch (dia) {
        case 1: diaDaSemana = "Domingo"; break;
        case 2: diaDaSemana = "Segunda-feira"; break;
        case 3: diaDaSemana = "Terça-feira"; break;
        case 4: diaDaSemana = "Quarta-feira"; break;
        case 5: diaDaSemana = "Quinta-feira"; break;
        case 6: diaDaSemana = "Sexta-feira"; break;
        case 7: diaDaSemana = "Sábado"; break;
        default: diaDaSemana = "Dia da semana desconhecido!!!";
    }

    document.getElementById("resultado").textContent = `Dia da semana ${diaDaSemana}`;

}