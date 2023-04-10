var btns = document.querySelectorAll('.card-body');
btns.forEach(function(btn) {
    btn.addEventListener('click', function() {
        var loader = this.querySelector('.loader');
        loader.style.display = 'block';
        setTimeout(function() {
            loader.style.display = 'none';
        }, 2000);
    });
});
function toggleDropdown() {
    $('.dropdown').toggleClass('show');
}

