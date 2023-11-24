// function pularParaProximo(event, nextFieldId) {
//   if (event.key === "Enter") {
//       const nextField = document.getElementById(nextFieldId);
//       if (nextField) {
//           nextField.focus();
//       }
//   }
// }

// Obtém o botão do modal
const meuBotao = document.getElementById('pin-button');

meuBotao.addEventListener('click', function(event) {
  event.preventDefault();
  event.stopPropagation();
});