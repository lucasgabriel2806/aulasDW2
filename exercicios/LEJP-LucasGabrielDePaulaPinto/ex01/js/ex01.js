const input_nome = document.querySelector(".input_nome");
const input_email = document.querySelector(".input_email");
const input_telefone = document.querySelector(".input_telefone");
const input_idade = document.querySelector(".input_idade");

const input_submit = document.querySelector(".input_submit");

const p_resultado = document.querySelector(".p_resultado");

input_submit.addEventListener("click", function() {

    if(!input_nome.value || !input_email.value || !input_telefone.value || !input_idade.value) 
    {
        alert("Preencha todos os campos.");
        return;
    }
    
    p_resultado.textContent = `
    ${input_nome.value} tem ${input_idade.value} anos. 
    Seu email: ${input_email.value} e telefone: ${input_telefone.value}
    `;

});