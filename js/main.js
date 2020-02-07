var modal = document.querySelector('.main-navigation');
 function openModal() {
    modal.setAttribute('style', 'display:block;')
    modal.insertAdjacentHTML('beforeend', '<div id="closeBurger" onClick="closeModal()"><i class="far fa-times-circle"></i></div>');
}


//listen for click modal
window.addEventListener('click', closeModalOut);
//close modal if click on background
function closeModalOut(e) {
  if (e.target == modal) {
    modal.style.display = 'none';
        document.querySelector('#closeBurger').remove();

  }
}

function closeModal() {
     modal.style.display = 'none';
         document.querySelector('#closeBurger').remove();

  }