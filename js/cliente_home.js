// Função para verificar o preenchimento dos campos do formulário
function verificarCampos() {
  // Obter referências aos campos de entrada
  const selecaoServico = document.querySelector('select[name="selecao_servico"]');
  const dataServico = document.querySelector('input[name="data_servico"]');
  const valorServico = document.querySelector('input[name="valor_servico"]');
  const anexoServico = document.querySelector('input[name="anexo_servico"]');
  const radioDespesa = document.querySelector('input[value="Despesa"]');
  const radioReceita = document.querySelector('input[value="Receita"]');

  // Verificar se pelo menos um campo está vazio
  if (
      selecaoServico.value === "" ||
      dataServico.value === "" ||
      valorServico.value === "" ||
      anexoServico.value === "" ||
      (!radioDespesa.checked && !radioReceita.checked)
  ) {
      // Pelo menos um campo está vazio, mostrar mensagem de erro ou realizar outra ação desejada
      const aviso = document.querySelector('.avisoCampoVazio');
      aviso.style.display = "block";
      return false; // Impedir o envio do formulário
  }

  // Todos os campos estão preenchidos, permitir o envio do formulário
  return true;
}

// Adicionar um ouvinte de evento para o envio do formulário
window.addEventListener("DOMContentLoaded", (event) => {
  const formulario = document.getElementById('formControleFinanceiro');
  formulario.addEventListener('submit', function (event) {
    if (!verificarCampos()) {
      event.preventDefault();
    }
  })

  // button de fechar o modal de aviso
  const buttonAviso = document.querySelector('#avisoModalClose');
  const modalAviso  = document.querySelector('.avisoCampoVazio');

  buttonAviso.addEventListener('click', function(){
    modalAviso.style.display = "none"
  })
})