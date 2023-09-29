// se ao fechar o modal o usuario nao ter enviado o formulario, deixa uma caixa de aviso para ele terminar de cadastrar
document.addEventListener('DOMContentLoaded', function() {
  const meuForm = document.getElementById('meuForm');

  meuForm.addEventListener('submit', function(event) {
    // event.preventDefault(); // Impede o envio padrão do formulário

    // Realiza o envio do formulário
    fetch(this.action, {
      method: this.method,
      body: new FormData(this),
    })
    .then(response => {
      if (response.ok) {
        // O envio foi bem-sucedido (status HTTP 200)
        return response.text(); // Se necessário, você pode lidar com a resposta do servidor aqui
      } else {
        // O envio falhou (status HTTP diferente de 200)
        throw new Error('Falha no envio do formulário');
      }
    })
    .then(data => {
      // Você pode processar a resposta do servidor aqui
      console.log('Resposta do servidor:', data);
      alert('Formulário enviado com sucesso!');
    })
    .catch(error => {
      // Trate erros de envio aqui, se necessário
      console.error('Erro no envio do formulário:', error);
      alert('Falha no envio do formulário.');
    });
  });
});