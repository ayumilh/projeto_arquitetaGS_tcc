const divToHide = document.querySelector('.list-historico');
const hiddenButton = document.getElementById('hidden-historico');


hiddenButton.addEventListener('click', () => {
  if(divToHide.style.display == 'none'){
    divToHide.style.display = 'flex';
  }else{
    divToHide.style.display = 'none';
  }
})
