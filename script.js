const modal = document.getElementById('register-modal');
const btnOpenModal = document.getElementById('open-modal');
const btnCloseModal = document.getElementById('close-modal');

btnOpenModal.addEventListener('click', function(e) {
    e.preventDefault();
    modal.style.display = 'flex';
});

btnCloseModal.addEventListener('click', function() {
    modal.style.display = 'none';
});

window.addEventListener('click', function(e) {
    if (e.target === modal) {
        modal.style.display = 'none';
    }
});