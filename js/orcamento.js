let orcamento1 = document.getElementById('btnOrcamento1')
let orcamento2 = document.getElementById('btnOrcamento2')
let orcamento3 = document.getElementById('btnOrcamento3')

if(orcamento1  || orcamento2 || orcamento3){
    orcamento1.addEventListener("click", () => {
        orcamentoSelecionado('orcamento1')
        orcamento1.classList.remove('indeterminado')
        orcamento1.classList.add('selecionado')
        orcamento1.textContent = 'Selecionado'

        orcamento2.classList.remove('indeterminado')
        orcamento2.classList.add('desabilitado')
        orcamento3.classList.remove('indeterminado')
        orcamento3.classList.add('desabilitado')
    })
    orcamento2.addEventListener("click", () => {
        orcamentoSelecionado('orcamento2')
        orcamento2.classList.remove('indeterminado')
        orcamento2.classList.add('selecionado')
        orcamento2.textContent = 'Selecionado'

        orcamento1.classList.remove('indeterminado')
        orcamento1.classList.add('desabilitado')
        orcamento3.classList.remove('indeterminado')
        orcamento3.classList.add('desabilitado')
    })
    orcamento3.addEventListener("click", () => {
        orcamentoSelecionado('orcamento3')
        orcamento3.classList.remove('indeterminado')
        orcamento3.classList.add('selecionado')
        orcamento3.textContent = 'Selecionado'

        orcamento1.classList.remove('indeterminado')
        orcamento1.classList.add('desabilitado')
        orcamento2.classList.remove('indeterminado')
        orcamento2.classList.add('desabilitado')
    })
}

function orcamentoSelecionado(btn){
  console.log("O Button selecionado foi " + btn)
}